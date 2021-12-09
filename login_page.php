   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_admin.css">
        <title>login_page</title>
    </head>
    <body>
    <div class="login-page">
    <div class="form">
        <form action="verification.php" method="POST" class="login" name="login">
            
        <input name="username" type="text" placeholder="username"/>
        <input name="pass" type="password" placeholder="password"/>
        <button type="submit">login</button>
        <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </form>
    </div>
    </div>
</body>
</html>
