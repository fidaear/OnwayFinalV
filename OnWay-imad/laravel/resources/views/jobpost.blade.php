@extends('layouts.app')
@section('title','Job Details')
@section('links')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezj+f24EiqL1fVMbCvHrVAcql9Nbe5rSG7LyLC3z5RvW0MlE6x3PmXsW1hxi9WoL" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

        <link rel="stylesheet" href="styles/jobpost.css">
@endsection
@section('content')
    

       
    <!--
        <div class="m-3">
          <div class="row g-3">
            <div class="col-md-5 cl">
                <input type="text" class="form-control rounded-0" id="Email" name="Email" placeholder="Job title, Company" autocomplete="off">
              <input class="btn btn-dark rounded-0" value="What" type="submit">
            </div>
            <div class="col-md-5 cl">
              <input type="text" class="form-control rounded-0" id="Email" name="Email" placeholder="City, State, Country" autocomplete="off">
              <input class="btn btn-dark rounded-0" value="where" type="submit">
            </div>
            <div class="col-md-2">
              <button class="btn btn-success">Find Job</button>
            </div>
          </div>
        </div>
              
      -->
        
          
       
        <!---------------------post of jobs--------------------------------------------->
        <div class="section">
          
          <div class="job-postes" id="offers">
            <div class="container">
              <!--
              <div class="radio-inputs">
                <label class="radio">
                  <input type="radio" name="radio" checked="">
                  <span class="name">Best matches</span>
                </label>
                <label class="radio">
                  <input type="radio" name="radio">
                  <span class="name">Featured</span>
                </label>  
                <label class="radio">
                  <input type="radio" name="radio">
                  <span class="name">Most recent</span>
                </label>
              </div>
            -->
            </div>
            <h4 class="text-start text-dark m-2 w-75" > <a  id="count">{{count($offers)}} </a> @if (count($offers)>1)
                Offers @else Offer
            @endif</h4>
            @foreach ($offers as $offer)
                <div class="task offer-component" data-offer-id="{{$offer->offer_id}}">
                  <div class="profil" style="background-color: #56C4B7; height: 40px; width: 40px;"></div>
                    <div class="tags">
                      <span class="tag">{{$offer->title}}</span>
                      <label class="ui-bookmark">
                      <input type="checkbox">
                      <div class="bookmark">
                        <svg viewBox="0 0 32 32">
                          <g>
                            <path d="M27 4v27a1 1 0 0 1-1.625.781L16 24.281l-9.375 7.5A1 1 0 0 1 5 31V4a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4z"></path>
                          </g>
                        </svg>
                      </div>
                      </label>
                    </div>
                    <p>{{substr($offer->description,0,200)}}<br>
                    <div class="intres">
                      <div class="spesific"><h4>UI/UX</h4></div>
                    </div>
                    <div class="stats">
                      <div>
                        <div class="rating">
                          <span class="star-rating">&#9733;</span>
                          <span class="star-rating">&#9733;</span>
                          <span class="star-rating">&#9733;</span>
                          <span class="star-rating">&#9733;</span>
                          <span class="star-rating">&#9733;</span>
                        </div>
                        <div class="propo"><span><M class="pp">Project Verified</M>  Proposals: 10 to 15</span></div>
                      </div>
                    </div>
                  </div> 
            @endforeach
               
            <button class="btn btn-success formr-control w-75" id="more">More</button>
             
          </div>
          <div class="offer-details" >
            <div class="details">
              <h4>Details</h4>
              <div class="details-content">
                
                <div id="offer-details-container">
  

                  
                </div>
            </div>

            </div>
          </div>
        </div>

        


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="{{asset('js/offers.js')}}"></script>
<script>
   $(document).on('click', '.postulate', function() {
    var postulate = $(this).data('offer-postulate');
    var index = $(this).data('class-index');
   
    $.ajax({
      type: 'POST',
      url: '/postulate',
      data: {
          '_token': "{{ csrf_token() }}",
          'offer_id': postulate
      },
      success: function (data) {
        $(".offer-component").eq(index-2).click()

          console.log(data.message); 
          
      },
      error: function (error) {
          console.log(error);
          alert('Une erreur s\'est produite lors de la création du postulat.');
      }
  });

  });
</script>


    
@endsection