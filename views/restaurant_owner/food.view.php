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
            <picture><source srcset="assets/images/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="assets/images/avatar/avatar-illustrated-02.png" alt="User name"></picture>
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
<main class="main users chart-page" id="skip-target">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="chart">
                <div class="container mt-3 ">
                  <a href=""type="Submit" id ="add-food" class="btn btn-primary mg-3">Add New+</a>
                  <table class = "table"  id="selectedColumn"  cellspacing="0" width="100%" style="margin-top: 30px;">
                      <thead>
                          <tr>
                              <!-- <th scope="col">Food_ID</th> -->
                              <th scope="col">Photo</th>
                              <th scope="col">Food Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Price</th>
                              <th scope="col">Cate_name</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                          $resId = $_SESSION['res_own']['restaurant_id'];
                          $categories = getCateInres($resId);
                          foreach ($categories as $key => $value):
                             $cateid = $value['category_id'];
                          ?>
                        <?php
                        
                        $statement = $connection->prepare("SELECT * FROM foods where category_id = $cateid");
                        $statement->execute();
                        $foods = $statement->fetchAll();
                        foreach ($foods as $index => $food):?>
                        <tr>
                          <td style="vertical-align: bottom;"><img src="assets/images/food/<?= $food['food_img'] ?>" alt="" style ="width:70px; height: 50px;" class = "img-responsive"></td>
                          <td style="vertical-align: bottom;"><?=$food['Foodname'];?></td>
                          <td style="vertical-align: bottom;"><?=$food['description'];?></td>
                          <td style="vertical-align: bottom;"><?=$food['price']."$";?></td>
                          <td style="vertical-align: bottom;"><?=getCatebyId($food['category_id'])['name'];?></td>
                          <td style="vertical-align: bottom;">
                          <a href="controllers/Food/edit_food.restaurant.controller.php?foodid=<?= $food['Food_id']; ?>"><i data-feather="edit" style="font-size:48px;color:green"></i></a>
                        <a href="controllers/Food/delete_food.controller.php?foodid=<?= $food['Food_id']; ?>"><i data-feather="trash-2" style="font-size:48px;color:red"></i></a>
                          </td>
                        </tr>
                        <?php endforeach;?>
                        <?php
                        endforeach;
                        ?>
                      </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
</main>
<div class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display:none; z-index: 999; width:100%; height:100%">
      <div id="add-food popup-food" class="col-6 m-auto p-4 mt-3 bg-light">
        <form class="add-food popup-food" enctype="multipart/form-data" action="controllers/Food/create_food.controller.php" method="post">
            <h1>Create Food</h1>
            <div class="mb-3">
            <label for="username" class="form-label">Image:</label>
            <input type="file" name="my_image" id="image">
            </div>
            <div class="mb-3">
            <label for="food" class="form-label">Food:</label>
            <input type="text" name="food"class="form-control" id="food" placeholder="Place Enter Food Name">
            </div>               
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="price"class="form-control" id="price" placeholder="Place Enter Food Price">
            </div>
            <div class="mb-3">
              <label for="cate_id" class="form-label">Caategory:</label>
              <select class="form-select-sm" id="cate_id" name="cate_id">
                <option>Select Category</option>
                <?php
                  $resId = $_SESSION['res_own']['restaurant_id'];
                  $categories = getCateInres($resId);
                  foreach ($categories as $index => $category):
                ?>
                <option value="<?= $category['category_id']; ?>"><?= $category['name'] ?></option>
                <?php endforeach; ?>
              </select>
              </div>
            <div class="mb-3">
                <label for="descriptiom" class="form-label">Description:</label>
                <textarea class="form-control" name="description" rows="3" id="description" placeholder = "Description"></textarea></div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="/all_food" class="btn btn-danger" >cancel</a>
            </div>
        </form>
      </div>
    </div>

    <?php 
    if(isset($_SESSION['editFood']) && $_SESSION['editFood'] != ''): 
      $food = getFoodbyId($_SESSION['editFood']);
      // print_r($food['Foodname']);
     
    ?>
    <div class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="z-index: 999; width:100%; height:100%">
      <div id="add-cate popup-cate" class="col-6 m-auto p-4 mt-3 bg-light">
        <form class="add-cate popup-cate" enctype="multipart/form-data" action="controllers/Food/editFood.controller.php" style="width:100%; height:100%"  method="post">
            <h1 class="text-center">Edit Food</h1>
            <div class="mb-3">
              <label for="username" class="form-label"></label>
              <img src="../../assets/images/res_img/IMG-65edd7f1a02667.05645755.png" style="width: 100%; height:16rem;"alt="">
              <!-- <input type="file" name="my_image" id="image"> -->
            </div>
        <div class="mb-3">
          <input type="hidden" name="food_id" value="<?= $_SESSION['editFood'] ?>">
          <label for="food" class="form-label">Food:</label>
          <input type="text" name="food"class="form-control" id="food" value="<?= $food['Foodname'];?>">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price:</label>
          <input type="number" name="price" class="form-control" id="price" placeholder="Place Enter Food Price" value="<?= $food['price']?>">
        </div>
        <div class="mb-3">
              <label for="cate_id" class="form-label">Category:</label>
              <select class="form-select-sm" id="cate_id" name="cate_id">
                <option>Select Category</option>
                <?php
                  $resId = $_SESSION['res_own']['restaurant_id'];
                  $categories = getCateInres($resId);
                  foreach ($categories as $index => $category):
                ?>
                <option value="<?= $category['category_id']; ?>"><?= $category['name'] ?></option>
                <?php endforeach; ?>
              </select>
              </div>          
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="/all_food" class="btn btn-danger" >cancel</a>
        </div>
        </form>
      </div>
    </div>
  <?php 
  $_SESSION['editFood'] = '';
  endif; 
  ?>
    <?php
echo "<script>
     
      let btnAdd = document.querySelector('#add-food');
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


      $(document).ready(function () {
        $('#selectedColumn').DataTable({
          'aaSorting': [],
          columnDefs: [{
          orderable: false,
          targets: 3
          }]
        });
          $('.dataTables_length').addClass('bs-select');
      });
    </script>";
  ?>