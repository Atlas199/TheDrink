<div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/beer8.webp"></div>

<div class="infoTitulo" style="text-align: center; padding:25px;">
    <h1 class="text-uppercase font-weight-bold">Carrito de Compras</h1>
</div>

<a href="?c=cart" style="padding: 25px;">Regresar</a>
<?php 
$TotalB = 0;
$TotalW = 0;
$TotalD = 0;
$cantB = 0;
$cantW = 0;
$cantD = 0;
 ?>

<?php if(isset($carrito)){ ?>
    <?php if(count($carrito)){ ?>
        <?php foreach($carrito as $cart){?>
            <?php if($user->get_element('id_user') == $cart->get_element('id_user')){?>
                <?php if($cart->type == 1){?>
                    <input type="hidden" value="<?php echo $cart->cant; ?>">
                    <?php
                        $cantAB = $cart->cant;
                        $cantCB = $cantAB + $cantB;
                        $cantB = $cantCB;

                    ?>
                    <input type="hidden" value="<?php echo $cart->price; ?>">
                    <?php 
                        $cantAB = $cart->cant;
                        $priceAB = $cart->price;
                        $TotalCB = $cantAB * $priceAB;
                        $TotalB = $TotalB + $TotalCB;
                    ?>
                <?php } ?>
                <?php if($cart->type == 2){?>
                    <input type="hidden" value="<?php echo $cart->cant; ?>">
                    <?php  
                        $cantAW = $cart->cant;
                        $cantCW = $cantAW + $cantW;
                        $cantW = $cantCW;

                    ?>
                    <input type="hidden" value="<?php echo $cart->price; ?>">
                    <?php 
                        $cantAW = $cart->cant;
                        $priceAW = $cart->price;
                        $TotalCW = $cantAW * $priceAW;
                        $TotalW = $TotalW + $TotalCW;
                    ?>
                    <?php } ?>
                    <?php if($cart->type == 3){?>
                        <input type="hidden" value="<?php echo $cart->cant; ?>">
                        <?php
                            $cantAD = $cart->cant;
                            $cantCD = $cantAD + $cantD;
                            $cantD = $cantCD;
                        ?>
                        <input type="hidden" value="<?php echo $cart->price; ?>">
                        <?php 
                            $cantAD = $cart->cant;
                            $priceAD = $cart->price;
                            $TotalCD = $cantAD * $priceAD;
                            $TotalD = $TotalD + $TotalCD;
                        ?>
                        <?php } ?>
            <?php } ?>
        <?php } ?>
            <?php 
                $cantBeer = $cantB; 
                $cantWine = $cantW;
                $cantDrinks = $cantD;

                $resultBeer = $TotalB;
                $resultWine = $TotalW;
                $resultDrink = $TotalD;
            
                $total = $resultBeer + $resultWine + $resultDrink;
                $date = date('d/m/Y');
                date_default_timezone_set("America/Denver");
                $time = date('H:i:s');
            ?>
            <form action="?c=historial" method="POST">
                <input type="hidden" value="<?php echo $date; ?>" name="date">
                <input type="hidden" value="<?php echo $time; ?>" name="time">
                <input type="hidden" value="<?php echo $cantBeer; ?>" name="cantBeer">
                <input type="hidden" value="<?php echo $cantWine; ?>" name="cantWine">
                <input type="hidden" value="<?php echo $cantDrinks; ?>" name="cantDrinks">
                <input type="hidden" value="<?php echo $total; ?>" name="total">
               
<div class="wrapper">
    <div class="payment">
        <h2 class="text-uppercase font-weight-bold">Checkout</h2>
        <div class="form">
            <div class="cards space icon-relative">
                <label class="label">Card holder</label>
                <input type="text" class="input" name="card_holder" placeholder="Card Holder" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="cards space icon-relative">
                <label class="label">Card Number</label>
                <input type="text" class="input" name="card_number" placeholder="XXXX XXXX XXXX XXXX" data-mask="0000 0000 0000 0000" required>
                <i class="fas fa-credit-card"></i>
            </div>
            <label class="label">Payment Methods</label>
            <div class="form-row" style="padding: 10px;">
                <img src="IMG/logos/visa.png" width="45" height="45" style="margin-left: 10px;">
                <img src="IMG/logos/master.png" width="55" height="40" style="margin-left: 45px;">
                <img src="IMG/logos/american.png" width="45" height="40" style="margin-left:45px;">
                <img src="IMG/logos/bitcoins.png" width="85" height="40" style="margin-left: 40px;">
            </label>
            <div class="card-grp space">
                <div class="card-item icon-relative">
                    <label class="label">Expiration date</label>
                    <input type="text" class="input" name="expiry_date" placeholder="00 / 00" data-mask="00 / 00" required>
                    <i class="fas fa-calendar-alt" style="bottom: 19px;"></i>
                </div>
                <div class="card-item icon-relative">
                    <label class="label">CVC</label>
                    <input type="text" class="input" name="cvc" placeholder="000" data-mask="000" required>
                    <i class="fas fa-lock" style="bottom: 19px;"></i>
                </div>
            </div>
            <label class="text-uppercase font-weight-bold" style="margin-top: 10px;"><i>Total a pagar: $<?php echo $total; ?></i></label>
                <div class="btn">
                    <button class="btn btn-info btn-lg" style="width: 365px;">Comprar</button>
                </div>
                <div class="btn">
                    <a href="?c=cart" class="btn btn-danger btn-sm" style="width: 365px;">Cancelar</a>
                </div>
            </form>
    <?php } ?>
<?php }?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>