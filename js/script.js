var validarLogin = (() => {
    let usuario = $("#user");
    let senha = $("#pass");

    if (usuario.val() == "") {
        alertar("Informe o nome de usuário!");
    } else if (senha.val() == "") {
        alertar("Informe a senha de acesso!");
    } else {
        $.ajax({
            url: "api/login.php",
            method: "post",
            data: { user: CryptoJS.MD5(usuario.val()).toString(), pass: CryptoJS.MD5(senha.val()).toString() },
            success: function (result) {
                if ($.parseJSON(result).login == true) {
                    window.location.href = "home.php";
                } else {
                    alertar("Credenciais incorretas!");
                    $("#pass").val("");
                    $("#user").val("").focus();
                }
            }
        }
        );
    }
});

$("#login_btn").click(function () { validarLogin(); });

var alertar = ((msg) =>{
    Materialize.toast(msg, 4000)
})