<x-app-layout>
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Teacher's Information</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Teacher's Information</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2">Teacher's Form</h5>
                        <hr>
                        <form id="teacherForm" action="{{ route('teacher.store') }}" method="POST">
                            @csrf <!-- Add CSRF token field -->

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="contact" placeholder="Phone Number">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="">select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Accreditation Number</label>
                                    <input type="text" class="form-control" name="accreditation_number" placeholder="Accreditation Number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Subject</label>
                                    <select name="subject" class="form-control">
                                        <option value="">Select a Course</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col-md-4">
                                    <label>Accreditation Date</label>
                                    <input type="date" class="form-control" name="date_of_accreditation" placeholder="Accreditation Date">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="upload">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('teacherForm');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {
    const formData = new FormData(form);

    axios.post(form.action, formData, {
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Content-Type': 'multipart/form-data'
        }
    })
    .then(response => {
        Swal.fire(
            'Submitted!',
            'Your form has been submitted.',
            'success'
        ).then(() => {
            // Handle the redirection here
            window.location.href = response.data.redirectUrl; // Make sure your backend sends this URL
        });
    })
    .catch(error => {
        Swal.fire(
            'Error!',
            'There was an error submitting your form.',
            'error'
        );
        console.error(error);
    });
} else {
    Swal.fire(
        'Cancelled',
        'Your form submission has been cancelled.',
        'error'
    );
}

        });
    });
});
</script>
