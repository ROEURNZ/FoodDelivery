<div class="profile">
    <div class="container position-relative">
        <div class="py-5 profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <div class="d-flex align-items-center p-3">
                        <div class="left ml-2">
                            <div class="upload" id="upload">
                                <img class="Admin-profile" src="assets/images/user/<?php print_r(getAdmin()['user_img']); ?>" width="305vh" height="237vh">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="rounded shadow-sm p-4 bg-white">
                    <h3 class="mb-4">Admin Support</h3>
                    <div id="edit_profile">
                        <div>
                            <form action="controllers/profiles/change.account.info.controller.php" method="post">
                                <div class="form-group">
                                    <label for="name" style="font-size: 20px;">Full Name: <?php print_r(getAdmin()['username']); ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="number" style="font-size: 20px;">Mobile Number: <?php print_r(getAdmin()['phoneNumber']); ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="email" style="font-size: 20px;">Email: <?php print_r(getAdmin()['email']); ?></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>