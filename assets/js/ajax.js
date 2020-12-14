/*=============================================
=           VALIDANDO FORMULARIO              =
=============================================*/

function register()
{
    var rg_username = document.querySelector('#rg_username').value;
    var rg_email = document.querySelector('#rg_email').value;
    var rg_pass1 = document.querySelector('#rg_pass1').value;
    var rg_pass2 = document.querySelector('#rg_pass2').value;

    email_expresion = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    expresion = /^[a-zA-Z0-9]+$/;

    if(rg_username == '') {
        M.toast({html: 'El campo usuario no puede estar vacío', classes: 'rounded'});
    }else if(!expresion.exec(rg_username)){
        M.toast({html: 'En el campo usuario, No se permiten carácteres especiales ni espacios', classes: 'rounded'});
    }

    if(rg_email == '') {
        M.toast({html: 'El campo email no puede estar vacío', classes: 'rounded'});
    }else if(!email_expresion.exec(rg_email)){
        M.toast({html: 'Por favor introduce un email válido', classes: 'rounded'});
    }

    if(rg_pass1 == '') {
        M.toast({html: 'La contraseña no puede estar vacío', classes: 'rounded'});
    }else if(!expresion.exec(rg_pass1)){
        M.toast({html: 'En el campo contraseña, No se permiten carácteres especiales ni espacios', classes: 'rounded'});
    }

    if(rg_pass2 == '') {
        M.toast({html: 'Verificar contraseña no puede estar vacío', classes: 'rounded'});
    }else if(!expresion.exec(rg_pass2)){
        M.toast({html: 'En el campo verificar contraseña, No se permiten carácteres especiales ni espacios', classes: 'rounded'});
    }

    if(rg_pass1 !== rg_pass2){
        M.toast({html: 'Las contraseñas no coinciden', classes: 'rounded'});
    }

    var ajax = new XMLHttpRequest();
    var URL = 'ajax/user.ajax.php';
    var method = 'POST';
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            var response = ajax.responseText 
        }
    };
    ajax.open(method, URL, true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("name=" + rg_username + " & email=" + rg_email + " & password=" + rg_pass1);
}