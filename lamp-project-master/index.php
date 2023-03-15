<?php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBI Database - Accueil</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style personnalisé -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <strong>FBI DATABASE</strong>
                </a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Accueil</a></li>
                    <li><a href="about.php">À propos</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="hq.php">Quartier Général</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> S inscrire</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <div class="container" style="margin-top: 100px;">
        <div class="jumbotron text-center" style="background-color: rgba(0, 0, 0, 0.8); border: 2px solid #ffcc00;">
            <h1 style="color: #ffcc00; font-size: 48px; font-weight: bold;">
                <span class="glyphicon glyphicon-certificate"></span>
                FBI CRIMINAL DATABASE
            </h1>
            <p style="color: #ffffff; font-size: 20px; margin-top: 20px;">
                Système de gestion des enregistrements criminels
            </p>
            <p style="color: #cccccc; margin-top: 15px;">
                Accédez à la base de données nationale des criminels et gérez les dossiers en toute sécurité
            </p>
            <hr style="border-color: #ffcc00;">
            <p>
                <a class="btn btn-primary btn-lg" href="login.php" role="button">
                    <span class="glyphicon glyphicon-log-in"></span> 
                    Connexion Agent
                </a>
                <a class="btn btn-warning btn-lg" href="signup.php" role="button">
                    <span class="glyphicon glyphicon-user"></span> 
                    Créer un compte
                </a>
            </p>
        </div>
    </div>
    
    <!-- Features Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3><span class="glyphicon glyphicon-search"></span> Recherche</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p>Recherchez des criminels dans la base de données nationale par nom, zone ou type de crime.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3><span class="glyphicon glyphicon-lock"></span> Sécurité</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p>Accès sécurisé réservé aux agents FBI autorisés avec authentification à deux niveaux.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3><span class="glyphicon glyphicon-file"></span> Gestion</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p>Les administrateurs peuvent ajouter, modifier et supprimer des enregistrements criminels.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Statistics Section -->
    <div class="container" style="margin-top: 30px; margin-bottom: 100px;">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h3><span class="glyphicon glyphicon-stats"></span> Statistiques du Système</h3>
            </div>
            <div class="panel-body">
                <div class="row text-center">
                    <div class="col-md-4">
                        <h2 style="color: #ffcc00;">10,000+</h2>
                        <p>Enregistrements criminels</p>
                    </div>
                    <div class="col-md-4">
                        <h2 style="color: #ffcc00;">500+</h2>
                        <p>Agents actifs</p>
                    </div>
                    <div class="col-md-4">
                        <h2 style="color: #ffcc00;">50+</h2>
                        <p>États couverts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 FBI Criminal Database. Tous droits réservés. | 
                <a href="about.php" style="color: #ffcc00;">À propos</a> | 
                <a href="contact.php" style="color: #ffcc00;">Contact</a>
            </p>
        </div>
    </footer>
    
    <!-- jQuery et Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js">< /script>
</body>
</html>