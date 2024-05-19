

<div class="osahan-favorites">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Favorites</h4>
            </div>
        </div>

        <div class="container most_popular py-5">
            <h2 class="font-weight-bold mb-3">Favorites</h2>
            <div class="row">

            <?php 
            $favo = getFavorites($_SESSION['userid']);
            foreach ($favo as $value):
            ?>
                 <div class="col-md-3 pb-3">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
              <div class="list-card-image" style="height: 20vh;">
                <div class="star position-absolute">
                  <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                </div>
                
                <div class="member-plan position-absolute">
                  <span class="badge badge-dark">Promoted</span>
                </div>
                <a href="/restaurant?id=<?php print_r($value['restaurant_id']) ?>" style="background: red;">
                  <img alt="#" src="assets/images/res_img/<?= $value['res_img']?>" style="width: 100%; height: 100%;" />
                </a>
              </div>
              <div class="p-3 position-relative">
                <div class="list-card-body">
                  <h6 class="mb-1">
                    <a href="/restaurant" class="text-black"> <?php print_r($value['restaurant_name']) ?>
                    </a>
                  </h6>
                  <p class="text-gray mb-1 small"><?php print_r($value['address']) ?></p>
                  <p class="text-gray mb-1 rating"></p>
                  <ul class="rating-stars list-unstyled">
                    <li>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star"></i>
                    </li>
                  </ul>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
                <?php endforeach; ?>
            </div> 
            <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
    <div class="row">
      <div class="col selected">
        <a href="/" class="text-danger small font-weight-bold text-decoration-none">
          <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
          Home
        </a>
      </div>
      <div class="col">
        <a href="#" class="text-dark small font-weight-bold text-decoration-none">
          <p class="h4 m-0"><i class="feather-map-pin"></i></p>
          Trending
        </a>
      </div>
      <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
        <div class="bg-danger rounded-circle mt-n0 shadow">
          <a href="/order" class="text-white small font-weight-bold text-decoration-none">
            <i class="feather-shopping-cart"></i>
          </a>
        </div>
      </div>
      <div class="col">
        <a href="/favorite" class="text-dark small font-weight-bold text-decoration-none">
          <p class="h4 m-0"><i class="feather-heart"></i></p>
          Favorites
        </a>
      </div>
      <div class="col">
        <a href="/profile" class="text-dark small font-weight-bold text-decoration-none">
          <p class="h4 m-0"><i class="feather-user"></i></p>
          Profile
        </a>
      </div>
    </div>
  </div>
</div>