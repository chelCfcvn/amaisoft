@extends('staff.show')

@section('profile')
    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                    style="width: 150px; z-index: 1">
                                <a href="{{ route('send.mail',$profile->id) }}"
                                    onclick="return confirm('Bạn có thay đổi lại mật khẩu không?')" type="button"
                                    class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                                    Reset Password
                                </a>
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>{{ $profile->name }}</h5>
                                <p>Ha Noi</p>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5">{{ $profile->age }}</p>
                                    <p class="small text-muted mb-0">Age</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5">{{ $profile->gender }}</p>
                                    <p class="small text-muted mb-0">Gender</p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">About</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1">
                                    <h3>Position:</h3> {{ $profile->position->name }}</p>
                                    <p class="font-italic mb-1">
                                    <h3>Department:</h3> {{ $profile->department->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
