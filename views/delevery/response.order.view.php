<?php
ob_start();
?>
<div class="main-wrapper">
  <!-- ! Main nav -->
  <nav class="main-nav--bg">
    <div class="container main-nav">
      <div class="main-nav-start">
        <div class="search-wrapper">
          <i data-feather="search" aria-hidden="true"></i>
          <input type="text" placeholder="Find User ..." required>
        </div>
      </div>
      <div class="main-nav-end">
        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
          <span class="sr-only">Toggle menu</span>
          <span class="icon menu-toggle--gray" aria-hidden="true"></span>
        </button>
        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
          <span class="sr-only">Switch theme</span>
          <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
          <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
        </button>
        <div class="notification-wrapper">
          <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
            <span class="sr-only">To messages</span>
            <span class="icon notification active" aria-hidden="true"></span>
          </button>
          <ul class="users-item-dropdown notification-dropdown dropdown">
            <li>
              <a href="##">
                <div class="notification-dropdown-icon info">
                  <i data-feather="check"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">System just updated</span>
                  <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                    here.</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="notification-dropdown-icon danger">
                  <i data-feather="info" aria-hidden="true"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">The cache is full!</span>
                  <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                    interfere ...</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="notification-dropdown-icon info">
                  <i data-feather="check" aria-hidden="true"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">New Subscriber here!</span>
                  <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                </div>
              </a>
            </li>
            <li>
              <a class="link-to-page" href="##">Go to Notifications page</a>
            </li>
          </ul>
        </div>
        <div class="nav-user-wrapper">
          <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
            <span class="sr-only">My profile</span>
            <span class="nav-user-img">
              <picture>
                <source srcset="../../assets/images/icons/runner.png"><img src="../../assets/images/icons/runner.png" alt="User name">
              </picture>
            </span>
          </button>
          <ul class="users-item-dropdown nav-user-dropdown dropdown">
            <li><a href="##">
                <i data-feather="user" aria-hidden="true"></i>
                <span id="popInfo">Profile</span>
              </a></li>
            <li><a href="##">
                <i data-feather="settings" aria-hidden="true"></i>
                <span>Account settings</span>
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
  <!-- ================delevery page=============== -->
  <div class="container-card mt-4">
    <div class="card rounded-0">
      <div class="card-body d-flex">
        <img src="../../assets/images/delevery moto.jpg" style="width: 30%;" alt="...">
        <span class="d-flex flex-column justify-content-center" style="width: 100%;">
          <h2 class="text-center mb-2">Safety & Quickly For Delevery</h2>
          <p class="text-center">Please order now to be accept a good price for our Restuarant.</p>
        </span>
      </div>
    </div>
  </div>
  <div class="contain-card d-flex flex-wrap p-4 gap-4 ">
    <?php
      foreach ($responseOrderConfirm as $key => $value):

    ?>
    <div class="card" style="width: 25rem;" style="border-color: transparent !important;" border: 2px solid transparent; background-color: #ccc; cursor: pointer;" onmouseover="this.style.border='2px solid #EED7C5'" onmouseout="this.style.border='2px solid transparent'">
      <img src="assets/images/trending2.png" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <div class="contain-name d-flex mb-1">
          <span class="card-text m-lg-1 " style="font-weight:bold;">Name:</span>
          <p class="align-self-center">   <?= $value['username'] ?></p>
        </div>
        <div class="contain-phone d-flex mb-1">
          <span class="card-text m-lg-1" style="font-weight:bold;">Phone Number: </span>
          <p class="align-self-center"><?= $value['phoneNumber'] ?></p>
        </div>
        <div class="contain-loca d-flex mb-1">
          <span class="card-text m-lg-1 " style="font-weight:bold;">Location:</span>
          <p class="align-self-center">Kandieng, Pursat.</p>
        </div>
        <div class="contain-loca d-flex mb-1">
          <span class="card-text m-lg-1" style="font-weight:bold;">Restaurant Location:</span>
          <p class="align-self-center"><?= $value['address'] ?></p>
        </div>
        <a href="controllers/delivery/completed.order.php?time=<?php echo $value['time'] ?>" class="btn btn-success" style="font-size: 13px;">Complete</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>


  <!-- pop-up profile user-admin -->
  <div id="profile-admin-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%">
    <div class="col-6 m-auto p-4 mt-3 bg-light rounded-3">
      <div class="show-pro d-flex flex-column">
        <label class="d-flex justify-content-center" for="imageInput" style="width: auto;">
          <img class="border border-5" src="../../assets/images/user/IMG-65d9f4f69e5411.43011126.jpg" style="width: 20%; border-radius: 50%;" alt="...">
        </label>
        <input type="file" id="imageInput" style="display: none;" accept="image/*">
        <div class="username text-center fs-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Chuon Veasna</div>
        <div class="email text-secondary mb-3 m-auto" style="font-family: serif; font-style: italic;">chuonveasna123@gmail.com</div>
      </div>
      <div class="show-info" style="width:100%;">
        <input type="text" class="form-control mb-3" placeholder="Username" aria-label="username">
        <input type="email" class="form-control mb-3" placeholder="Email Address" aria-label="email">
        <input type="number" class="form-control mb-3" placeholder="Phone Number" aria-label="phone">
      </div>
      <div>
        <input type="submit" class="btn btn-primary" name="send" value="Save" />
        <input type="button" class="btn btn-danger" id="btn-user-cancel" value="Cancel" />
      </div>
    </div>
  </div>
  <?php
  echo "<script>
    // ================Create User Form================
    document.addEventListener('DOMContentLoaded', function () {
    let addUserBtn = document.getElementById('add-user-btn');
    let addUserCancelBtn = document.getElementById('add-user-cancel');
    let updateUserCancelBtn = document.getElementById('update-user-cancel');
    let addUserPopup = document.getElementById('add-user-popup');
    let updateUserPopup = document.getElementById('update-user-popup');

// =================Show popup admin_user===============
    let btnUpInfo = document.getElementById('popInfo');
    let popUpInfo = document.getElementById('profile-admin-popup');
    let btnHidePopup = document.getElementById('btn-user-cancel');
    function showProfilePopup() {
      popUpInfo.style.display = 'block';
    }

    function hideProfilePopup() {
      popUpInfo.style.display = 'none';
    }
    btnHidePopup.addEventListener('click',hideProfilePopup);
    btnUpInfo.addEventListener('click', showProfilePopup);

    function showAddUserPopup() {
      addUserPopup.style.display = 'block';
    }
    function hideAddUserPopup() {
      addUserPopup.style.display = 'none';
    }
    function hideUpdateUserPopup() {
      updateUserPopup.style.display = 'none';
    }
    addUserBtn.addEventListener('click', showAddUserPopup);
    addUserCancelBtn.addEventListener('click', hideAddUserPopup);
    updateUserCancelBtn.addEventListener('click', hideUpdateUserPopup);
    let updateUserBtn = document.querySelectorAll('#update-user');

    // ===============Update User ====================
    function showUpdateUserPopup() {
      updateUserPopup.style.display = 'block';
    }
    for(let i = 0; i < updateUserBtn.length; i++) {
      updateUserBtn[i].addEventListener('click', showUpdateUserPopup);
    }
    let updateUserPopupVisible = false;
    updateUserBtn.addEventListener('click', function() {
      if (updateUserPopupVisible) {
        updateUserPopup.style.display = 'none';
      } else {
        updateUserPopup.style.display = 'block';
      }
      updateUserPopupVisible = !updateUserPopupVisible;
    });
    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
      let dropdown = document.querySelector('.users-item-dropdown.dropdown');
      let isClickInsideDropdown = dropdown.contains(event.target);
      if (!isClickInsideDropdown) {
        dropdown.style.display = 'none';
      }
    });
  });
</script>";
  ?>
  </main>