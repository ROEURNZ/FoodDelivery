
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

<div class="container_resorder">
        <div class="navres">
            <h4 style="color: white;">Manage order</h4>
            <div class="content_action">
              <a href="#" id="pedding" class="btn">Pedding</a>
              <a href="#"  id="response" class="btn">Response</a>
            </div>
        </div>
        <div id="content" class="contentOrder">
          <?php foreach ($padding as $key => $value): ?>

            <div class="card">
                <div class="card-header">
                    <div class="card-id">
                        <p><?= "id ".$value['orderDetail_id'] ?></p>
                    </div>
                    <div class="card-time">
                        <i class='bx bx-time'></i>
                        <span>: <?= $value['time'] ?></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="foodname">
                      <?php
                        $foodOd = (orderbyTimeInres($resid, $value['time'], 0));
                        $totalPrice = 0;
                        foreach ($foodOd as $key => $food):
                        $totalPrice += $food['total_price'];
                      ?>
                        <p><?= $food['foodname'] ?> <span>x <?= $food['quantity'] ?></span></p>
                      <?php endforeach; ?>
                    </div>
                    <div class="total-price">
                        <p style="font-weight: bold; color: green;">total price: <span><?= $totalPrice." $" ?></span></p>
                    </div>

                </div>
                <div class="card-footer">
                    <button style="background: green;"><a href="controllers/restaurant_owner/response_food.controller.php?time=<?= $value['time'] ?>" style="display: flex; justify-content: space-between;"><i class='bx bx-check'></i>Comfirm</a></button>
                    <button style="background: teal;"><a href="/res_order?id=<?= $value['user_id'] ?>&time=<?= $value['time'] ?>" style="display: flex; justify-content: space-between;"><i class='bx bx-revision'></i>Review</a></button>
                    <button><a href="controllers/orders/cancel.controller.php?orderid=<?= $value['time'] ?>" style="display: flex; justify-content: space-between;"><i class='bx bx-x'></i>Reject</a></button>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div id="content1" class="hide">
          <?php foreach ($responseOrder as $key => $value): ?>
            <div class="card">
                <div class="card-header">
                    <div class="card-id">
                        <p><?= "A".$value['orderDetail_id'] ?></p>
                    </div>
                    <div class="card-time">
                        <i class='bx bx-time'></i>
                        <span>:<?= $value['time'] ?></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="foodname">
                      <?php
                        $foodOd = (orderbyTimeInres($resid, $value['time'], 3));
                        $totalPrice = 0;
                        foreach ($foodOd as $key => $food):
                        $totalPrice += $food['total_price'];
                      ?>
                        <p><?= $food['foodname'] ?> <span>x <?= $food['quantity'] ?></span></p>
                      <?php endforeach; ?>
                    </div>
                    <div class="total-price">
                        <p style="font-weight: bold; color: green;">total price: <span><?= $totalPrice." $" ?></span></p>
                    </div>

                </div>
                <div class="card-footer">
                    <button style="width: 100%;"><i class='bx bx-check'></i>Responsed</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if(isset($_GET['id']) && isset($_GET['time'])): ?>
    <div class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="z-index: 999; width:100%; height:100%">
      <div id="add-cate popup-cate" class="col-6 m-auto p-4 mt-3 bg-light">
        <form class="add-cate popup-cate" action="controllers/restaurant_owner/review/review.order.controller.php" method="post">
        <h1 style="margin-top: 20px; margin-bottom: 40px;">View Food</h1>              
        <div class="mb-3">
          <input type="hidden" name="customer" value="<?= $_GET['id'] ?>">
          <input type="hidden" name="time" value="<?= $_GET['time'] ?>">
          <textarea class="form-control" name="message" rows="5" id="description" placeholder = "Message to customer"></textarea></div>
          <button type="submit" class="btn btn-primary">Send</button>
          <a href="/res_order" class="btn btn-danger" >cancel</a>
        </div>
        </form>
      </div>
    </div>
    <?php endif; ?>
    
    <acronym title=""></acronym>

    <?php
    echo '<script>
    let response = document.querySelector("#response");
    let pedding = document.querySelector("#pedding");
    let content = document.querySelector("#content");
    let content1 = document.querySelector("#content1");
    
    response.addEventListener("click", ()=>{
      content.setAttribute("class", "hide");
      content1.setAttribute("class", "contentOrder");
      console.log("hello");
    })
    pedding.addEventListener("click", ()=>{
      content1.setAttribute("class", "hide");
      content.setAttribute("class", "contentOrder");
    });
    </script>';

    echo "<script>
     
      let btnAdd = document.querySelectorAll('#add-cate');
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
      for(let i = 0; i<btnAdd.length; i++){
        btnAdd[i].addEventListener('click', showBtn);   
      }
      btnCancel.addEventListener('click, hide');
    </script>";


      ?>