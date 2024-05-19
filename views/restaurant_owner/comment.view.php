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
   <!-- ! Main -->
   <main class="main users chart-page" id="skip-target">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="chart">
                <div class="container mt-3 ">
                    <table class="table" style="margin-top: 30px;">
                            <thead>
                                <tr>
                                  <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                require "database/database.php";
                                // require "models/employee.model.php";
                                $resid = $_SESSION['res_own']['restaurant_id'];
                                $statement = $connection->prepare("SELECT * FROM comments inner join users on users.user_id = comments.user_id where restaurant_id = $resid");
                                $statement->execute();
                                $cmts = $statement->fetchAll();
                                foreach ($cmts as $key => $cmt) :?>
                                  <tr>
                                    <td style="vertical-align: bottom;"><img src="assets/images/user/<?php echo $cmt['user_img']; ?>" alt="" style="width: 40px; heigh: 40px; border-radius: 50%;" ></td>
                                    <td style="vertical-align: bottom;"><?php echo $cmt['username'];?></td>
                                    <td style="vertical-align: bottom;"><?php echo $cmt['date']; ?></td>
                                    <td style="vertical-align: bottom;"><?php echo $cmt['contents']; ?></td>
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