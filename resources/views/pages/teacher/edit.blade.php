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
                        <form id="teacherForm" action="{{ route('teacher.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name" value="{{ $user->middle_name }}" placeholder="Middle Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="contact" value="{{ $user->teacherDetails->contact }}" placeholder="Phone Number">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Male" {{ old('gender', $user->teacherDetails->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender', $user->teacherDetails->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="date_of_birth" value="{{ $user->teacherDetails->date_of_birth }}" placeholder="Date of Birth">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Password</label> <span style="color:red;">( not required to update )</span>
                                    <input type="password" class="form-control" name="password"  placeholder="Password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $user->teacherDetails->address }}">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code" value="{{ $user->teacherDetails->zip_code }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Accreditation Number</label>
                                    <input type="text" class="form-control" name="accreditation_number" value="{{ $user->teacherDetails->accreditation_number }}" placeholder="Accreditation Number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Subject</label>
                                    <select name="subject" class="form-control">
                                        <option value="">Select a Course</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}" {{ $user->teacherDetails && $user->teacherDetails->course && $user->teacherDetails->course->id == $course->id ? 'selected' : '' }}>
                                                {{ $course->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Accreditation Date</label>
                                    <input type="date" class="form-control" name="date_of_accreditation" value="{{ $user->teacherDetails->date_of_accreditation }}" placeholder="Accreditation Date">
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
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('teacherForm');

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
</x-app-layout>