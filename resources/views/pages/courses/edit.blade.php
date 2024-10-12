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
                        <form id="courseForm" action="{{ route('courses.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        

                            <div class="form-row">
                            <div class="form-group col-md-4">
                                    <label>Course Title</label>
                                    <input type="text" class="form-control" value="{{ $course->title }}" name="title" placeholder="Course Title">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Batch</label>
                                    <input type="text" class="form-control" name="batch"  value="{{ $course->batch }}"  placeholder="Batch">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description" rows="3">{{ $course->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Courses Picture</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="upload" value="{{ $course->upload }}"  >
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Slots</label>
                                    <input type="number" class="form-control" name="slots" value="{{ $course->slots }}" placeholder="Slots">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Start Date</label>
                                    <input type="date" class="form-control" name="start_date" value="{{ $course->start_date }}" placeholder="Date of Birth">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>End Date</label>
                                    <input type="date" class="form-control" name="end_date" value="{{ $course->end_date }}" placeholder="Date of Birth">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Scholar Type</label>
                                    <input type="text" class="form-control" name="scholar_type" value="{{ $course->scholar_type }}" placeholder="Type of Scholar">
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('courseForm');

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


