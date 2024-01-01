<div class="col-md-3">
    <div class="bg-light rounded-3 shadow-sm">
        <h3 class=" text-left pt-3 ps-3 "> My Contacts </h3>
        @foreach ($recruiters as $recruiter)
            <br>
                <div class="row ms-2">
                    <div class="col-md-2 ">
                        <img class=" avatar" src="{{$recruiter->companyOverview}}" alt="">
                    </div>
                    <div class="col-md-9 ms-2 avatar-text">
                        <h5 class="fs-5"> {{$recruiter->user->name}} </h5>
                        <p class="fw-lighter"> {{$recruiter->companyAbout}} </p>
                    </div>
                </div>
            <hr>
        @endforeach
        
       
    </div>
</div>