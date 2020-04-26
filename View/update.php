<div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/beer5.jpg"></div>
    <label style="padding-left:420px; font-size:26px; color:red;"><?php if(isset($message)){ echo $message; } ?></label>
    <div class="InfoTitulo">
        <h2 class="text-uppercase font-weight-bold">Actualizar Producto</h2>
    </div>

    <form action="?c=updateprod" method="POST" style=" padding:10px;" class="needs-validation" enctype="multipart/form-data" novalidate>
        <div class="craerblog">
            <div class="insert" style="padding: 20px;">
            <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <input type="hidden" value="<?php echo $_GET['id_prod'];?>" name="id_prod">
                        <input type="text" class="form-control" name="name_prod" placeholder="Nombre del Producto" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="text" class="form-control" name="price" placeholder="Precio del producto" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <select class="custom-select" id="validationCustom04" name="type" required>
                            <option selected disabled value="">Type of Product</option>
                            <option value="1">Beer</option>
                            <option value="2">Wine</option>
                            <option value="3">Drinks</option>
                        </select>   
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <select class="custom-select" id="validationCustom04" name="pais" required>
                            <option selected disabled value="">Pais</option>
                            <option value="Alemania">Alemania</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Australia">Australia</option>
                            <option value="Belgica">Belgica</option>
                            <option value="Canada">Canada</option>
                            <option value="Chile">Chile</option>
                            <option value="CostaRica">Costa Rica</option>
                            <option value="Escocia">Escocia</option>
                            <option value="España">España</option>
                            <option value="Francia">Francia</option>
                            <option value="Irlanda">Irlanda</option>
                            <option value="Italia">Italia</option>
                            <option value="Japon">Japon</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Portugal">Sudafrica</option>
                            <option value="USA">USA</option>
                        </select>  
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="tipo_prod" placeholder="Tipo de Producto" required>
                    </div>
                </div>
                <div class="col-md-14 mb-3">
                    <textarea class="form-control" name="description" placeholder="Product Description" rows="5" required></textarea>
                </div>
                <div class="form-row">
                    <label for="title">Attach Image</label>
                    <input class="form-control-file" name="image" type="file"/>
                </div>

                <div class="form-row">
                    <div class="col-sm-8" style="padding: 10px;">
                        <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Submit</button>
                    </div>
                </div>
            </div>    
        </div>
    </form>