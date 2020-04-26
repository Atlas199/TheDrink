
<?php if($user->rol_user == 1){ ?>
    <div class="container">
        <div class="col-md-1"></div>
        <div class="col-md-12" style="padding-left: 85px;">
        <?php $nr = 0; ?>
            <?php if(count($historial)){?>
            <table class="content-table">
                <thead>
                    <tr class="text-uppercase text-weight-bold" >
                        <th>Nr.</th>
                        <th>Fecha</th>
                        <th style="padding: 10px;"><i>Cantidad de Cervezas</i></th>
                        <th style="padding: 10px;"><i>Cantidad de Vinos</i></th>
                        <th style="padding: 10px;"><i>Cantidad de Licores</i></th>
                        <th style="padding: 10px;"><i>Monto total pagado</i></th>
                        <th style="padding: 10px;"><i>Usuario</i></th>
                        <th style="padding: 10px;"><i>Codigo de Usuario</i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($historial as $hstl){?>
                            <?php 
                                $NR = $nr + 1;
                                $nr = $NR;
                            ?>
                        <tr>
                            <td><?php echo $nr; ?></td>
                            <td><?php echo $hstl->date; ?> <?php echo $hstl->time; ?></td>
                            <td><?php echo $hstl->cantBeer; ?></td>
                            <td><?php echo $hstl->cantWine; ?></td>
                            <td><?php echo $hstl->cantDrinks; ?></td>
                            <td>$<?php echo $hstl->total; ?></td>
                            <td><?php echo $hstl->name; ?> <?php echo $hstl->last_name; ?></td>
                            <td><?php echo $hstl->get_element('id_user'); ?></td>
                        </t>
                    <?php } ?>
                </tbody>
            </table>
        <?php }else{ ?>
            <b>No ha realizado compras</b>
        <?php } ?>
        </div>
        <div class="col-md-1"></div>
    </div>
<?php }else{ ?>
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-11" style="padding-left: 180px;">
        <?php $nr = 0; ?>
            <?php if(count($historial)){?>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Fecha</th>
                        <th style="padding: 15px;"><i>Cantidad de Cervezas</i></th>
                        <th style="padding: 15px;"><i>Cantidad de Vinos</i></th>
                        <th style="padding: 15px;"><i>Cantidad de Licores</i></th>
                        <th style="padding: 15px;"><i>Monto total pagado</i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($historial as $hstl){?>
                        <?php if($user->get_element('id_user') == $hstl->get_element('id_user')){?>
                            <?php 
                                $NR = $nr + 1;
                                $nr = $NR;
                            ?>
                        <tr>
                            <td><?php echo $nr; ?></td>
                            <td><?php echo $hstl->date; ?> <?php echo $hstl->time; ?></td>
                            <td><?php echo $hstl->cantBeer; ?></td>
                            <td><?php echo $hstl->cantWine; ?></td>
                            <td><?php echo $hstl->cantDrinks; ?></td>
                            <td>$<?php echo $hstl->total; ?></td>
                        </t>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        <?php }else{ ?>
            <b>No ha realizado compras</b>
        <?php } ?>
        </div>
        <div class="col-md-1"></div>
    </div>
<?php } ?>