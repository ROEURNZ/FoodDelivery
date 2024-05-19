<?php
if(isset($_SESSION['paymentCard'])){
    if($_SESSION['paymentCard'] != ''){
        $detail = detailRes($_SESSION['paymentCard'][0][2]);
    }
}
?>
<div class="osahan-checkout">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Checkout</h4>
            </div>
        </div>
        <div class="container position-relative">
            <div class="py-5 row">
                <div class="col-md-8 mb-3">
                    <div>
                        <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <i class="feather-credit-card mr-3"></i> Credit/Debit Card
                                            <i class="feather-chevron-down ml-auto"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <h6 class="m-0">Add new card</h6>
                                        <p class="small">WE ACCEPT <span class="osahan-card ml-2 font-weight-bold">(
                                                Master Card / Visa Card / Rupay )</span></p>
                                        <form action="controllers/orders/payment.byCard.controller.php" method="post">
                                            <div class="form-row">
                                                <div class="col-md-12 form-group">
                                                    <label class="form-label font-weight-bold small">Card number</label>
                                                    <div class="input-group">
                                                        <input placeholder="Card number" type="number"
                                                            class="form-control" name="cardNumber">
                                                        <div class="input-group-append"><button type="button"
                                                                class="btn btn-outline-secondary"><i
                                                                    class="feather-credit-card"></i></button></div>
                                                        
                                                    </div>
                                                    <?php if(isset($_SESSION['wrongNumber'])): ?>
                                                            <?php if($_SESSION['wrongNumber'] != ''):?>
                                                                <div>
                                                                    <p style="color: red;"><?= '* '.$_SESSION['wrongNumber']?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-8 form-group"><label
                                                        class="form-label font-weight-bold small">Valid
                                                        through(MM/YY)</label><input
                                                        placeholder="Enter Valid through(MM/YY)" type="text"
                                                        class="form-control" name="cardDate"></div>
                                                <div class="col-md-4 form-group"><label
                                                        class="form-label font-weight-bold small">CVV</label><input
                                                        placeholder="Enter CVV Number" name="cvv" type="password"
                                                        class="form-control"></div>
                                                        <?php if(isset($_SESSION['wrongNumber'])): ?>
                                                            <?php if($_SESSION['wrongNumber'] != ''):?>
                                                                <div class="col-md-4 form-group">
                                                                    <p style="color: red;"><?= '* '.$_SESSION['wrongNumber']?></p>
                                                                </div>
                                                            <?php 
                                                            endif; 
                                                            ?>
                                                        <?php 
                                                         $_SESSION['wrongNumber'] = '';
                                                        endif; 
                                                        ?>
                                                <div class="col-md-12 form-group"><label
                                                        class="form-label font-weight-bold small">Name on
                                                        card</label><input placeholder="Enter Card name" type="text"
                                                        class="form-control" name="name"></div>
                                                        
                                                <div class="col-md-12 form-group mb-0">
                                                    <div class="custom-control custom-checkbox"><input type="checkbox"
                                                            id="custom-checkbox1" class="custom-control-input"><label
                                                            title type="checkbox" for="custom-checkbox1"
                                                            class="custom-control-label small pt-1">Securely save this
                                                            card for a faster checkout next time.</label></div>
                                                            
                                                </div>
                                                <div class="col-md-12 form-group mb-0" style="display: flex; justify-content: space-between;">
                                                <a href="controllers/checkout/cancel_checkout.controller.php" class="btn btn-blcok" style="background: red; color: white; height: 100%; width: 45%;">Cancel</a>
                                                <button class="btn btn-success btn-block" style="height: 100%; width: 45%;">PAY FOR YOUR ORDER <i
                                    class="feather-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="feather-globe mr-3"></i> Net Banking
                                            <i class="feather-chevron-down ml-auto"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <form>
                                            <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary active">
                                                    <input type="radio" name="options" id="option1" checked> HDFC
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option2"> ICICI
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option3"> AXIS
                                                </label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group mb-0">
                                                    <label class="form-label small font-weight-bold">Select
                                                        Bank</label><br>
                                                    <select class="custom-select form-control">
                                                        <option>Bank</option>
                                                        <option>KOTAK</option>
                                                        <option>SBI</option>
                                                        <option>UCO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="col-md-4 pt-3" action="#" method="post">
                    <?php 
                    $totalItem = 0;
                    $totalPrice = 0;
                    $orderItem = $_SESSION['paymentCard'];
                    ?>
                    
                <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                    <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                        <img alt="osahan" src="assets/images/res_img/<?= $detail['res_img']?>" class="mr-3" style="width: 40px; height: 40px; border-radius: 50%">
                        <div class="d-flex flex-column">
                            <h6 class="mb-1 font-weight-bold"><?= $detail['restaurant_name'] ?></h6>
                            <p class="mb-0 small text-muted"><i class="feather-map-pin"></i><?= $detail['address'] ?></p>
                        </div>
                    </div>
                    <div class="bg-white border-bottom py-2" id="group-add">
                        <?php foreach ($orderItem as $key => $value):
                            $totalItem += $value[1];
                            $totalPrice += $value[3];
                            ?>
                    <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                        <div class="media align-items-center">
                            <div class="mr-2 text-danger"></div>
                            <div class="media-body">
                                <p class="m-0" id="food_name"><?= $value[0] ?></p>
                                <input type="hidden" value="3" name="id[]">
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="count-number float-right">
                            <button type="button" class="btn-sm left dec btn btn-outline-secondary"><i class="feather-minus"></i></button>
                            <input class="count-number-input" type="text" name="qty[]" value="<?= $value[1] ?>">
                            <button type="button" class="btn-sm right inc btn btn-outline-secondary"><i class="feather-plus"></i></button>
                        </span>
                        <p class="text-gray mb-0 float-right ml-2 text-muted small">$<?= $value[3] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                    </div>
                    
                    <div class="bg-white p-3 clearfix border-bottom">
                        <p class="mb-1">Item Total <span class="float-right text-dark"><?= $totalItem ?></span></p>
                        <hr>
                        <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">$<?= $totalPrice ?></span></h6>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
