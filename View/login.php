<div class="login">
    <div class="container">
        <form style="max-width: 400px;" method="POST" action="?c=login" class="needs-validation" novalidate>
            <?php
                if(isset($message)){
                    echo $message;
                }
            ?>
            <div class="logintitulo" style="text-align: center; padding: 20px;">
                <h2><i>Login</i></h2>
            </div>
            <div class="form-groups col-md-12">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <div class="invalid-feedback">
                        Ingrese un Username!
                    </div>
                </div>
            </div>
            <div class="form-groups">
            <div class="col-md-12 mb-3">
                <input type="password" class="form-control" name="pwd" placeholder="Password" id="exampleDropdownFormPassword2" required>
                <div class="invalid-feedback">
                    Debe ingresar la clave!
                </div>
            </div>
            </div>
            <div class="col-md-12 mb-3" style="padding-left: 165px; padding-right: 150px; padding-top: 15px;">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
            <div class="col-md-12 mb-3" style="text-align:center; padding-left:15px;">
                <a href="?c=crearcuenta" style="color: white"><small>No tiene cuenta? Crear Cuenta</small></a>
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