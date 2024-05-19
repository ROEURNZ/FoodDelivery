
<div class="container_edit">
        <form action="controllers/restaurant_owner/editeRestaurant.process.controller.php" enctype="multipart/form-data" method="post" class="form_edit">
            <div class="chengRes">
                <h1>Change your restaurant infomation</h1>
            </div>
            <div class="form-group">
                <label for="exampleInputName" class="text-dark">Restaurant Name:</label>
                <input type="text" name="resname" class="form-control" id="exampleInputName" value="<?php print_r($_SESSION['res_own']['restaurant_name']); ?>" />
            </div>
            <div class="form-group">
                <label for="text" class="text-dark">Address</label>
                <input type="text"  name='address' class="form-control" id="text"
                    aria-describedby="emailHelp" value="<?php print_r($_SESSION['res_own']['address']);  ?>" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="text-dark">Restaurant Photo</label>
                <input type="file" name="my_image" id="image">
                
            </div>
            <div class="form-group">
                <div style="width: 100%; display: flex; justify-content: space-between;">
                    <div style="width: 40%; display: flex; flex-direction: column;">
                        <label for="exampleInputPassword1" class="text-dark">Time open</label>
                        <input type="time" name="open" id="time" value="<?php print_r($_SESSION['res_own']['time_open']);?>">
                    </div>
                    <div style="width: 40%; display: flex; flex-direction: column;">
                        <label for="exampleInputPassword1" class="text-dark">Time close</label>
                        <input type="time" name="close" id="time" value="<?php print_r($_SESSION['res_own']['time_close']);?>" >
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" id="send" name="send" value="Save" style="padding: 10px 0px; font-size: 18px; background-color: rgb(79, 171, 233); border: none; border-radius: 10px; color: white;"/>
            </div>
        </form>
    </div>

<?php if(isset($_SESSION['success'])): ?>
<?php if($_SESSION['success'] != ''): ?>
<div class="container-form" style="width: 100%; height: 100%; position:  absolute; top: 0; background: rgba(12, 12, 12, 0.338); ">
<div class="success" style="background: white; width: 600px; height: 400px; position: absolute; top: 20%; left: 35%; border-radius: 10px; display: flex; flex-direction: column; justify-content: space-between; padding: 10px;">
    <img src="assets/images/photo_2024-03-26_09-00-23.jpg" alt="" style="width: 200px; height: 200px; align-self: center;">
    <h3 style="align-self: center;">Your restaurant have already changed</h3>
    <div class="btnclass" style="align-self: center; width: 200px;">
        <a href="/edite_res" class="btn bg-success btn-lg text-white" style="width: 100%;">OK</a>
    </div>
</div>
</div>
<?php 
$_SESSION['success'] = '';
endif; ?>
<?php endif; ?>