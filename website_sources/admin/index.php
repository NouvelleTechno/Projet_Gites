<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Chatel -->
    <link rel="icon" href="../assets/img/Logo/chatel_logo.png">
    <!-- Titre de la page -->
    <title>Connexion Administrateur</title>
    <!-- Link vers les styles -->
    <!-- Style Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mon style -->
    <link rel="stylesheet" href="../assets/css/style_form_connexion_admin.css">
</head>
<body class="text-center">
    <!-- Formulaire de Connexion Administrateur -->
    <form action="#" method="POST" class="form-signin form_co">
        <img src="../assets/img/Logo/chatel_logo.png" alt="Logo Chatel">
            <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Adresse Email" required autofocus><br>
            <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de Passe" required><br>
            <button class="btn myBtn" type="submit">Connexion</button>
    </form>
    <!-- Fin du Formulaire de Connexion Administrateur -->
</body>
</html>