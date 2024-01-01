<div class="col-md-5 ">
        @foreach ($posts as $post)
            <div class="row pt-3 bg-light rounded-3 shadow-sm">
                <div class="row ms-3 align-items-center">
                    
                     
                        <div class="col-md-1 ">
                            <img class="avatar" src="/img/avatar/img_avatar2.png" alt="">
                        </div>
                    
                    <div class="col-md-9 ms-3 ">
                        <h5 class="fs-6"> {{$post->user->name}} </h5>
                    </div>
                    <div class=" col-md-1 ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-three-dots" viewBox="0 0 20 20">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                        </svg>
                    </div>
                </div>
                <div class="row mt-4 ms-3 ">
                    <p class="fw-light"> </p>
                    <h4 class="fw-light"><strong> {{$post->title}} </strong></h4>

                            <p>{{$post->description}}</p>

                            


                    <img class="/img-post img-rounded mb-4" src="{{$post->image}}" alt="">
                </div>
                <hr>
                <div class="d-flex justify-content-evenly mb-3">
                    <div class="items-icons"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                        <p class="text-center">{{ rand(3, 50) }}</p>
                    </div>
                    <div class="items-icons"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                        </svg>
                        <p class="text-center">{{ rand(3, 50) }}</p>
                    </div>
                    <div class="items-icons"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                            <path
                                d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z" />
                        </svg>
                        <p class="text-center">{{ rand(3, 50) }} </p>
                    </div>
                </div>
                <br>
            </div>
        <br><br>
        @endforeach

            {{-- <div>
                <div class="row pt-3 ps-3 bg-light rounded-3 shadow-sm">
                    <div class="col-md-2 ">
                        <img class="avatar" src="/img/avatar/img_avatar.png" alt="">
                    </div>
                    <div class="col-md-8 mt-2 ms-4 " id="share-ideas">
                        <input type="text" class="form-control" placeholder="Share your ideas..">
                    </div>
                    <div class="pt-5 pb-5">
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>
                </div>
            </div> --}}
        </div>