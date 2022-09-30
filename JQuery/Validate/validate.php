<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <!-- css de bootatrap -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- BootsTrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- JQuery Validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="header">
            <h3>Inscription</h3>
        </div>
    </div>


    <!--DIV Incriptipon au portail-->
    <div class="panel panel-primary">
        <div class="panel-heading">
            Inscription au portail de jeux
        </div>


        <!--Nom-->
        <div class="panel-body">
            <form id="inscription_form" action="check.php" method="post">
                <div class="form-group row">
                    <label for="nom_per" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nom_per" name="nom_per" placeholder="Votre nom">
                    </div>
                </div>


                <!--Prénom-->
                <div class="form-group row">
                    <label for="prenom_per" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prenom_per" name="prenom_per" placeholder="Votre prénom">
                    </div>
                </div>


                <!--E-mail-->
                <div class="form-group row">
                    <label for="email_per" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email_per" name="email_per" placeholder="Votre adresse e-mail">
                    </div>
                </div>


                <!--Mot de passe-->
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
                    </div>
                </div>


                <!--Password (Confirmation)-->
                <div class="form-group row">
                    <label for="password_conf" class="col-sm-2 col-form-label">
                        Password
                        <br>
                        (Confirmation)
                    </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password_conf" name="password_conf" placeholder="Saisissez votre mot de passe une seconde fois">
                    </div>
                </div>


                <!--Check Box-->
                <div class="form-group row">
                    <div col-sm-10>
                        <input type="checkbox" class="col-sm-1 form-check-input" id="news_letter" name="news_letter">
                        La formation d'informaticien m'intréresse
                    </div>
                    <label for="news_letter" class="col-form-label"></label>
                </div>


                <!--Buttons-->
                <div class="form-group row">
                    <label for="submit_conf" class="col-sm-12 col-form-label"></label>
                    <label for="reset_conf" class="col-sm-12 col-form-label"></label>
                    <div class="col-sm-12">
                        <button type="reset" class="btn btn-warning btn-lg pull-right" id="reset_conf" name="reset_conf">Annuler</button>
                        <button type="submit" class="btn btn-primary btn-lg pull-right" id="submit_conf" name="submit_conf">S'inscrire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="./js/validate.js"></script>
</div>
</body>
</html>