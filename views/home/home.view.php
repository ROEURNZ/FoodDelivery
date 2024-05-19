
<div class="osahan-home-page">
    <div class="bg-primary p-3 d-none">
      <div class="text-white">
        <div class="title d-flex align-items-center">
          <a class="toggle" href="#">
            <span></span>
          </a>
          <h4 class="font-weight-bold m-0 pl-5">Browse</h4>
          <a class="text-white font-weight-bold ml-auto" data-toggle="modal" data-target="#exampleModal"
            href="#">Filter</a>
        </div>
      </div>
      <div class="input-group mt-3 rounded shadow-sm overflow-hidden">
        <div class="input-group-prepend">
          <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block">
            <i class="feather-search"></i>
          </button>
        </div>
        <input type="text" class="shadow-none border-0 form-control" placeholder="Search for restaurants or dishes" />
      </div>
    </div>

    <div class="container">
      <div class="cat-slider" >
      <?php 
        $cate = getAllCate();
        foreach ($cate as $value):
        ?>
        <div class="cat-item px-1 py-3">
          <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="controllers/categories/categories.filter.controller.php?cateid=<?= $value[0]; ?>">
            <img alt="#" src="assets/images/icons/<?= $value['cate_img']?> " class="img-fluid mb-2" style="width: 150px; height: 80px;" />
            <p class="m-0 small"><?php echo $value[2] ?></p>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="container">
      <div class="pt-4 pb-2 title d-flex align-items-start">
        <h5 class="m-0">Trending this week</h5>
        <a class="font-weight-bold ml-auto" href="/search">View all <i class="feather-chevrons-right"></i></a>
      </div>

     

      <div class="trending-slider">

      <?php foreach ($data as $key => $value): ?>
        <div class="osahan-slider-item">
          <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
            <div class="list-card-image" style="height: 30vh;">
              <div class="star position-absolute">
                <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
              </div>
              <div class="favourite-heart text-danger position-absolute">
                <a href="controllers/favorites/addfavo.controller.php?favoid=<?php echo $value[0]; ?>"><i class="feather-heart"></i></a>
              </div>
              <div class="member-plan position-absolute">
                <span class="badge badge-dark">Promoted</span>
              </div>
              <a href="/restaurant?id=<?php echo $value[0] ?>">
                <img alt="#" src="assets/images/res_img/<?= $value['res_img']?>" style="width: 100%; height: 100%;" />
              </a>
            </div>
            <div class="p-3 position-relative">
              <div class="list-card-body">
                <h6 class="mb-1">
                  <a href="/restaurant?id=<?php echo $value[0] ?>" class="text-black"> <?php print_r ($value[1])?>
                  </a>
                </h6>
                <p class="text-gray mb-3"><?php print_r ($value[2])?></p>
                <ul class="rating-stars list-unstyled">
                    <li>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star"></i>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>


      <div class="py-3 title d-flex align-items-center">
        <h5 class="m-0">Restaurants</h5>
        <a class="font-weight-bold ml-auto" href="/search">View all <i
            class="feather-chevrons-right"></i></a>
      </div>

      <div class="most_popular">
        <div class="row">

        <?php if(!isset($_GET['location'])): ?>
        <?php foreach ($data as $key => $value): ?>
          <?php if($key <= 8): ?>
          <div class="col-md-3 pb-3">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
              <div class="list-card-image" style="height: 20vh;">
                <div class="star position-absolute">
                  <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                </div>
                <div class="favourite-heart text-danger position-absolute">
                  <a href="controllers/favorites/addfavo.controller.php?favoid=<?php echo $value[0]; ?>"><i class="feather-heart"></i></a>
                </div>
                <div class="member-plan position-absolute">
                  <span class="badge badge-dark">Promoted</span>
                </div>
                <a href="/restaurant?id=<?php print_r($value[0]) ?>" style="background: red;">
                  <img alt="#" src="assets/images/res_img/<?= $value['res_img']?>" style="width: 100%; height: 100%;" />
                </a>
              </div>
              <div class="p-3 position-relative">
                <div class="list-card-body">
                  <h6 class="mb-1">
                    <a href="/restaurant" class="text-black"> <?php print_r($value[1]) ?>
                    </a>
                  </h6>
                  <p class="text-gray mb-1 small"><?php print_r($value[2]) ?></p>
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
          <?php endif; ?>
          <?php endforeach; ?>
          <?php else: ?>
            <?php 
            $resProvince = selectResbyProvince(strtolower($_GET['location']));
            foreach ($resProvince as $key => $value):
               ;?>
          <div class="col-md-3 pb-3">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
              <div class="list-card-image" style="height: 20vh;">
                <div class="star position-absolute">
                  <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                </div>
                <div class="favourite-heart text-danger position-absolute">
                  <a href="controllers/favorites/addfavo.controller.php?favoid=<?php echo $value[0]; ?>"><i class="feather-heart"></i></a>
                </div>
                <div class="member-plan position-absolute">
                  <span class="badge badge-dark">Promoted</span>
                </div>
                <a href="/restaurant?id=<?php print_r($value[0]) ?>" style="background: red;">
                  <img alt="#" src="assets/images/res_img/<?= $value['res_img']?>" style="width: 100%; height: 100%;" />
                </a>
              </div>
              <div class="p-3 position-relative">
                <div class="list-card-body">
                  <h6 class="mb-1">
                    <a href="/restaurant" class="text-black"> <?php print_r($value[1]) ?>
                    </a>
                  </h6>
                  <p class="text-gray mb-1 small"><?php print_r($value[2]) ?></p>
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
          <?php endif; ?>

      </div>

      <div class="pt-2 pb-3 title d-flex align-items-center">
        <h5 class="m-0">Most sales</h5>
        <a class="font-weight-bold ml-auto" href="/search">View all <i class="feather-chevrons-right"></i></a>
      </div>

      
      <div class="most_sale">
        
        <div class="row mb-3">
          <?php for ($i=0; $i < 3 ; $i++): ?>
          <div class="col-md-4 mb-3">
            <div
            class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
            <div class="list-card-image">
                <div class="star position-absolute">
                  <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                </div>
                <div class="favourite-heart text-danger position-absolute">
                  <a href="controllers/favorites/addfavo.controller.php?favoid=<?php echo $value[0]; ?>"><i class="feather-heart"></i></a>
                </div>
                <div class="member-plan position-absolute">
                  <span class="badge badge-dark">Promoted</span>
                </div>
                <a href="/restaurant?id=<?php print_r($data[$i]['restaurant_id']); ?>">
                  <img alt="#" src="assets/images/res_img/<?php print_r($data[$i]['res_img'])?>" class="img-fluid item-img w-100" />
                </a>
              </div>
              <div class="p-3 position-relative">
                <div class="list-card-body">
                  <h6 class="mb-1">
                    <a href="/restaurant?id=<?php print_r($data[$i]['restaurant_id']); ?>" class="text-black"><?php print_r($data[$i][1]); ?>
                    </a>
                  </h6>
                  <p class="text-gray mb-3"><?php print_r($data[$i][2]); ?></p>
                  <p class="text-gray mb-3 time">
                    <span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25
                      min</span>
                    <span class="float-right text-black-50">
                      $500 FOR TWO</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
        </div>
      </div>
    </div>
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

