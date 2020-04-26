<div class="intro">
        <h1 class="typing" style="font-size: 35px;"></h1>
</div>
<script src="app.js"></script>

<div id="QuienesSomos">
    <div class="InfoTitul" style="text-align: center; padding:15px;padding-top:70px;">
        <h2 class="text-uppercase font-weight-bold">Quienes Somos</h2>
    </div>
    <div class="QSinfos" style="padding: 15px; text-align: justify;">
        <div class="form-row" style="padding: 25px; text-align: justify; padding-left:135px;">
            <div class="col-md-7" style="padding-top:60px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                    Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. 
                    Veniam sint duis incididunt do esse magna mollit excepteur laborum qui.  </p>
            </div>
            <div class="col-md-2">
                <img src="IMG/beerwine.jpg" width="410" height="250" style="padding-left: 25px;">
            </div>
        </div>
        <div class="form-row" style="padding: 15px; text-align: justify;padding-left:125px;">
            <div class="col-md-2">
                <img src="IMG/trigo.webp" width="320" height="260">
            </div>
            <div class="col-md-8" style="padding-top: 55px; padding-left:140px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                    Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. 
                    Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. </p>
            </div>
        </div>
    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

    <div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/wine10.jpg"></div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div id="catalogo">
        <div class="InfoTitulo">
            <h2 class="text-uppercase font-weight-bold">Catalogo</h2>
        </div>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-12">
                <div class="form-row" style="padding: 20px; padding-left:100px;">
                    <div class="beer" style="padding:5px;">
                        <div class="card" style="width: 18rem;">
                            <img src="IMG/beer2.jpg" class="card-img" alt="Beer" >
                            <div class="card-body bg-light" style="text-align: center;">
                                <h5 class="card-text">Beer</h5>
                                <a href="?c=beer">Ver catalogo</a>
                            </div>
                        </div>
                    </div>
                    <div class="wine" style="padding:5px;">
                        <div class="card" style="width: 18rem;">
                            <img src="IMG/wine2.jpg" class="card-img" alt="Wine">
                            <div class="card-body bg-light" style="text-align: center;">
                                <h5 class="card-text">Wine</h5>
                                <a href="?c=wine" >Ver carta</a>
                            </div>
                        </div>
                    </div>
                    <div class="drink" style="padding:5px;">
                        <div class="card" style="width: 18rem;">
                            <img src="IMG/drink.jpg" class="card-img" alt="Drink">
                            <div class="card-body bg-light" style="text-align: center;">
                                <h5 class="card-text">Whisky</h5>
                                <a href="?c=drinks">Ver catalogo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/beer4.jpeg"></div>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div id="Contactenos">
        <div class="InfoTitulo">
            <h2 class="text-uppercase font-weight-bold">Contáctenos</h2>
        </div>
        <div class="container">
            <form method="POST" action="?c=correo">
                <div id="Formulario" style="padding-left: 160px;">
                    <div class="form-groups">
                        <div class="form-row">
                            <div class="col-md-5">
                                <label for="Input-First-Name"></label>
                                <input type="text" class="form-control" id="Input-First-Name" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="col-md-5">
                                <label for="Input-Last-Name"></label>
                                <input type="text" class="form-control" id="Input-Last-Name" name="lastname" placeholder="Apellidos" required>
                            </div>
                        </div>   
                    <div class="form-row">
                        <div class="col-md-5">
                            <label for="exampleFormControlInput1"></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="correo" placeholder="Correo" required>
                        </div>
                        <div class="col-md-5">
                            <label for="subject"></label>
                            <input type="text" class="form-control" id="Input-Subject" name="subject" placeholder="Asunto" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10">
                            <label for="exampleFormControlTextarea1"></label></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                    </div>
                    <div class="col-auto" style="padding: 25px;">
                    <button type="submit" class="btn btn-primary">Enviar</button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/wine11.jpg"></div>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div id="Soporte">
    <div class="InfoTitulo">
        <h2 class="text-uppercase font-weight-bold">Soporte</h2>
    </div>
    <div class="container">
        <form method="POST" action="?c=correo">
            <div id="Formulario" style="padding-left: 160px;">
                <div class="form-groups">
                    <div class="form-row">
                        <div class="col-md-5">
                            <label for="Input-First-Name"></label>
                            <input type="text" class="form-control" id="Input-First-Name" name="name" placeholder="Nombre" required>
                        </div>
                        <div class="col-md-5">
                            <label for="Input-Last-Name"></label>
                            <input type="text" class="form-control" id="Input-Last-Name" name="lastname" placeholder="Apellidos" required>
                        </div>
                    </div>   
                <div class="form-row">
                    <div class="col-md-5">
                        <label for="exampleFormControlInput1"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="correo" placeholder="Correo" required>
                    </div>
                    <div class="col-md-5">
                        <label for="subject"></label>
                        <input type="text" class="form-control" id="Input-Subject" name="subject" placeholder="Asunto" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-10">
                        <label for="exampleFormControlTextarea1"></label></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" placeholder="Mensaje" required></textarea>
                    </div>
                </div>
                <div class="col-auto" style="padding: 25px;">
                <button type="submit" class="btn btn-primary">Enviar</button> 
                </div>
            </div>
        </form>
    </div>
</div>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="intro" data-parallax="scroll" data-z-index="1" data-image-src="IMG/beer6.jpeg"></div>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->