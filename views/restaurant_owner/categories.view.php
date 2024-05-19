<div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="../../assets/images/user/<?= $resOwner['user_img'] ?>" type="image/webp"><img src="../../assets/images/user/<?= $resOwner['user_img'] ?>" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="/edite_res">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Edit Restaurant</span>
            </a></li>
          <li><a class="danger" href="controllers/signout/signout.controller.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
<main class="main users chart-page" id="skip-target">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="chart">
                <div class="container mt-3 ">
                  <a href=""type="Submit" id ="add-cate" class="btn btn-primary mg-3">Add New+</a>
                  <table class = "table" style="margin-top: 30px;">
                      <thead>
                          <tr>
                              <!-- <th scope="col">Cate_ID</th> -->
                              <th scope="col">Photo</th>
                              <th scope="col">Category's Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                        $resId = $_SESSION['res_own']['restaurant_id'];
                        $categories = getCateInres($resId);

                        
                        foreach ($categories as $category):?>
                        <tr>
                          <td style="vertical-align: bottom;"><img src="assets/images/icons/<?= $category['cate_img']; ?>" alt="" style ="width:40px" class = "img-responsive"></td>
                          <td style="vertical-align: bottom;"><?=$category['name'];?></td>
                          <td style="vertical-align: bottom;"><?=$category['description'];?></td>
                          <td style="vertical-align: bottom;">
                          <a href="controllers/restaurant_owner/edit_categories.restaurant.controller.php?cateid=<?= $category['category_id']; ?>"><i data-feather="edit" style="font-size:48px;color:green"></i></a>
                            <a href="controllers/restaurant_owner/delete_categories.restaurant.controller.php?cateid=<?=$category['category_id'];?>"><i data-feather="trash-2" style="font-size:48px;color:red"></i></a>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
</main>
    <div class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display:none; z-index: 999; width:100%; height:100%">
      <div id="add-cate popup-cate" class="col-6 m-auto p-4 mt-3 bg-light">
        <form class="add-cate popup-cate" enctype="multipart/form-data" action="controllers/categories/create_category.controller.php" method="post">
        <h1>Create Category</h1>
        <div class="mb-3">
          <label for="username" class="form-label">Image:</label>
          <input type="file" name="my_image" id="image">
        </div>
        <div class="mb-3">
          <label for="cate" class="form-label">Category:</label>
          <input type="text" name="cate"class="form-control" id="cate" placeholder="Place Enter Category Name">
        </div>               
        <div class="mb-3">
          <label for="descriptiom" class="form-label">Description:</label>
          <textarea class="form-control" name="description" rows="5" id="description" placeholder = "Description"></textarea></div>
          <button type="submit" class="btn btn-primary">add</button>
          <a href="/all_categories" class="btn btn-danger" >cancel</a>
        </div>
        </form>
      </div>
    </div>

    <?php 
    if(isset($_SESSION['editCate']) && $_SESSION['editCate'] != ''): 
     
    ?>
    <div class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="z-index: 999; width:100%; height:100%">
      <div id="add-cate popup-cate" class="col-6 m-auto p-4 mt-3 bg-light">
        <form class="add-cate popup-cate" action="controllers/restaurant_owner/editcategory.controller.php" method="post">
        <h1>Edite Category</h1>
        <div class="mb-3">
          <label for="username" class="form-label">Image:</label>
          <input type="file" name="my_image" id="image">
        </div>
        <div class="mb-3">
          <input type="hidden" name="cateid" value="<?php print_r($_SESSION['cate']['category_id']);?>">
          <label for="cate" class="form-label">Category:</label>
          <input type="text" name="cate"class="form-control" id="cate" value="<?php print_r($_SESSION['cate']['name']); ?>">
        </div>               
        <div class="mb-3">
          <label for="descriptiom" class="form-label">Description:</label>
          <textarea class="form-control" name="description" rows="5" id="description"><?php print_r($_SESSION['cate']['description']); ?></textarea></div>
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="/all_categories" class="btn btn-danger" >cancel</a>
        </div>
        </form>
      </div>
    </div>
  <?php 
  $_SESSION['editCate'] = '';
  endif; 
  ?>
<?php
echo "<script>
     
      let btnAdd = document.querySelector('#add-cate');
      let btnCancel = document.querySelector('#cancel');
      function showBtn(e) {
        e.preventDefault();
        let popup = document.querySelector('.container-pop');
        popup.style.display = 'block';
      };
      function hide(){
        let popup = document.querySelector('.container-pop');
        popup.style.display = 'none';
      }
      btnAdd.addEventListener('click', showBtn);   
      btnCancel.addEventListener('click, hide');
    </script>";
  ?>