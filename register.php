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
                                    <input id="icon_prefix" type="text" id="rg_username" class="validate">
                                    <label for="icon_prefix">Usuario</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" id="rg_email" class="validate">
                                    <label for="icon_prefix">Email</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="icon_prefix" type="password" id="rg_pass1" class="validate">
                                    <label for="icon_prefix">Contraseña</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="icon_prefix" type="password" id="rg_pass2" class="validate">
                                    <label for="icon_prefix">Verificar Contraseña</label>
                                </div>

                                <div class="col-s12">
                                    <div class="center">
                                        <input type="submit" class="btn btn-blue p2" value="Registrar">
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