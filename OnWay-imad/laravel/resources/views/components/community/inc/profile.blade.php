<div class="sidebar bg-light rounded-3 shadow-sm">


    <div class="profile d-flex justify-content-center pt-5">
        <img class=" seidbar-profil-img rounded-circle" src="/img/avatar/img_avatar2.png" alt="">
    </div>
    <h6 class="text-center mt-3 mb-0"> {{ Auth::user()->name }} </h6>
    <p class="text-center fw-lighter fs-7 "> {{ Auth::user()->jobSeeker->skills[0] }} </p>
    <a href="/jobseekers/create" class="btn btn-gris col-10 mx-4 mt-4 mb-3" target="_blank">Edit Profile</a>
</div>
