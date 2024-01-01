@extends('layouts.app')
@section('title','Register')
@section('links')
    <link rel="stylesheet" href="{{asset("css/js-register.css")}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
    <section class="job-seekers-register-content">
        <form action="{{route('jobseekers.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="personal p-3 switch">
                <div class="js-register-form-picture d-center">

                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/ghhwiltn.json"
                        trigger="loop"
                        delay="1000"
                        style="width:100px;height:100px">
                    </lord-icon>
                    <h2 class="line">Job Seeker</h2>
                </div>
                <h3 class=" m-3"><i class="bi bi-person-lines-fill"></i> Personal Information</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="firstName" placeholder="First name" aria-label="First name">
                        @error('firstName')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="lastName" placeholder="Last name" aria-label="Last name">
                        @error('lastName')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                      <input type="email" name="email" placeholder="Email" class="form-control" aria-label="Email">
                        @error('email')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                      <input type="password" name="password" placeholder="Password" class="form-control" aria-label="Password">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                      <input type="password" name="password_confirmation" placeholder="Confirme Password" class="form-control" aria-label="Confirme password">
                        @error('password_confirmation')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <select class="form-select text-center" name="contry">
                            @for ($i = 212; $i < 300; $i++)
                            <option value="+{{$i}}">+{{$i}}</option>
                            @endfor
                        </select>
                        @error('contry')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-8">
                      <input type="number" name="phoneNumber" placeholder="Phone Number" class="form-control" aria-label="Phone Number">
                        @error('phoneNumber')
                        <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <select name="day" class="form-select">
                            <option value="Day" hidden>Day</option>
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{$i}}" >{{$i}}</option>
                            @endfor
                        </select>
                        @error('day')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <select name="month" class="form-select">
                            <option value="Month" hidden>Month</option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{$i}}" >{{$i}}</option>
                            @endfor
                        </select>
                        @error('month')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <select name="year" class="form-select">
                            <option value="Year" hidden>Year</option>
                            @for ($i = date('Y'); $i >= date('Y') -50 ; $i--)
                                <option value="{{$i}}" >{{$i}}</option>
                            @endfor
                        </select>
                        @error('year')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <div class="row g-3 m-1">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" name="title" >
                            </div>
                            <div class="col-md-12">
                                @error('title')
                                    <span class="text-danger p-1">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="formGroupExampleInput" class="form-label">Location</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="location" >
                        @error('location')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 row g-3">
                        <div class="col-md-12">
                            <label for="formGroupExampleInput" class="form-label">Photo</label>
                        </div>
                        <div class="col-md-3">
                            <label class="picture-register-upload d-center" for=""><i class="bi bi-camera"></i>
                                <input type="file" name="picture" class="form-control" id="pic"  accept=".jpeg,.png,.jpg,.gif" >
                            </label>
                            @error('picture')
                                <span class="text-danger p-1">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-9 picture-register-div d-center">
                            <img src="{{asset("pictures/pic-2.jpg")}}" id="pic-place" class="picture-register" alt="Picture...">
                        </div>
                    </div>
                </div>
            </div>


            <div class="skills switch">
                <h3>Skills</h3>
                <div class="row g-3">
                    <div class="col-md-10">
                        <input type="search" name="skill" placeholder="Enter..." id="inputText" class="form-control">
                        <input type="hidden" name="skills" id="hiddenSkills" value="">
                        @error('skills')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <button type="button" onclick="moveText()" class="btn btn-outline-light text-dark"><i class="bi bi-plus"></i></button>
                    </div>
                    <div class="col-md-12">
                        <div id="output-container"></div>
                    </div>
                </div>
            </div>


            <div class="professional switch">
                <h3><i class="bi bi-journal-check"></i> Professional Information</h3>
                <div class="row g-3 mt-1">
                    <div class="col-md-2  text-center">
                        <label for="formGroupExampleInput" class="form-label">Bac +</label>
                    </div>
                    <div class="col-md-10">
                        <input type="number" min="0" max="10" class="form-control" id="formGroupExampleInput" name="educationLevel" >
                    </div>
                    @error('educationLevel')
                        <span class="text-danger p-1">{{$message}}</span>
                    @enderror
                    <div class="col-md-12">
                        <label for="formGroupExampleInput" class="form-label"><i class="bi bi-feather"></i> Education </label>
                        <textarea class="form-control" name="educationDescription" id="" cols="30" rows="5"></textarea>
                        @error('educationDescription')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <input type="number" min="0" class="form-control" id="formGroupExampleInput" placeholder="Experience Year" name="experience" >
                        @error('experience')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="formGroupExampleInput" class="form-label"><i class="bi bi-award"></i> Experiance</label>
                        <textarea class="form-control" name="experienceDescription" id="" cols="30" rows="5"></textarea>
                        @error('experienceDescription')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="formGroupExampleInput" class="form-label">Linkedin</label>
                        <input type="url" name="linkedinLink" class="form-control">
                        @error('linkedinLink')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>



            <div class="other switch">
                <div class="row g-3">
                    <div class="col-md-8">
                        <label class="cv-upload text-center btn btn-outline-dark"  for="">Upload CV <i class="bi bi-box-arrow-in-down"></i>
                            <input type="file" name="cv" id="pdf-input" accept=".pdf">
                        </label>
                        @error('cv')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <div id="cv-document" class="cv-document d-center">
                            <i class="bi bi-paperclip"></i>
                        </div>
                    </div>
                </div>
                <h3 class="mt-2"><i class="bi bi-globe-europe-africa"></i> Langues</h3>
                <div class="row g-3 m-3">
                      <input type="search" placeholder="Enter" name="langues" id="langue" class="form-control w-50 rounded-0">
                        <select name="level" id="level" class="form-select rounded-0 w-25 text-start">
                          <option value="Beginner">Beginner</option>
                          <option value="Intermediate">Intermediate</option>
                          <option value="Upper-Intermediate">Upper-Intermediate</option>
                          <option value="Advanced">Advanced</option>
                          <option value="Mastery">Mastery</option>
                        </select>
                        <input type="hidden" name="languages" id="hiddenLangues" value="">
                        @error('languages')
                            <span class="text-danger p-1">{{$message}}</span>
                        @enderror
                    <div class="col-md-2">
                        <button onclick="addLangue()" type="button" class="btn btn-outline-light text-dark"><i class="bi bi-plus"></i></button>
                    </div>
                    <div class="col-md-12">
                        <div id="langue-container"></div>
                    </div>
                </div>
                <h3 class="mt-3"><i class="bi bi-lock-fill"></i> Visibility</h3>
                <div class="row g-3 m-2">
                    <div class="form-check form-switch">
                        <input type="radio" class="form-check-input"  name="visibility" id="flexSwitchCheckDefault1" checked value="all">
                        <label class="form-check-label" for="flexSwitchCheckDefault1">Public (For All)</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="radio" class="form-check-input"  name="visibility" id="flexSwitchCheckDefault2" value="recruiter">
                            <label class="form-check-label" for="flexSwitchCheckDefault2">Public (For Employers)</label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="radio" class="form-check-input"  name="visibility" id="flexSwitchCheckDefault3" value="offer">
                            <label class="form-check-label" for="flexSwitchCheckDefault3">Public (At submiting for a job)</label>
                    </div>
                    @error('visibility')
                        <span class="text-danger p-1">{{$message}}</span>
                    @enderror
                </div>
                <button class="btn btn-success m-3">Become A Job Seeker</button>
            </div>
        </form>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{asset("js/script.js")}}"></script>
@endsection
