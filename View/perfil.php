<div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/beer55.jpg"></div>

    <label style="padding-left:420px; font-size:26px; color:red;"><?php if(isset($message)){ echo $message; } ?></label>
    
    <div class="InfoTitulo">
        <h2 class="text-uppercase font-weight-bold">Perfil</h2>
    </div>

<div class="wrapper">
    <div class="perfil">
        <h2 class="text-uppercase font-weight-bold">Informacion del Usuario</h2></h2>
        <div class="form">
            <div class="cards space">
                <h4><i><b><?php echo $user->name; ?> <?php echo $user->last_name; ?></b></i></h4>
            </div>
            <div class="card-grpp space">
                <div class="card-itemm">
                    <label for="validationTooltip02" class="labell"><i>Username: @<?php echo $user->username; ?></i></label>
                </div>
                <div class="card-itemm">
                    <label for="validationTooltip02" class="labell"><i>Age: <?php echo $user->age; ?></i></label>
                </div>
            </div>
            <div class="card-grpp space">
                <div class="card-itemm">
                    <label for="validationTooltip02" class="labell"><i>Email: <?php echo $user->email; ?></i></label>
                </div>
                <div class="card-itemm">
                    <label for="validationTooltip02" class="labell"><i>User Type: <?php if ($user->rol_user == 1) {
                        echo 'Administrador';
                    }else{
                        echo 'Normal';
                    }?></i></label>
                </div>
            </div>
            <a href="?c=logout" style="padding:25px; padding-left: 270px;">Sign Out</a>
        </div>
    </div>
</div>


</div>


<?php if($user->rol_user == 1){?>
    <hr class="mr-1">
    <div class="InfoTitulo">
        <h3 class="text-uppercase font-weight-bold">Panel Administrativo</h3>
    </div>
    <label style="color: red; padding-left: 400px;"><?php if(isset($message)){ echo $message; } ?></label>
    <div class="col-md-2"></div>
    <div class="col-md-10" style="padding-left: 200px;">
        <div class="SubTitulo">
            <h5 class="text-uppercase font-weight-bold" style="padding:25px;">Agregar Productos</h5>
        </div>
        <form action="?c=addproduct" method="POST" style=" padding:10px;" class="needs-validation" enctype="multipart/form-data" novalidate>
            <div class="form">
                <div class="insert" style="padding: 20px;">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" name="name_prod" placeholder="Nombre del Producto" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" name="price" placeholder="Precio del producto" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <select class="custom-select" id="validationCustom04" name="type" required>
                                <option selected disabled value="">Tipo de Producto</option>
                                <option value="1">Beer</option>
                                <option value="2">Wine</option>
                                <option value="3">Whisky</option>
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
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Escocia">Escocia</option>
                                <option value="España">España</option>
                                <option value="Francia">Francia</option>
                                <option value="Irlanda">Irlanda</option>
                                <option value="Italia">Italia</option>
                                <option value="Japon">Japon</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Polonia">Polonia</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Republica Checa">Republica Checa</option>
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
                        <label for="title">Adjuntar Imagen</label>
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
    </div>
    <div class="col-md-3"></div>
    <hr class="mr-1">
    <div class="col-md-2"></div>
    <div class="col-md-12" style="padding-left: 175px;">
    <div class="SubTitulo">
        <h5 class="text-uppercase font-weight-bold" style="padding:25px;">Editar Productos</h5>
    </div>
    <?php if(count($prod)){?>
        <table class="content-table2">
                <thead>
                    <tr class="text-uppercase text-weight-bold">
                        <th style="padding: 20px; font-size:14px;"><i>Codigo de Producto</i></th>
                        <th style="padding: 20px; font-size:14px;"><i>Nombre Producto</i></th>
                        <th style="padding: 20px; font-size:14px;"><i>Pais</i></th>
                        <th style="padding: 20px; font-size:14px;"><i>Categoria</i></th>
                        <th style="padding: 20px; font-size:14px;"><i>Tipo</i></th>
                        <th style="padding: 20px; font-size:14px;"><i>Precio</i></th>
                        <th style="padding: 20px; font-size:14px;"><i>Actualizar</i></th>
                        <th style="padding: 20px; font-size:14px;"><i>Borrar</i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($prod as $prod_list){?>
                        <tr>
                            <td><?php echo $prod_list->get_element('id_prod'); ?></td>
                            <td><?php echo $prod_list->name_prod; ?></td>
                            <td><?php echo $prod_list->pais; ?></td>
                            <td><?php 
                                if($prod_list->type == 1){
                                    echo 'Cerveza';
                                }elseif($prod_list->type == 2){
                                    echo 'Vino';
                                }elseif($prod_list->type == 3){
                                    echo 'Whisky';
                                }?></td>
                            <td><?php echo $prod_list->tipo_prod; ?></td>
                            <td>$<?php echo $prod_list->price; ?></td>
                            <td><a href="?c=updateprod&id_prod=<?php echo $prod_list->get_element('id_prod');?>">Actualizar Datos</a></td>
                            <td><a href="?c=deleteprod&id_prod=<?php echo $prod_list->get_element('id_prod'); ?>">Borrar Producto</td>
                        </t>
                    <?php } ?>
                </tbody>
            </table>
        <?php }else{ ?>
            <b>No hay productos</b>
        <?php } ?>
    </div>
    <hr class="mr-0">
    <div class="InfoTitulo">
        <h3 class="text-uppercase font-weight-bold">Historial de Compras de todos los usuarios</h3>
    </div>
    <div class="col-md-3"></div> 
    <?php }else{ ?>
        <hr class="mr-0">
    <div class="InfoTitulo">
        <h3 class="text-uppercase font-weight-bold">Historial de Compras</h3>
    </div>

<?php } ?>



    