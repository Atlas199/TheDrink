<div class="crearcuenta">
    <div class="container" style="padding: 15px;">
        <form action="?c=crearcuenta" method="POST" style="max-width: 500px;" class="needs-validation" enctype="multipart/form-data" novalidate>
            <div class="titulologin" style="padding: 15px; text-align: center;" >
                <h4 class="text-uppercase font-weight-bold"><i>Crear Cuenta</i></h4>
            </div>
            <div class="form-row">
                <div class="form-groups col-md-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inputtextuser" name="username" placeholder="Username"
                            value="<?php echo (isset($usuario))? $usuario->get_attribute("username") : ""; ?>" required>
                        <div class="invalid-feedback">
                            Ingrese un Username!
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row" style="padding-bottom: 10px;">
                <div class="form-groups col-md-6">
                    <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Nombre"
                        value="<?php echo (isset($usuario))? $usuario->get_attribute("name") : ""; ?>" required>
                    <div class="invalid-feedback">
                        Ingrese su Nombre completo!
                    </div>
                </div>
                <div class="form-groups col-md-6">
                    <input type="text" class="form-control" id="inputEmail4" name="last_name" placeholder="Apellidos"
                        value="<?php echo (isset($usuario))? $usuario->get_attribute("last_name") : ""; ?>" required>
                    <div class="invalid-feedback">
                        Ingrese su Nombre completo!
                    </div>
                </div>
            </div>
            <div class="form-row">
            <div class="form-groups col-md-4">
                    <input type="text" class="form-control" id="inputAddress" name="age" placeholder="Edad"
                        value="<?php echo (isset($usuario))? $usuario->get_attribute("age") : ""; ?>" required>
                    <div class="invalid-feedback">
                        Debe ingresar su edad!
                    </div>
                </div>
                <div class="form-groups col-md-8">
                    <input type="text" class="form-control" id="inputAddress" name="email" placeholder="Correo"
                        value="<?php echo (isset($usuario))? $usuario->get_attribute("email") : ""; ?>" required>
                    <div class="invalid-feedback">
                        Debe ingresar un correo!
                    </div>
                </div>
            </div>
            <div class="col-md-14 mb-3" style="padding-top:10px;">
                <select class="custom-select" id="validationCustom04" name="rol_user" required>
                    <option selected disabled value="0">Tipo de Usuario</option>
                    <option value="1">Administrador</option>
                    <option value="0">Normal</option>
                </select>
                <div class="invalid-feedback">
                    Escoja un tipo de usuario!
                </div>
            </div>
            <div class="col-md-14 mb-3" style="padding-bottom:10px;" >
                <input type="password" class="form-control" id="inputPassword4" name="pwd" placeholder="Password"
                    value="<?php echo (isset($usuario))? $usuario->get_attribute("pwd") : ""; ?>" required>
                <div class="invalid-feedback">
                    Debe ingresar una clave!
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Acceder a los términos de privacidad y condiciones
                    </label>
                    <div class="invalid-feedback">
                        Debe accedera antes de continuar!
                    </div>
                </div>
                <a href="https://docs.google.com/document/d/1aSJUJSh-3E1OJVNo5qmC9-us9Sn7Vg_HbtWjJKqW3dE/edit" style="color: lightgray">Terms and Conditions</a>
            </div>
            <div class="botonlogin" style="padding-left:160px;">
                <button type="submit" class="btn btn-primary">Crear Cuenta</button>
            </div>
            <div class="col-md-12 mb-3" style="padding-left: 125px; padding-top: 10px;">
                <a href="?c=login" style="color: lightgray"><small>Ya tiene una cuenta? Inicie Sesion</small></a>
            </div>
        </form>
    </div>
</div>



<script>
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
</script>