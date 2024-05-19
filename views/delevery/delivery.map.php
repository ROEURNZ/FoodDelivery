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
  
  <?php
    if (isset($_SESSION['adre']))
    {
        if($_SESSION['adre'] != ''){
        $address = $_SESSION["adre"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }else{
        ?>
        <iframe width="100%" height="500" src="https://maps.google.com/maps?output=embed"></iframe>
            <?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    }
    }else{
      ?>
        <iframe width="100%" height="500" src="https://maps.google.com/maps?output=embed"></iframe>
          <?php
    }
?>


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