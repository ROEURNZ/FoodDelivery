<?php
$users = getAllUsers();
ob_start();
if (!isset($_SESSION['popup'])) {
    $_SESSION['popup'] = '';
}
$userCountsByRole = countUsersByRole();
?>


<div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
        <div class="container main-nav">
            <div class="main-nav-start">
                <div class="search-wrapper">
                    <i data-feather="search" aria-hidden="true"></i>
                    <input type="text" id="searchInput" placeholder="Find User ..." required>
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
                                    <span class="notification-dropdown__subtitle">The system has been successfully
                                        upgraded. Read more
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
                                    <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of
                                        memory space and
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
                                    <span class="notification-dropdown__subtitle">A new subscriber has
                                        subscribed.</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="link-to-page" href="##">Go to Notifications page</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-user-wrapper">
                    <!-- <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button" style="border-color: transparent !important;"> -->
                    <button class="rounded-circle nav-user-btn dropdown-btn" style="border-color: transparent !important;" border: 2px solid transparent; background-color: #ccc; cursor: pointer;" onmouseover="this.style.border='2px solid #EED7C5'" onmouseout="this.style.border='2px solid transparent'" title="My profile">
                        <span class="sr-only">My profile</span>
                        <span class="nav-user-img">
                            <picture>
                                <source srcset="assets/images/user/<?= $adminPf['user_img'] ?>" type="image/webp"><img src="assets/images/user/<?= $adminPf['user_img'] ?>" alt="User name">
                            </picture>
                        </span>
                    </button>
                    <ul class="users-item-dropdown nav-user-dropdown dropdown" style="border-color: transparent !important;">
                        <li><a href="#" style="border-color: transparent !important;">
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
    <main class="main users chart-page" id="skip-target">
        <div class="container">

            <h2 class="main-title">Dashboard</h2>

            <div class="row stat-cards">

                <div class="col-md-6 col-xl-3">
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon primary">
                            <img src="../../assets/images/icons/users.png" class="rounded-circle" alt="">
                        </div>
                        <div class="stat-cards-info">
                            <h5 class="mb-3 " style="color: #949494;">All users</h5>
                            <p class="text-info">
                                <?= $userCountsByRole[3]['user_count']; ?>
                            </p>
                        </div>
                    </article>
                </div>


                <div class="col-md-6 col-xl-3">
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon warning">
                            <img src="../../assets/images/icons/restaurant owner.png" class="rounded-circle" alt="">
                        </div>
                        <div class="stat-cards-info">
                            <h5 class="mb-3" style="color: #949494;">Owners</h5>
                            <p class="text-info">
                                <?= $userCountsByRole[2]['user_count']; ?>
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3">
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon purple">
                            <img src="../../assets/images/icons/deliverer.png" class="rounded-circle" alt="">
                        </div>
                        <div class="stat-cards-info">
                            <h5 class="mb-3" style="color: #949494;">Runners</h5>
                            <p class="text-info">
                                <?= $userCountsByRole[1]['user_count']; ?>
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3">
                    <article class="stat-cards-item">
                        <div class="stat-cards-icon success">
                            <img src="../../assets/images/icons/eaters.png" class="rounded-circle" alt="">
                        </div>
                        <div class="stat-cards-info">
                            <h5 class="mb-3" style="color: #949494;">Customers</h5>
                            <p class="text-info">
                                <?php echo $userCountsByRole[0]['user_count']; ?>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="btn-add">
                <button type="submit" id="add-user-btn" class="btn btn-primary">Add User</button>
            </div>
            <hr>
            <div class="users-table table-wrapper">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="users-table-info">
                            <th class="text-center ml-2">ID</th>
                            <th>Author</th>
                            <th>Username</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $users = getAllUsers();
                        foreach ($users as $user) :
                        ?>
                        <?php if ($user['role_type'] != ""): ?>
                            <tr>
                                <td>
                                    <?= $user['user_id'] ?>
                                </td>
                                <td>
                                    <div class="pages-table-img">
                                        <picture>
                                            <img src="assets/images/user/<?= $user['user_img'] ?>" alt="Profile Picture">
                                        </picture>
                                    </div>
                                </td>
                                <td>
                                    <?= $user['username'] ?>
                                </td>
                                <td>
                                    <?= $user['phoneNumber'] ?>
                                </td>
                                <td>
                                    <?= $user['email'] ?>
                                </td>
                                <td>
                                    <?php if (isset($user['role_type'])) {
                                        echo $user['role_type'];
                                    } else {
                                        echo "Role Undefined";
                                    } ?>
                                </td>
                                <td>
                                    <?= $user['gender'] ?>
                                </td>
                                <td>

                                    <span class="p-relative">
                                        <button class="dropdown-btn transparent-btn " style="border-color: transparent !important;" type="button" title="More info">
                                            <div class="sr-only">More info</div>
                                            <i class="text-info" data-feather="more-horizontal" aria-hidden="true" style="color: initial; transition: color 0.3s;" onmouseover="this.style.color='red'" onmouseout="this.style.color='initial'"></i>
                                        </button>
                                        <ul class="users-item-dropdown dropdown shadow-none" style="border-color: transparent !important;">
                                            <li class="mx-2 mb-2 " style="border-color: transparent !important;" id="update-user"><a href="controllers/admin/admin.edit_user.controller.php?id=<?= $user['user_id'] ?>"><i class="fa-solid fa-pen-to-square"></i> edit </a></li>
                                            <li class="mt-2 mx-2" id="pop-del"><a href="controllers/admin/delete_user.controller.php?id=<?= $user['user_id'] ?>"><i class="fa-solid fa-user-slash"></i> delete</a></li>
                                        </ul>
                                    </span>
                                </td>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Pop-up form for adding a new user -->
        <div id="add-user-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%">
            <div class="col-7 m-auto p-4 mt-3 bg-light rounded-3">
                <form class="add-user" action="../../controllers/admin/create_user.controller.php" method="post">
                    <div class="head-control mb-4 mt-2 d-flex">
                        <h1 class="col-11 text-center text-uppercase">Add a new user</h1>
                        <div class="col btn-closing d-flex justify-content-end align-items-lg-center ">

                            <button class="btn btn-outline-danger border-2 shadow-none btn-close" style="width:32px; height:32px;" onmouseover="this.classList.remove('text-dark-subtle'); this.classList.add('text-danger');" onmouseout="this.classList.remove('text-danger'); this.classList.add('text-dark-subtle');">
                            </button>

                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <label for="username" class="col-3 form-label text-secondary">Username</label>
                        <input type="text" class="col-9 form-control shadow-none" placeholder="James Smith" id="username" name="username" aria-describedby="usernameHelp">
                    </div>
                    <div class="d-flex mb-3">
                        <label for="email" class="col-3 form-label text-secondary">Email address</label>
                        <input type="email" class="col-9 form-control shadow-none" style="border-color: transparent !important;" placeholder="client@example.com" id="email" name="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 d-flex align-items-center row">
                        <div class="pass-form-lab col-3 d-flex align-items-center">
                            <label for="create-password" class="mx-3 bg-body-tertiary mt-1 form-label text-secondary">Password</label>
                        </div>
                        <div class="col input-group">
                            <input type="password" class="col-11 form-control border-white shadow-none" id="create-password" placeholder="Your password should be at least 8 characters long" name="password">
                            <button type="button" id="toggle-create-password-btn" class="btn btn-secondary btn-outline-info border-2 text-white shadow-none" style="margin-right:8px ; width: 50px; border-color: transparent !important;">
                                <i class="fa-solid fa-eye-slash"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <label for="number" class="col-3 form-label text-secondary">Phone Number</label>
                        <input type="number" class="col-9 form-control border-white shadow-none" placeholder="(+855) 123456789" id="number" name="number" aria-describedby="numberHelp">
                    </div>

                    <div class="d-flex row align-items-center">
                        <div class="col-3">
                            <label class="col-3 form-label text-secondary">Gender</label>
                        </div>
                        <div class="col d-flex bg-white p-2 form-control border-0 rounded" style="margin-right:15px ; margin-left:5px ;">
                            <div class=" form-check col-3 d-flex align-items-center mx-3">
                                <input style="width: 20px; height: 20px; outline: 1.5px solid teal;" class="form-check-input shadow-none" type="radio" name="gender" id="maleRadio" value="M">
                                <label class="form-check-label" for="maleRadio">
                                    Male
                                </label>
                            </div>
                            <div class="form-check col d-flex align-items-center">
                                <input style="width: 20px; height: 20px; outline: 1.5px solid teal;" class="form-check-input shadow-none" type="radio" name="gender" id="femaleRadio" value="F">
                                <label class="form-check-label" for="femaleRadio">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text text-secondary" for="inputGroupSelect01"><i class="fa-solid fa-dice-d6"></i></label>
                        <select class="form-select text-secondary shadow-none" style="border-color: transparent !important;" name="role" id="inputGroupSelect01">
                            <option selected>Select a user role</option>
                            <option value="1">Customer</option>
                            <option value="2">Restaurant Owner</option>
                            <option value="3">Delivery</option>
                        </select>
                    </div>
                    <div class="bottom-btn d-flex justify-content-end mt-3">
                        <input type="submit" class="mx-3 btn btn-primary shadow-none border-2 " name="send" value="Add Now" />
                        <input type="button" class="btn btn-danger border-2 " id="add-user-cancel" value="Cancel" />
                    </div>
                </form>
            </div>
        </div>
        <?php
        if ($_SESSION['popup'] != '') : ?>
            <!-- Pop-up form for updating a user -->
            <div id="update-user-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="z-index: 999; width:100%; height:100%">
                <div class="col-7 m-auto p-4 mt-3 bg-light rounded-3">
                    <form class="update-user" action="../../controllers/admin/edit.user.controller.php" method="post">
                        <h1 class="mb-3 text-center text-uppercase">Update user info</h1>
                        <div class="row d-flex">
                            <div class="mb-3 col">
                                <input type="hidden" name="user_id" value="<?= $_SESSION['popup']['user_id'] ?>" ?>
                                <label for="username" class="form-label text-secondary">Username</label>
                                <input type="text" class="form-control border-white shadow-none" id="username" name="username" aria-describedby="usernameHelp" value="<?= $_SESSION['popup']['username'] ?>">
                            </div>
                            <div class="mb-3 col">
                                <label for="number" class="form-label text-secondary">Phone Number</label>
                                <input type="int" class="form-control border-white shadow-none" id="number" name="number" aria-describedby="numberHelp" value="<?= $_SESSION['popup']['phoneNumber'] ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-secondary">Email address</label>
                            <input type="email" class="form-control border-white shadow-none" id="email" name="email" aria-describedby="emailHelp" value="<?= $_SESSION['popup']['email'] ?>">
                        </div>
                        <div class="password-form-control mb-3">
                            <label for="update-password" class="form-label text-secondary">Password</label>
                            <div class="d-flex input-group">
                                <input type="password" class="col-12 form-control border-white shadow-none" id="update-password" value="<?= $_SESSION['popup']['password'] ?>" name="password">
                                <button type="button" id="toggle-update-password-btn" style="width: 50px; border-color: transparent !important;" class="btn btn-secondary btn-outline-info text-white border">
                                    <i class="fa-regular fa-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control shadow-none" style="border-color: transparent !important;" id="inputGroupFile02">
                            <label class="input-group-text text-dark bg-outline-info" for="inputGroupFile02"><i class="fa-solid fa-cloud-arrow-up"></i></label>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text text-secondary" for="inputGroupSelect01"><i class="fa-solid fa-dice-d6"></i></label>
                            <select class="form-select text-secondary shadow-none" style="border-color: transparent !important;" name="role" id="inputGroupSelect01">
                                <option <?= ($_SESSION['popup']['role_id'] == 1) ? 'selected' : '' ?> value="1">Customer
                                </option>
                                <option <?= ($_SESSION['popup']['role_id'] == 2) ? 'selected' : '' ?> value="2">Owner</option>
                                <option <?= ($_SESSION['popup']['role_id'] == 3) ? 'selected' : '' ?> value="3">Delivery
                                </option>
                            </select>
                        </div>
                        <button type="submit" class="mt-2 btn btn-primary border-2 btn-outline-info text-white" name="send" value="Update">Update</button>
                        <a href="/"><button type="button" class="mt-2 mx-2 btn btn-danger border-2"> Cancel</button> </a>
                    </form>
                </div>
            </div>
            <!-- pop-up profile user-admin -->
            <div id="profile-admin-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%">
                <div class="col-6 m-auto p-4 mt-3 bg-light rounded-3">
                    <div class="show-pro d-flex flex-column">
                        <!-- Wrap the image within a label -->
                        <label class="d-flex justify-content-center" for="imageInput" style="width: 100%;">
                            <img class="border border-5" src="../../assets/images/user/IMG-65d9f4f69e5411.43011126.jpg" style="width: 20%; border-radius: 50%;" alt="...">
                        </label>
                        <input type="file" id="imageInput" style="display: none;" accept="image/*">
                        <!-- Hidden file input -->
                        <div class="username text-center fs-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        </div>
                        <div class="email text-secondary mb-3 m-auto" style="font-family: serif; font-style: italic;">
                        </div>
                    </div>
                    <div class="show-info" style="width:100%;">
                        <input type="text" class="form-control shadow-none mb-3" placeholder="Username" aria-label="username">
                        <input type="email" class="form-control shadow-none mb-3" placeholder="Email Address" aria-label="email">
                        <input type="number" class="form-control shadow-none mb-3" placeholder="Phone Number" aria-label="phone">
                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text text-secondary" for="inputGroupSelect01">Role</label>
                            <select class="form-select text-secondary" name="role" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="<?= $user['role_type'] ?>">Customer</option>
                                <option value="<?= $user['role_type'] ?>">Restaurant Owner</option>
                                <option value="<?= $user['role_type'] ?>">Delivery</option>
                            </select>
                        </div>
                        <div class="gender-selection d-flex mb-1">
                            <label class="text-secondary">Gender:</label>
                            <div class="form-check d-flex">
                                <input class="text-danger" type="radio" id="maleRadio" name="gender" value="M">
                                <label for="maleRadio" class="form-check-label text-secondary">Male</label>
                            </div>
                            <div class="form-check d-flex">
                                <input type="radio" id="femaleRadio" name="gender" value="F">
                                <label for="femaleRadio" class="form-check-label mb-2 text-secondary">Female</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary border-2" name="send" value="Save" />
                        <input type="button" class="btn btn-danger border-2" id="update-user-cancel" value="Cancel" />
                    </div>
                </div>
            </div>
</div>
<?php
            $_SESSION['popup'] = '';
        endif;
?>
<!-- pop-up profile user-admin -->
<form id="profile-admin-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%" action="../../controllers/admin/admin.upload_profile.controller.php" method="post" enctype="multipart/form-data">
    <div class="col-6 m-auto p-4 mt-3 bg-light rounded-3">
        <div class="show-pro row">
            <div class="profile-container d-flex justify-content-center">
                <label for="imageInput" style="width: 150px; heigh: 150px;">
                    <img id="imagePreview" class="border border-5" src="assets/images/user/<?= $adminPf['user_img']; ?>" alt="Preview" title="Upload profile" width="150" height="150" style="border-radius: 50%;">
                </label>
                <input type="file" id="imageInput" class="image" name="my_image" style="display: none;" accept="image/*">
            </div>
            <div class="username text-center fs-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <?= $adminPf['username']; ?>
            </div>
            <div class="email text-secondary mb-3 m-auto d-flex justify-content-center" style="font-family: serif; font-style: italic;">
                <?= $adminPf['email']; ?>
            </div>
        </div>
        <div class="show-info" style="width:100%;">
            <input type="text" class="form-control mb-3 shadow-none" placeholder="Username" aria-label="username" value="<?= $adminPf['username'] ?>">
            <input type="email" class="form-control mb-3 shadow-none" placeholder="Email Address" aria-label="email" value="<?= $adminPf['email'] ?>">
            <input type="number" class="form-control mb-3 shadow-none" placeholder="Phone Number" aria-label="phone" value="<?= $adminPf['phoneNumber'] ?>">
        </div>
        <div>
            <input type="submit" class="btn btn-primary shadow-none" name="send" value="Save" />
            <input type="button" class="btn btn-danger shadow-none" id="btn-user-cancel" value="Cancel" />
        </div>
    </div>
</form>

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
    function showProfilePopup() {
      popUpInfo.style.display = 'block';
    }
    let btnHidePop = document.getElementById('update-user-cancel');
    function hideProfilePopup() {
      popUpInfo.style.display = 'none';
    }
    btnHidePop.addEventListener('click', hideProfilePopup); 
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