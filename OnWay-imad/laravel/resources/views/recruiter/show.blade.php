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
                                <div class="col-md-5"><h5> Recruiter </h5></div>
                                <div class="col-md-12"><h6>Company Size : {{$user->recruiter->companySize}}</h6></div>
                                <div class="col-md-8 text-capitalize"><h6>Industry : {{$user->recruiter->industry}}</h6></div>
                                <div class="col-md-4"><a href="{{$user->recruiter->companyWebsite}}">Web Site</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-8 p-1"><h5><a href="">{{$user->email}}</a></h5></div>
                        <div class="col-md-4 p-1"><p>{{$user->phoneNumber}}</p> </div>
                        <h4 class="col-md-12 mb-2">Company OverView
                        <div class="col-md-12 row g-3 mt-3">
                            <div class="col-md-12">
                                @if ($user->recruiter->companyOverview)
                                <iframe src="{{ route('file.overview', ['filename' =>$user->recruiter->companyOverview])}}" width="100%" height="300px"></iframe>
                                    
                                @else
                                <h5 class="text-center">
                                    Nothing
                                </h5>
                                
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">     
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="text-dark comp bg-white p-4 rounded-3">
                                <h4>About Company</h4>
                                <h6>{{$user->recruiter->companyAbout}}</h6>
                            </div>
                       </div>
                        
                    </div>
                </div>
                <div class="col-md-12 pt-3">
                    <div class="row g-3">
                        
                        <div class="col-md-12">
                            <div class="text-dark bg-white job-p p-4 rounded-3">
                                <h4>My Offers </h4>
                                <div class="row g-3 jobs m-4">
                                    @foreach ($offers as $item) 
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