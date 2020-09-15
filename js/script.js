$(function () {
    
    $('#contact-form').submit(function(e) { // Soumission des données//
        e.preventDefault();
        $('.comments').empty(); // On vide les inputs //
        var postdata = $('#contact-form').serialize();
        
        $.ajax({ // On lance une requête qui envoie les données remplies dans les inputs vers le fichier php pour une vérification//
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                 
                if(json.isSuccess){ // Si la vérif est un succès on envoie le message de remerciement et on réinitialise les inputs//

                    $('#contact-form').append("<p class='thank-you'>Merci de m'avoir contacté, je vous répondrai le plus rapidement possible.</p>");
                    $('#contact-form')[0].reset();
                    
                }else{ // Sinon on lance les commentaires décrits sur contact.php //

                    $('#firstname + .comments').html(json.firstnameError); 
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#message + .comments').html(json.messageError);
                }                
            }
        });
    });

})