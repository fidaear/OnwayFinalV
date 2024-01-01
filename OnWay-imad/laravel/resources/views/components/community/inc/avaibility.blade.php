<div class="bg-light rounded-3 shadow-sm mt-4">
    <div class="availibity">
        <h5 class="pt-4 ps-3 text-center"> Avaibility </h5>
        <p class="bg-onway col-8 mx-5 text-center rounded-5">
            🔥 Availible for work

        </p>

    </div>
    <div class="connect text-center ">
        <h5> Connect & Amount 🔥 </h5>
        <p class="avali mb-0 text-onway"> 18 Availible Connects </p>
        <p class="text-onway"> 2 Submitted Proposal</p>


    </div>
    <div class="skillsExpertise ps-3">
        <h5 class="ps-2"> Skills & Expertise </h5>
        @foreach (Auth::user()->jobSeeker->skills as $skill)
            <button type="button" class="btn btn-gris pe-3 me-2 mb-2 ms-2 ">{{$skill}}</button>
        @endforeach

    </div>

    <div class="">
        <button type="button" class="btn btn-dark col-10 mx-4 mt-4 mb-3"> View Profile </button>
    </div>

</div>
