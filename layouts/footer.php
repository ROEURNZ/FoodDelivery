
<footer class="section-footer border-top bg-dark" id="footer">
    <div class="container">
      <section class="footer-top padding-y py-5">
        <div class="row">
          <aside class="col-md-4 footer-about">
            <article class="d-flex pb-3">
              <div>
                <img alt="#" src="assets/images/unnamed_(1)-transformed.png" class="logo-footer mr-3" style="background: green;" />
              </div>
              <div>
                <h6 class="title text-white">About Us</h6>
                <p class="text-muted">
                Satisfy your cravings with our seamless food delivery 
                service. Explore our diverse menu, place your order effortlessly, 
                and enjoy restaurant-quality meals delivered to your door. Indulge in 
                a hassle-free dining experience with just a few clicks. It's time to treat
                 yourself with convenient and delicious food delivery.
                </p>
                <div class="d-flex align-items-center">
                  <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Facebook" target="_blank" href="#"><i
                      class="feather-facebook"></i></a>
                  <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Instagram" target="_blank" href="#"><i
                      class="feather-instagram"></i></a>
                  <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Youtube" target="_blank" href="#"><i
                      class="feather-youtube"></i></a>
                  <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Twitter" target="_blank" href="#"><i
                      class="feather-twitter"></i></a>
                </div>
              </div>
            </article>
          </aside>
          <aside class="col-sm-3 col-md-2 text-white">
            <h6 class="title">Services</h6>
            <ul class="list-unstyled hov_footer">
              <li>
                <a href="/help" class="text-muted">Contact Us</a>
              </li>
            </ul>
          </aside>
          <aside class="col-sm-3 col-md-2 text-white">
            <h6 class="title">For users</h6>
            <ul class="list-unstyled hov_footer">
              <li>
                <a href="controllers/signout/signout.controller.php" class="text-muted"> User Login </a>
              </li>
              <li>
                <a href="controllers/signout/signout.controller.php" class="text-muted"> User register </a>
              </li>
              <li>
                <a href="controllers/signout/signout.controller.php" class="text-muted">
                  Forgot Password
                </a>
              </li>
              <li>
                <a href="controllers/signout/signout.controller.php" class="text-muted">
                  Account Setting
                </a>
              </li>
            </ul>
          </aside>
          <aside class="col-sm-3 col-md-2 text-white">
            <h6 class="title">More Pages</h6>
            <ul class="list-unstyled hov_footer">
              <li>
                <a href="/" class="text-muted"> Trending </a>
              </li>
              <li>
                <a href="/search" class="text-muted">
                  All restaruants
                </a>
              </li>
              <li>
                <a href="/" class="text-muted">
                  Restaurant Details
                </a>
              </li>
              <li>
                <a href="/favorite" class="text-muted"> Favorites </a>
              </li>
            </ul>
          </aside>
        </div>
      </section>

</div>

    <section class="footer-copyright border-top py-3 bg-light">
      <div class="container d-flex align-items-center">
        <p class="mb-0">© 2021 Company All rights reserved</p>
        <p class="text-muted mb-0 ml-auto d-flex align-items-center">
          <a href="#" class="d-block"><img alt="#" src="assets/images/appstore.png" height="40" /></a>
          <a href="#" class="d-block ml-3"><img alt="#" src="assets/images/playmarket.png" height="40" /></a>
        </p>
      </div>
    </section>
  </footer>
  <nav id="main-nav">
    <ul class="second-nav">
      <li>
        <a href="/"><i class="feather-home mr-2"></i> Homepage</a>
      </li>
      <li>
        <a href="/order"><i class="feather-list mr-2"></i> My Orders</a>
      </li>
      <li>
        <a href="/favorite"><i class="feather-heart mr-2"></i> Favorites</a>
      </li>
      <li>
        <a href="/"><i class="feather-trending-up mr-2"></i> Trending</a>
      </li>
      <li>
        <a href="/search"><i class="feather-award mr-2"></i> Most Popular</a>
      </li>
      <li>
        <a href="/order"><i class="feather-check-circle mr-2"></i> Successful</a>
      </li>
      <li>
        <a href="/restaurant_location"><i class="feather-map-pin mr-2"></i> Live Map</a>
      </li>
      <li>
        <a href="#"><i class="feather-user mr-2"></i> Profile</a>
        <ul>
          <li><a href="/profile">Profile</a></li>
          <li><a href="/help">Contact Us</a></li>
        </ul>
      </li>
    </ul>
    <ul class="bottom-nav">
      <li class="email">
        <a class="text-danger" href="/">
          <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
          Home
        </a>
      </li>
      <li class="github">
        <a href="faq.html">
          <p class="h5 m-0"><i class="feather-message-circle"></i></p>
          FAQ
        </a>
      </li>
      <li class="ko-fi">
        <a href="/help">
          <p class="h5 m-0"><i class="feather-phone"></i></p>
          Help
        </a>
      </li>
    </ul>
  </nav>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Filter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="osahan-filter">
            <div class="filter">
              <div class="p-3 bg-light border-bottom">
                <h6 class="m-0">SORT BY</h6>
              </div>
              <div class="custom-control border-bottom px-0 custom-radio">
                <input type="radio" id="customRadio1f" name="location" class="custom-control-input" checked />
                <label class="custom-control-label py-3 w-100 px-3" for="customRadio1f">Top Rated</label>
              </div>
              <div class="custom-control border-bottom px-0 custom-radio">
                <input type="radio" id="customRadio2f" name="location" class="custom-control-input" />
                <label class="custom-control-label py-3 w-100 px-3" for="customRadio2f">Nearest Me</label>
              </div>
              <div class="custom-control border-bottom px-0 custom-radio">
                <input type="radio" id="customRadio3f" name="location" class="custom-control-input" />
                <label class="custom-control-label py-3 w-100 px-3" for="customRadio3f">Cost High to Low</label>
              </div>
              <div class="custom-control border-bottom px-0 custom-radio">
                <input type="radio" id="customRadio4f" name="location" class="custom-control-input" />
                <label class="custom-control-label py-3 w-100 px-3" for="customRadio4f">Cost Low to High</label>
              </div>
              <div class="custom-control border-bottom px-0 custom-radio">
                <input type="radio" id="customRadio5f" name="location" class="custom-control-input" />
                <label class="custom-control-label py-3 w-100 px-3" for="customRadio5f">Most Popular</label>
              </div>

              <div class="p-3 bg-light border-bottom">
                <h6 class="m-0">FILTER</h6>
              </div>
              <div class="custom-control border-bottom px-0 custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultCheck1" checked />
                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck1">Open Now</label>
              </div>
              <div class="custom-control border-bottom px-0 custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultCheck2" />
                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck2">Credit Cards</label>
              </div>
              <div class="custom-control border-bottom px-0 custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultCheck3" />
                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck3">Alcohol Served</label>
              </div>

              <div class="p-3 bg-light border-bottom">
                <h6 class="m-0">ADDITIONAL FILTERS</h6>
              </div>
              <div class="px-3 pt-3">
                <input type="range" class="custom-range" min="0" max="100" name="minmax" />
                <div class="form-row">
                  <div class="form-group col-6">
                    <label>Min</label>
                    <input class="form-control" placeholder="$0" type="number" />
                  </div>
                  <div class="form-group text-right col-6">
                    <label>Max</label>
                    <input class="form-control" placeholder="$1,0000" type="number" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer p-0 border-0">
          <div class="col-6 m-0 p-0">
            <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">
              Close
            </button>
          </div>
          <div class="col-6 m-0 p-0">
            <button type="button" class="btn btn-primary btn-lg btn-block">
              Apply
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="4914b45df6263fcf00a3ac20-text/javascript" src="vendor/jquery/jquery.min.js"></script>
  <script type="4914b45df6263fcf00a3ac20-text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script type="4914b45df6263fcf00a3ac20-text/javascript" src="vendor/slick/slick.min.js"></script>

  <script type="4914b45df6263fcf00a3ac20-text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>

  <script type="4914b45df6263fcf00a3ac20-text/javascript" src="vendor/js/osahan.js"></script>
  <script src="vendor/rocket/rocket-loader.min.js" data-cf-settings="4914b45df6263fcf00a3ac20-|49" defer></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon='{"rayId":"84de77816d468817","r":1,"version":"2024.1.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}'
    crossorigin="anonymous"></script>
</body>

</html>