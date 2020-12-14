<?php 
    include_once "paginas/header.php";
?>
<!-- Hero -->
<section class="section-hero">
        <div class="hero">
            <div class="container">
                <div class="container-form">
                    <div class="card">
                        <form onsubmit="return false">

                            <div class="row">

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" id="username" class="validate">
                                    <label for="icon_prefix">Usuario o Email</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="icon_prefix" type="password" id="password" class="validate">
                                    <label for="icon_prefix">Contraseña</label>
                                </div>

                                <div class="col-s12">
                                    <div class="center">
                                        <input type="submit" class="btn btn-blue p2" value="Ingresar">
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php 
    include_once "paginas/footer.php";
?>