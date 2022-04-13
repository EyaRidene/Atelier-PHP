<?php
if (isset($_POST['envoyer'])) {
    if (!isset($_COOKIE['dejaVoté'])) {
        $expireTime = time() + 120;
        $value = $_POST['choix'];
        setcookie("dejaVoté",$value, $expireTime);
    }
    else
    {
        $value = $_COOKIE['dejaVoté'];
        echo "<script> alert('Vous avez déja voté $value ')  </script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.css">
    <title>Vote</title>
</head>
<body>
<div class="container" style="width: 50%">
<h1>Formulaire de vote</h1>
<h2>Que pensez-vous du cours PHP ? </h2>
<br>
<form action="" method="post">
    <div>
        <div class="form-check">
            <input type="radio" class="form-check-input" value="bon" id="Check1" name="choix">
            <label class="form-check-label" for="Check1" > BON</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input"  value="moyen" id="Check2" name="choix">
            <label class="form-check-label" for="Check2" >MOYEN</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" value="mauvais" id="Check3" name="choix">
            <label class="form-check-label" for="Check3">MAUVAIS</label>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>
</form>
</div>
</body>
</html>