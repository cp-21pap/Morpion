$(function (){

    $.validator.addMethod("PWCHECK",
        function (value,element) {
        if(/^(?=.*?[A-Z]{1,})(?=(.*[a-z]){1,})(?=(.*[0-9]){1,})(?=(.*[$@$!%*?&]){1,}).{8,}$/.test(value)){
            return true;
        }else {
            return false;
        };
        }
     );

    $("#inscription_form").validate(
        {
            //Nom
            rules:{
                nom_per: {
                    required: true,
                    minlength: 2
                },
                prenom_per: {
                    required: true,
                    minlength: 2
                },
                email_per: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5,
                    PWCHECK: true
                },
                password_conf: {
                    required: true,
                    equalTo: "#password",
                    PWCHECK: true
                }
            },

            messages:{
                nom_per: {
                    required: "Veuillez saisir votre nom",
                    minlength: "Votre nom doit être composé de 2 caractères au minimum"
                },
                prenom_per: {
                    required: "Veuillez saisir votre prénom",
                    minlength: "Votre prénom doit être composé de 2 caractères au minimum"
                },
                email_per: {
                    required: "Veuillez saisir votre email",
                    email: "Votre adresse e-mail doit avoir le format suivant : name@domain.com"
                },
                password: {
                    required: "Veuillez saisir votre mot de passe",
                    minlength: "Votre mot de passe est trop court",
                    PWCHECK: "Le mot de passe doit comporter au minimum 8 caratères, dont une minuscule, une majuscule, un chifre et un caratère special."
                },
                password_conf: {
                    required: "Veuillez saisir une deuxième fois votre mot de passe",
                    equalTo: "Les mots de passe ne sont pas indentiques",
                    PWCHECK: "Le mot de passe doit comporter au minimum 8 caratères, dont une minuscule, une majuscule, un chifre et un caratère special."
                }

            },
        }
    );

});