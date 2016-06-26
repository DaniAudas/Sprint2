/**
 * Created by Dani on 09/06/2016.
 */
$(function () {
    $('#login').submit(function () {
        var p = document.createElement("input");
        $('#login').append(p);
        p.name = "p";
        p.type = "hidden";
        p.value = hex_sha512($('#pswdUser').val());
        $('#pswdUser').val('');
        $.ajax({
            type: "POST",
            url: root + "validation.php",
            data: $("#login").serialize(),
            beforeSend: function () {
                $('#response').html('<div class="circle"></div><div class="circle1"></div>');
            },
            success: function (response) {
                var obj = jQuery.parseJSON(response);
                if (obj.authenticated == 'False')
                    $('#response').html("<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>x</span></button> Usuario o contraseña incorrecta</div>");
                else {
                    setTimeout(function () {
                        window.location.href = "./dashboard.php";
                    }, (500));
                    //alert(response);
                }
                //alert(response);
            }
        });
        return false;

        //return false;
    });
});