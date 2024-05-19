<?php $food = getAllFood(); ?>
<div class="d-none">
        <div class="bg-primary p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Search</h4>
        </div>
    </div>
    <div class="osahan-popular">

        <div class="container">
            <div class="search py-5">
                <div class="input-group mb-4">
                    <input type="text" class="form-control form-control-lg input_search border-right-0"
                    id="searcher" value="Osahan eats...">
                    <div class="input-group-prepend">
                        <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i
                                class="feather-search"></i></div>
                    </div>
                </div>

                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active border-0 bg-light text-dark rounded" id="home-tab" data-toggle="tab"
                            href="#home" role="tab" aria-controls="home" aria-selected="true"><i
                                class="feather-home mr-2"></i>Restaurants (<?= count($data) ?>)</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link border-0 bg-light text-dark rounded ml-3" id="profile-tab" data-toggle="tab"
                            href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i
                                class="feather-disc mr-2"></i>Dishes (<?php echo count($food); ?>)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="container mt-4 mb-4 p-0">

                            <div class="row">
                                <?php foreach ($data as $value): ?>
                                <div class="col-md-3 pb-3" id="card">
                                    <div
                                        class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                        <div class="list-card-image" style="height: 20vh;">
                                            <div class="star position-absolute"><span class="badge badge-success"><i
                                                        class="feather-star"></i> 3.1 (300+)</span></div>
                                            <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                                        class="feather-heart"></i></a></div>
                                            <div class="member-plan position-absolute"><span
                                                    class="badge badge-dark">Promoted</span></div>
                                            <a href="/restaurant?id=<?php echo $value[0] ?>">
                                                <img alt="#" src="assets/images/res_img/<?= $value['res_img']?>" style="width: 100%; height: 100%;">
                                            </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1"><a href="/restaurant?id=<?php echo $value[0] ?>" class="text-black"><?php echo $value[1] ?>
                                                    </a>
                                                </h6>
                                                <p class="text-gray mb-1 small"><?php echo $value[2] ?></p>
                                                <p class="text-gray mb-1 rating">
                                                <ul class="rating-stars list-unstyled">
                                                    <li>
                                                        <i class="feather-star star_active"></i>
                                                        <i class="feather-star star_active"></i>
                                                        <i class="feather-star star_active"></i>
                                                        <i class="feather-star star_active"></i>
                                                        <i class="feather-star"></i>
                                                    </li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    
                        <div class="row d-flex align-items-center justify-content-center py-5">
                            <?php if (count($food) == 0): ?>
                            <div class="col-md-4 py-5">
                                <div class="text-center py-5">
                                    <p class="h4 mb-4"><i class="feather-search bg-primary text-white rounded p-2"></i>
                                    </p>
                                    <p class="font-weight-bold text-dark h5">Nothing found</p>
                                    <p>we could not find anything that would match your search request, please try
                                        again.</p>
                                </div>
                                <?php else: ?>
                                    <div class="container mt-4 mb-4 p-0">
                                    <div class="row">
                                    <?php foreach ($food as $key => $value): ?>
                                        <div class="col-md-3 pb-3" id="card">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
              <div class="list-card-image" style="height: 20vh;">
                <div class="star position-absolute">
                  <span class="badge badge-success">$<?= $value['price']?></span>
                </div>
                <div class="favourite-heart text-danger position-absolute">
                  <a href="#"><i class="feather-heart"></i></a>
                </div>
                <a href="/restaurant?id=<?= $value['restaurant_id'] ?>">
                  <img alt="#" src="assets/images/food/<?= $value['food_img'] ?>" style="width: 100%; height: 100%;" />
                </a>
              </div>
              <div class="p-3 position-relative">
                <div class="list-card-body">
                  <h6 class="mb-1">
                    <a href="/restaurant" class="text-black"> <?php print_r($value['Foodname']) ?>
                    </a>
                  </h6>
                  <a href="/restaurant?id=<?= $value['restaurant_id'] ?>" class="text-gray mb-1 small"><?php print_r($value['restaurant_name']) ?></a>
                  <p class="text-gray mb-1 rating"></p>
                  <p></p>
                </div>
                <div class="list-card-badge">
                  <a href="/restaurant?id=<?= $value['restaurant_id'] ?>" class="btn bg-success text-white "><i class='bx bxs-cart-download bx-tada' style="font-size: 18px;" ></i> ORDER</a>
                </div>
                <div class="star position-absolute" style="margin-bottom: 5%;">
                <span style="width: 40%; font-size: 18px; display: flex; justify-content: center; align-item: center;">$<?= $value['price']?></span>
                </div>
              </div>
            </div>
          </div>

                                        <?php endforeach; ?>
                                    </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
            <div class="row">
                <div class="col">
                    <a href="home.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-home"></i></p>
                        Home
                    </a>
                </div>
                <div class="col selected">
                    <a href="trending.html" class="text-danger small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-map-pin text-danger"></i></p>
                        Trending
                    </a>
                </div>
                <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                    <div class="bg-danger rounded-circle mt-n0 shadow">
                        <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                            <i class="feather-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-heart"></i></p>
                        Favorites
                    </a>
                </div>
                <div class="col">
                    <a href="profile.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-user"></i></p>
                        Profile
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
    echo '<script src="vendor/js/main.js"></script>';
    ?>