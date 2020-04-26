<div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/beer.jpg"></div>

<div class="InfoTitulo">
    <h2 class="text-uppercase font-weight-bold">Catalogo de Cervezas</h2>
</div>
<div class="filter">
    <form action="?c=filter" method="POST">
        <div class="col-md-3" style="padding: 5px;">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><img src="IMG/filtro.png" alt="Filtro" width="20" height="25"></div>
                </div>
                <input type="text" class="form-control" name="name_product" placeholder="Nombre de Producto">
                <div class="col-md-2">
                    <div class="input-group-prepend" style="padding-left:10px;">
                        <button type="submit" class="btn btn-primary">Buscar</button>  
                    </div>
                </div>
            </div>      
        </div>
    </form>
</div>

<label style="color: red; padding-left: 420px;"><?php if(isset($message)){ echo $message; } ?></label>

<?php if(count($product)){ ?>
    <?php foreach($product as $prod){?>
        <?php if($prod->type == 1){?>
            <div class="col-md-1"></div>
            <div class="form-row col-md-12" style="padding: 25px;">
                <div class="col-md-3">
                    <img src="<?php echo $prod->image; ?>" alt="Beer" width="220" height="180">
                </div>
                <div class="col-md-8">
                    <h5><i><?php echo $prod->name_product; ?></i></h5>
                    <label style="text-align: justify;"><?php echo $prod->description; ?></label>
                    <label>$<?php echo $prod->price; ?> c/u</label>
                    <div class="col-md-3">
                        <select class="custom-select" id="validationCustom04" name="quantity" required>
                            <option selected disabled value="">Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                            <option value="3">7</option>
                            <option value="3">8</option>
                            <option value="3">9</option>
                            <option value="3">10</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        <?php } ?>
    <?php } ?>
<?php } ?>
