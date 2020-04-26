<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="?c=home" class="navbar-brand text-uppercase font-weight-bold">The Drink</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="?c=home#QuienesSomos" class="nav-link text-uppercase font-weight-bold">Quienes Somos<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="?c=home#catalogo" class="nav-link text-uppercase font-weight-bold">Catalogo</a></li>
                    <li class="nav-item"><a href="?c=home#Contactenos" class="nav-link text-uppercase font-weight-bold">Contactenos</a></li>
                    <li class="nav-item"><a href="?c=home#Soporte" class="nav-link text-uppercase font-weight-bold">Soporte</a></li>
                    <li class="nav-item"><a href="?c=perfil" class="nav-link text-uppercase font-weight-bold">Perfil</a></li>
                    <li class="nav-item"><a href="?c=login" class="nav-link text-uppercase font-weight-bold">Login</a></li>
                    <li class="nav-item"><a href="?c=cart" class="nav-link text-uppercase font-weight-bold">Compras</a></li>
                </ul>
            </div>
        </div>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
</header>

<script>
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
            $('.burger').addClass('active');
        } else {
            $('.navbar').removeClass('active');
            $('.burger').removeClass('active');
        }
    });
});
</script>