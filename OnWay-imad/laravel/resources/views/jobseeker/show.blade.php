@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{asset("css/profile.css")}}">
@endsection
@section('content')
    <section class="">
        <div class="row g-3 p">
            <div class="col-md-4 rounded-3">
                <div class="text-dark bg-white p-4 profile">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <img src="{{ route('file.picture', ['filename' =>$user->picture])}}" class="picture rounded-3" width="90" height="90" alt="Picture">
                        </div>
                        <div class="col-md-9">
                            <div class="row g-3">
                                <div class="col-md-7"><h4 class=" line">{{$user->name}}</h4></div>
                                <div class="col-md-5"><h5> Job Seeker </h5></div>
                                <div class="col-md-12"><h6>{{date('d / m / Y',strtotime($user->jobseeker->dateBirthday))}}</h6></div>
                                <div class="col-md-10 text-capitalize"><h6>{{$user->title}}</h6></div>
                                <div class="col-md-2"><a href="#"><i class="bi bi-linkedin"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-8 p-1"><h5><a href="">{{$user->email}}</a></h5></div>
                        <div class="col-md-4 p-1"><p>{{$user->phoneNumber}}</p> </div>
                        <h4 class="col-md-12 mb-2">Curriculum vitæ (CV)
                        <div class="col-md-12 row g-3 mt-3">
                            <div class="col-md-12">
                                @if ($user->jobseeker->cv)

                                <iframe src="{{ route('file.cv', ['filename' =>$user->jobseeker->cv])}}" width="100%" height="300px"></iframe>
                                @else

                                <h6 class="text-center">
                                    Nothing
                                </h6>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="text-dark comp bg-white p-4 rounded-3">
                                <h3>Skills</h3>
                                <div class="items">
                                    <div id="output-container">
                                        @foreach ($user->jobseeker->skills as $item)
                                            <div class="output-item">{{$item}}</div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                       </div>
                        <div class="col-md-6">
                            <div class="text-dark comp bg-white p-4 rounded-3">
                                <h3>Langues</h3>
                                <div class="items">
                                    <div id="output-container">
                                        @foreach ($user->jobseeker->languages as $item)
                                            <div class="output-item">{{$item}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-3">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <div class="text-dark bg-white p-4 infos rounded-3">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <h4>Education

                                        </h4>
                                        <p>{{substr($user->jobseeker->educationDescription,0,200)}}</p>
                                        <p><!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-success form-control" data-bs-toggle="modal" data-bs-target="#education">
                                                <i class="bi bi-plus"></i> See More
                                            </button></p>

                                        <!-- Modal -->
                                        <div class="modal fade" id="education" tabindex="-1" aria-labelledby="educationLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="educationLabel">Education</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{$user->jobseeker->educationDescription}}
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Experiance

                                        </h4>
                                        <p>{{substr($user->jobseeker->experienceDescription,0,200)}}</p>
                                        <p><!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-success form-control" data-bs-toggle="modal" data-bs-target="#experiance">
                                                <i class="bi bi-plus"></i> See More
                                            </button></p>

                                        <!-- Modal -->
                                        <div class="modal fade" id="experiance" tabindex="-1" aria-labelledby="experianceLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="experianceLabel">Experiance</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{$user->jobseeker->experienceDescription}}
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Location</h4>
                                        <p>{{$user->location}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-dark bg-white job-p p-4 rounded-3">
                                <h4>My Applications </h4>
                                <div class="row g-3 jobs m-4">
                                    @foreach ($postulates as $item)
                                    <div class="col-md-12">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                              <div class="col-md-4 d-center">
                                                <h3><i class="bi bi-sticky-fill"></i></h3>
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                  <h5 class="card-title">{{$item->title}}</h5>
                                                  <p class="card-text"><small class="text-body-secondary">{{$item->created_at}}</small></p>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
