$(document).ready(function () {
    
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        // alert(data);
        var data = $('#contact-form').serialize();
        $.ajax({
            type: 'POST',
            url: 'traitement/t_rencontre.php',
            data: data,
            dataType: 'json',
            success: function(json) {
                 
                if(json.isSuccess) 
                {
                    $('#success').append("<h5>Votre demande a bien été enrgistré. un de nos architercte vous contactera </h5>");
                    $('#success')[0].reset();
                }
                else
                {
                    $('#name + .comments').html(json.nameError);
                    $('#lastname + .comments').html(json.lastnameError);
                    $('#loc + .comments').html(json.localiteError);
                    $('#sup + .comments').html(json.superficieError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#email + .comments').html(json.emailError);
                }                
            }
        });
    });

    $('#f_email').submit(function(e) {
        e.preventDefault();
        $('.commit').empty();
        var data = $('f_email').serialize();
        $.ajax({
            type: 'POST',
            url: 'traitement/t_email.php',
            data: data,
            dataType: 'json',
            success: function(json) {
                if(json.isSuccess) 
                {
                    $('#success').append("<h5> vous vous etes abonne a la newletter, merci :) </h5>");
                    $('#success')[0].reset();
                }
                else
                {
                    $('.commit').html(json.emailError);
                }                
            }
        });
    });

})