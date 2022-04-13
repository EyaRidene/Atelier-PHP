<?php
$file = $_FILES['file'];
if (isset($file)) {
    $_FILES['file']['cin']=uniqid();
}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adr=$_POST['adresse'];
$nb=$_POST['nbre'];
$type=$_POST['type'];
$ch="";
if (isset($_POST['mayonaise']))
{
    $ch=$ch." mayonaise ";
}
if (isset($_POST['harissa']))
{
    $ch=$ch." harissa ";
}
if (isset($_POST['salade']))
{
    $ch=$ch." salade ";
}

if ($nb>10)
{
    $prix= 4*$nb*0.9;
}
else{ $prix= 4*$nb; }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
    <title>Commande</title>
</head>
<body>
<div class="container pt-5 ">
<h1>Recap sur commande </h1>
<table class="table ">
    <tr>
        <th>Nom client</th>
        <th> <?= $nom ?> </th>
    </tr>
    <tr>
        <th>Prénom client</th>
        <th> <?= $prenom ?> </th>
    </tr>
    <tr>
        <th>Adresse client</th>
        <th> <?= $adr ?></th>
    </tr>
    <tr>
        <th>Nombre de sandwitch commandés</th>
        <th><?= $nb ?></th>
    </tr>
    <tr>
        <th>Type de sandwitch</th>
        <th><?= $type ?></th>
    </tr>
    <tr>
        <th>Le prix Total</th>
        <th><?= "$prix dt" ?></th>
    </tr>
    <tr>
        <th>Les ingredients:</th>
        <th><?= $ch ?></th>
    </tr>
</table>
</div>
</body>
</html>
