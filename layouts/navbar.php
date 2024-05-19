<header class="section-header">
<section class="header-main shadow-sm bg-primary-style2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-1">
          <a href="/" class="brand-wrap mb-0">
            <img alt="#" class="img-fluid" src="assets/images/unnamed_(1)-transformed.png" style="width: 4rem; height: 4rem;" />
          </a>
        </div>
        <div class="col-3 d-flex align-items-center m-none">
          <div class="dropdown mr-3">
            <a class="btn-border-1 text-white dropdown-toggle d-flex align-items-center py-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div>
                <i class="feather-map-pin mr-2 primary-dark rounded-pill p-2 icofont-size"></i>
              </div>
              <div>
                <p class="text-white mb-0 small">Select Location</p>
                <?php if (isset($_GET['location'])) {echo $_GET['location'];} ?>
              </div>
            </a>
            <div class="dropdown-menu p-0 drop-loc mt-1" aria-labelledby="navbarDropdown">
              <div class="osahan-country">
                <div class="search_location bg-primary p-3 text-right">
                  <div class="input-group rounded shadow-sm overflow-hidden">
                    <div class="input-group-prepend">
                      <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block">
                        <i class="feather-search"></i>
                      </button>
                    </div>
                    <input type="text" class="shadow-none border-0 form-control" id="search-area" placeholder="Enter Your Location" />
                  </div>
                </div>
                <div class="p-3 border-bottom">
                  <a href="/" class="text-decoration-none">
                    <p class="font-weight-bold text-primary m-0">
                      <i class="feather-navigation"></i> <?php if (isset($_GET['location'])) { echo $_GET['location'];} ?>                                  
                    </p>
                  </a>
                </div>
                <div class="filter">
                  <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom">
                    Choose your country
                  </h6>
                  <form id="contain-pro">
                    <div class="custom-control border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio1" name="location" class="custom-control-input" value="Phnom Penh" <?php if (isset($_GET['location'])) {if ($_GET['location'] == "Phnom Penh") { ?> checked <?php } } ?>>
                      <label class="custom-control-label py-3 w-100 px-3 " for="customRadio1">Phnom Penh</label>
                    </div>
                    <div class="custom-control border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio2" name="location" class="custom-control-input" value="Kandal" <?php if (isset($_GET['location'])) { if ($_GET['location'] == "Kandal") { ?> checked <?php } } ?>>
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio2">Kandal</label>
                    </div>
                    <div class="custom-control border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio3" name="location" class="custom-control-input" value="Preah Sihanouk" <?php if (isset($_GET['location'])) { if ($_GET['location'] == "Preah Sihanouk") { ?> checked <?php }} ?>>
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio3">Preah Sihanouk</label>
                    </div>
                    <div class="custom-control border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio4" name="location" class="custom-control-input" value="Siem Reap" <?php if (isset($_GET['location'])) { if ($_GET['location'] == "Siem Reap") { ?> checked <?php }} ?>>                                                                                                                                                                                 
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio4">Siem Reap</label>
                    </div>
                    <div class="custom-control border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio5" name="location" class="custom-control-input" value="Svay Rieng" <?php if (isset($_GET['location'])) {if ($_GET['location'] == "Svay Rieng") { ?> checked <?php }} ?>>                                                                                                                                                                                                                                                                                                                                          
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio5">Svay Rieng</label>
                    </div>
                    <div class="custom-control px-0 custom-radio">
                      <input type="radio" id="customRadio6" name="location" class="custom-control-input" value="Battambang" <?php if (isset($_GET['location'])) {if ($_GET['location'] == "Battambang") { ?> checked <?php }} ?>>                                                                                                                                                                                
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio6">Battambang</label>
                    </div>
                    <button type="submit" hidden></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
                let search = document.getElementById('search-area');
                search.addEventListener('keyup', function(e) {
                let text = search.value.toLowerCase();
                const radios = document.querySelectorAll('#contain-pro input[type="radio"]'); 

                for (let radio of radios) {
                    let label = radio.nextElementSibling.textContent.toLowerCase(); 
                    if (label.indexOf(text) === -1) {
                        radio.parentNode.style.display = "none"; 
                    } else {
                        radio.parentNode.style.display = "block"; 
                      }
                }
                });
        </script>

          <div class="col-8">
            <div class="d-flex align-items-center justify-content-end pr-5">
              <a href="/search" class="widget-header mr-4 text-white" style="width: 30%;">
                <div class="icon d-flex align-items-center" style="border: 1px solid white; border-radius: 3px;">
                  <i class="feather-search h6 mr-2 mb-0 p-2"></i>
                  <span>Search</span>
                </div> 
              </a>

              <div class="dropdown mr-4 m-none">
                <a href="#" class="dropdown-toggle text-white py-3 d-block" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php
                    $img = showPf($_SESSION['userid']);
                  ?>
                  <img alt="#" src="<?php print_r('assets/images/user/'.$img[7]) ?>" class="img-fluid header-user mr-2 header-user" style="width: 40px; height: 40px; border: 2px solid white ;border-radius: 50%;"/>
                  <?php print_r($img[1]) ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/profile">My account</a>
                  <a class="dropdown-item" href="#footer">Contant us</a>
                  <a class="dropdown-item" href="controllers/signout/signout.controller.php">Logout</a>
                </div>
              </div>

              <a href="/order" class="widget-header mr-4 text-white">
                <div class="icon d-flex align-items-center">
                  <i class="feather-shopping-cart h6 mr-2 mb-0"></i>
                  <span>My order</span>
                </div>
              </a>
              <a class="toggle" href="#">
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>