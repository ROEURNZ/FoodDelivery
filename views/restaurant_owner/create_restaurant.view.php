
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Gurdeep Osahan" />
    <meta name="author" content="Gurdeep Osahan" />
    <link rel="shortcut icon" href="assets/images/logo_web_red.png" type="image/x-icon">
    <title>Foodride - Online Food Ordering Website Template</title>

    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />

    <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css" />

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link href="vendor/css/style.css" rel="stylesheet" />

    <link href="vendor/sidebar/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="login-page vh-140">
        <video loop autoplay muted id="vid">
            <source src="assets/images/bg.mp4" type="video/mp4" />
            <source src="assets/images/bg.mp4" type="video/ogg" />
            Your browser does not support the video tag.
        </video>
        <div class="d-flex align-items-center justify-content-between vh-140">
            <div class="px-5 col-md-6 ml-auto">
                <div class="px-20 col-12 mx-auto" style="margin-top: 10%;">
                    <h2 class="text-dark my-20">Create restaurant</h2>
                    <p class="text-50">Create your restaurant</p>
                    <form class="mt-5 mb-4" action="../../controllers/restaurant_owner/create.controller.php" method='post'>
                        <div class="form-group">
                            <label for="exampleInputName" class="text-dark">Restaurant Name:</label>
                            <input type="text" name="resname" class="form-control" id="exampleInputName" />
                        </div>
                        <div class="form-group">
                            <label for="text" class="text-dark">Address</label>
                            <input type="text"  name='address' class="form-control" id="text"
                                aria-describedby="emailHelp" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-dark">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                            
                        </div>
                        <div class="form-group">
                            <div style="width: 100%; display: flex; justify-content: space-between;">
                                <div style="width: 40%">
                                    <label for="exampleInputPassword1" class="text-dark">Time open</label>
                                    <input type="time" name="open" class="form-control">
                                </div>
                                <div style="width: 40%;">
                                    <label for="exampleInputPassword1" class="text-dark">Time close</label>
                                    <input type="time" name="close" class="form-control">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group" style="display: flex; justify-content: space-between;">
                            <a href="controllers/restaurant_owner/cancel_restaurant.controller.php" class="btn btn-lg" style="width: 30%; background: red; color: white;">Cancel</a>
                            <button class="btn btn-success btn-lg text-white" style="width: 30%;">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/slick/slick.min.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/js/osahan.js"></script>
    <script src="vendor/rocket/rocket-loader.min.js" data-cf-settings="c7cde99310a44e0c8a34cba7-|49" defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"84de77e33d3c8817","r":1,"version":"2024.1.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}'
        crossorigin="anonymous"></script>
</body>

</html>