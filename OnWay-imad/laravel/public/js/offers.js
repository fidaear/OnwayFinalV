$(document).ready(function() {

    $(document).on('click', '.offer-component', function() {
      // Your existing code here

      var offerId = $(this).data('offer-id');
      var index = $(this).index();
      $.ajax({
          url: `/get-offer-details/${offerId}`,
          type: 'GET',
          success: function(response) {
            c = JSON.parse(response.offer.competences)
            competences = "";
            c.forEach(element => {
              competences += `<li>${element}</li>`
            });
            l = JSON.parse(response.offer.languages)
            languages = "";
            l.forEach(element => {
              languages += `<li>${element}</li>`
            });
            var test = `<button type='button' data-class-index="${index}" class='btn btn-success float-right postulate'  data-offer-postulate='${response.offer.offer_id}'>Postulate <i class="bi bi-plus"></i></button>`;
            if(response.test.length == 1) test = `<button type='button' class='btn btn-danger float-right '>Already Applied</button>`
              $('#offer-details-container').html(`
                  <div class="profil" style="background-color: #56C4B7; height: 40px; width: 40px;"></div>
                  <div class="tags ">
                    <span class="tag">${response.offer.title}</span>
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
                  <div class='p-1'>
                    <h5 class='mt-2'>Offer Overview</h5>
                    <p class='text-justify'>${response.offer.description}</p>
                    <h5>Skills</h5>
                    <div class="specific"><ul>${competences}</ul></div>
                    <h5>Languages</h5>
                    <div class="specific"><ul>${languages}</ul></div>
                    <h5>More</h5>
                    <div class="row g-3">
                      <div class="col-md-3">
                        <p>Experience : + ${response.offer.experienceYear}</p>
                      </div>
                      <div class="col-md-9">
                        <p> Education : Bac+${response.offer.EducationLevel}</p>
                      </div>
                      <div class="col-md-3">
                        <button class='btn btn-danger rounded-0'>Type Contract : ${response.offer.typeContract}</button>
                      </div>
                      <div class="col-md-3">
                        <button class='btn btn-success rounded-0'>Salary : ${response.offer.salary} $</button>
                      </div>
                      <div class="col-md-3">
                        <button class='btn btn-dark rounded-0'>
                            <i class="bi bi-map"></i>
                          Location : ${response.offer.location}
                        </button>
                      </div>
                      <div class="col-md-12">${test}</div>
                    </div>
                  </div>
              `);
          },
          error: function(error) {
              console.error('Error fetching offer details:', error);
          }
      });
  });
      // get Offer Details
      $('#offer-details-container').html(`<div class='not-yet'><h4><i class="bi bi-emoji-laughing"></i> Happy to see you!</h4></div>`)



        // get more offers
        $("#more").click(function () {
          start()
        });
        function start(){
          if ($("#offers")[0].scrollHeight - $("#offers").scrollTop() <= $("#offers").outerHeight() + 100 ) {

             loadMoreOffers();
         }
        }
        function loadMoreOffers() {

          var count = document.getElementById('count');







            $.ajax({

                url: '/load-more-offers',
                type: 'GET',
                success: function (data) {
                    console.log(data)
                    count.innerHTML = parseInt(count.innerHTML) + data.length;

                    appendOffersToDOM(data);
                    // Hide the preloader

                    return;
                },
                error: function () {
                    console.log('Error loading more offers');
                    hidePreloader();
                }
            });
        }

        function showPreloader() {
          $('#more').show();
        }

        function hidePreloader() {
          $('#more').hide();
        }

        function appendOffersToDOM(data) {
                    if (data.length > 0 && data.length <= 10) {
                          data.forEach(function (offer) {
                            $(
                              `
                              <div class="task offer-component" data-offer-id="${offer.offer_id}">
                        <div class="profil" style="background-color: #56C4B7; height: 40px; width: 40px;"></div>
                          <div class="tags">
                            <span class="tag">${offer.title}</span>
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
                          <p>${offer.description}<br>
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
                              `
                             ).insertBefore('#more')
                          });

                      } else {
                      }
                      return;
        }



  });
