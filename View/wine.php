<div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/wine12.jpg"></div>

<div class="InfoTitulo">
    <h2 class="text-uppercase font-weight-bold">Carta de Vinos</h2>
</div>

<div class="col-md-10" style="padding-left: 15px;">
        <form action="?c=filterwine" method="POST">
            <div class="col-md-3" style="padding: 5px;">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><img src="IMG/filtro.png" alt="Filtro" width="20" height="25"></div>
                    </div>
                    <input type="text" class="form-control" name="name_prod" placeholder="Nombre de Producto">
                    <div class="col-md-2">
                        <div class="input-group-prepend" style="padding-left:10px;">
                            <button type="submit" class="btn btn-primary">Buscar</button>  
                        </div>             
                    </div>
                    
                </div> 
                <a href="?c=beer" style="padding:15px;"><i class="fas fa-beer"></i></a>
                <a href="?c=wine" style="padding:15px;"><i class="fas fa-wine-glass-alt"></i></a>
                <a href="?c=drinks" style="padding:15px;"><i class="fas fa-glass-whiskey"></i></a>     
            </div>
        </form>
    </div>

<label style="color: red; padding-left: 500px;"><?php if(isset($message)){ echo $message; } ?></label>

<?php if(count($product)){?>
    <?php foreach($product as $prod){ ?>
        <?php if($prod->type == 2){ ?>
            <form action="?c=carrito" method="POST">
                <div class="col-md-1"></div>
                <div class="form-row col-md-12" style="padding: 25px;">
                    <div class="col-md-2">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="<?php echo $prod->image; ?>" class="d-block w-100" alt="Drinks" height="190">
                                </div>
                                <div class="carousel-item">
                                <img src="IMG/drink-slogo.png" class="d-block w-100" alt="Drinks" height="190">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-left:35px;">
                        <h5><i><?php echo $prod->name_prod; ?></i></h5>
                        <label><?php echo $prod->pais;?></label>
                        <?php if($prod->pais == 'Alemania'){?>
                            <img src="IMG/flags/ger.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Argentina'){?>
                            <img src="IMG/flags/arg.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Australia'){?>
                            <img src="IMG/flags/aus.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Belgica'){?>
                            <img src="IMG/flags/belgium.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Canada'){?>
                            <img src="IMG/flags/canada.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Chile'){?>
                            <img src="IMG/flags/chile.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'CostaRica'){?>
                            <img src="IMG/flags/cr.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Escocia'){?>
                            <img src="IMG/flags/escocia.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'España'){?>
                            <img src="IMG/flags/españa.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Francia'){?>
                            <img src="IMG/flags/fra.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Irlanda'){?>
                            <img src="IMG/flags/irlanda.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Italia'){?>
                            <img src="IMG/flags/italia.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Japon'){?>
                            <img src="IMG/flags/japon.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Mexico'){?>
                            <img src="IMG/flags/mexico.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Portugal'){?>
                            <img src="IMG/flags/port.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Sudafrica'){?>
                            <img src="IMG/flags/sudafrica.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'USA'){?>
                            <img src="IMG/flags/usa.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Polonia'){?>
                            <img src="IMG/flags/poland.jpg" width="32" height="18" style="padding-left: 5px;">
                        <?php }else if($prod->pais == 'Republica Checa'){?>
                            <img src="IMG/flags/czech.png" width="32" height="18" style="padding-left: 5px;">
                        <?php }?>
                        <br>
                        <label>Tipo: <?php echo $prod->tipo_prod; ?></label><br>
                        <label>Precio: $<?php echo $prod->price; ?></label><br>
                        <select class="custom-select" id="validationCustom04" name="cant" required>
                            <option selected disabled value="">Cantidad</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select> 
                        
                    </div>
                    <div class="col-md-7">
                        <label style="text-align: justify;"><?php echo $prod->description; ?></label>
                        <input type="hidden" value="<?php echo $prod->name_prod; ?>" name="name_prod">
                        <input type="hidden" value="<?php echo $prod->price; ?>" name="price">
                        <input type="hidden" value="<?php echo $prod->image; ?>" name="image">
                        <input type="hidden" value="<?php echo $prod->type; ?>" name="type">
                        <input type="hidden" value="<?php echo $prod->get_element('id_prod'); ?>" name="id_prod">
                        <button type="submit" class="btn btn-warning btn-sm">Add to Cart</button> 
                    </div>
                </div>
                <div class="col-md-2"></div>
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
