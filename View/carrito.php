<div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/wine7.jpg"></div>

<div class="InfoTitulo">
    <h2 class="text-uppercase font-weight-bold">Carrito de Compras</h2>
</div>

<div class="icons" style="padding:25px;">
    <a href="?c=beer" style="padding:15px;"><i class="fas fa-beer"></i></a>
    <a href="?c=wine" style="padding:15px;"><i class="fas fa-wine-glass-alt"></i></a>
    <a href="?c=drinks" style="padding:15px;"><i class="fas fa-glass-whiskey"></i></a>
</div>

<?php 
$TotalB = 0;
$TotalW = 0;
$TotalD = 0;
$cantB = 0;
$cantW = 0;
$cantD = 0;
 ?>

 <div class="container">
     <h6 class="text-uppercase font-wight-bold"><a href="?c=perfil"><?php echo $user->name;?> <?php echo $user->last_name;?></a></h6>
 </div>

<?php if(isset($carrito)){ ?>
    <?php if(count($carrito)){ ?>
        <?php foreach($carrito as $cart){?>
            <?php if($user->get_element('id_user') == $cart->get_element('id_user')){?>
                <?php if($cart->type == 1){?>
                    <div class="col-md-1"></div>
                    <div class="form-row col-md-12" style="padding: 25px;padding-left:235px;">
                        <div class="col-md-1">  
                            <img src="<?php echo $cart->image;?>" class="d-block w-100" alt="Drinks" height="65" width="60">
                        </div>
                        <div class="col-md-10" style="padding-left:35px;">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <h5><i><?php echo $cart->name_prod; ?></i></h5>
                                </div>
                                <div class="col-md-2">
                                    <label style="text-align: justify;">Cantidad: <?php echo $cart->cant; ?></label>
                                    <?php
                                        $cantAB = $cart->cant;
                                        $cantCB = $cantAB + $cantB;
                                        $cantB = $cantCB;

                                    ?>
                                </div>
                                <div class="col-md-3">
                                    <label>Precio por SixPack: $<?php echo $cart->price; ?></label>
                                    <?php 
                                        $cantAB = $cart->cant;
                                        $priceAB = $cart->price;
                                        $TotalCB = $cantAB * $priceAB;
                                        $TotalB = $TotalB + $TotalCB;
                                    ?>
                                </div>
                                <div class="col-md-2">
                                    <a href="?c=delete&id_carrito=<?php echo $cart->get_element('id_carrito'); ?>"><small style="font-size: 11px;">Delete Item</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                <?php } ?>

            <!--------------Wine----------------------------------------------------------------------------------------------------------------------------------------------------->

                <?php if($cart->type == 2){?>
                    <div class="col-md-1"></div>
                    <div class="form-row col-md-12" style="padding: 25px;padding-left:235px;">
                        <div class="col-md-1">  
                            <img src="<?php echo $cart->image;?>" class="d-block w-100" alt="Drinks" height="65" width="60">
                        </div>
                        <div class="col-md-10" style="padding-left:35px;">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <h5><i><?php echo $cart->name_prod; ?></i></h5>
                                </div>
                                <div class="col-md-2">
                                    <label style="text-align: justify;">Cantidad: <?php echo $cart->cant; ?></label>
                                    <?php  
                                        $cantAW = $cart->cant;
                                        $cantCW = $cantAW + $cantW;
                                        $cantW = $cantCW;

                                    ?>
                                </div>
                                <div class="col-md-3">
                                    <label>Precio por unidad: $<?php echo $cart->price; ?></label>
                                    <?php 
                                        $cantAW = $cart->cant;
                                        $priceAW = $cart->price;
                                        $TotalCW = $cantAW * $priceAW;
                                        $TotalW = $TotalW + $TotalCW;
                                    ?>
                                </div>
                                <div class="col-md-2">
                                    <a href="?c=delete&id_carrito=<?php echo $cart->get_element('id_carrito'); ?>"><smal style="font-size: 11px;">Delete Item</smal></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                <?php } ?>

            <!----------DRINK-------------------------------------------------------------------------------------------------------->

                <?php if($cart->type == 3){?>
                    <div class="col-md-1"></div>
                    <div class="form-row col-md-12" style="padding: 25px;padding-left:235px;">
                        <div class="col-md-1">  
                            <img src="<?php echo $cart->image;?>" class="d-block w-100" alt="Drinks" height="65" width="60">
                        </div>
                        <div class="col-md-10" style="padding-left:35px;">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <h5><i><?php echo $cart->name_prod; ?></i></h5>
                                </div>
                                <div class="col-md-2">
                                    <label style="text-align: justify;">Cantidad: <?php echo $cart->cant; ?></label>
                                    <?php
                                        $cantAD = $cart->cant;
                                        $cantCD = $cantAD + $cantD;
                                        $cantD = $cantCD;
                                    ?>
                                </div>
                                <div class="col-md-3">
                                    <label>Precio por unidad: $<?php echo $cart->price; ?></label>
                                    <?php 
                                        $cantAD = $cart->cant;
                                        $priceAD = $cart->price;
                                        $TotalCD = $cantAD * $priceAD;
                                        $TotalD = $TotalD + $TotalCD;
                                    ?>
                                </div>
                                <div class="col-md-2">
                                    <a href="?c=delete&id_carrito=<?php echo $cart->get_element('id_carrito'); ?>"><small style="font-size: 11px;">Delete Item</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
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
            <div style="padding:5px; padding-left: 80%;">
                <h5 class="text-uppercase font-weight-bold">Total: $<?php echo $total; ?></h5>
            </div>
            <div  style="padding:15px; padding-left: 80%;">
                <a href="?c=pago" class="btn btn-warning btn-lg">Comprar</a>
            </div>
    <?php } ?>
<?php }else{?>
    <div class="container">
        <h4 class="text-uppercase text-weight-bold" style="color:orange">El carrito de compras esta vacio</h4>
    </div>    
<?php }?>
