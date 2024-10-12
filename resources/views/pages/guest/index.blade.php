<x-app-layout>

            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Training's Information</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Training's Information</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div id="error-messages"></div>
            <div id="success-message" style="display: none"></div>
            <div class="row g-4">
                @foreach($courses as $course)
                <div class="col-xl-3">
                    <div class="card p-5">
                        @if($course->upload)
                        <center><img src="{{ asset($course->upload) }}" alt="{{ $course->title }}" class="img-fluid card-img-top" style="width: 30%;"></center>
                        @else
                        <center><img src="{{ asset('assets/images/tesda.png') }}" alt="user image" class="img-fluid card-img-top" style="width: 30%;"></center>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Slots left :{{ $course->slots }}</h5>

                            <div class="progress mb-4" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <h5 class="card-title" style="text-align: center;">{{ $course->title }}</h5>
                            <p class="card-text" style="text-align: justify;">{{ $course->description }}</p>

                            <div class="post-meta" style="display: flex; justify-content: space-between; align-items: center;">
                                <p class="post-author" style="margin: 0;">Classes Start :</p>
                                <p class="post-date" style="margin: 0;">
                                <time datetime="2022-01-01">&nbsp;&nbsp;&nbsp;{{ $course->start_date }}</time>
                                </p>
                            </div>
                            <br>

                            <a href="{{ route('guest.form-fill-up', ['id' => $course->id]) }}" class="btn btn-primary">
                                    <i class="feather icon-plus"></i> Enroll
                                </a>
                    
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
</x-app-layout>
