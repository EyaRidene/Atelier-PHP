<?php
session_start();

if(!isset($_SESSION['note'])){
    $_SESSION['thereIsNote'] = 0;
    $_SESSION['note'] = array();
    $_SESSION['Title'] = array();
}
if(isset($_POST['note'])){
    $_SESSION['thereIsNote'] = 1;
    $nb = count($_SESSION['note']);
    $title = $_POST['Title'];
    $note = $_POST['note'];
    $_SESSION['note'][$nb] = $note;
    $_SESSION['Title'][$nb] = $title;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
    <title>Notes</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <p style="font-size: 30px;"> KEEP YOUR NOTES </p>
</nav>

<div class="container active-form my-3">
    <form action="" method="post">
    <h1>Take your Notes here</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Add a Note </h5>
            <br>
            <div class="form-group">
                <label for="addTxt">Note</label>
                <textarea class="form-control" id="addTxt" rows="3" name="note" placeholder="Ajouter une note"></textarea>
            </div>
            <br>
            <div class=" form-group ">
                <label for="tit">Titre</label>
                <input name="Titre" type="text" class="form-control" id="tit" placeholder="Titre">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="addBtn" style="background-color:green">Add Note</button>
        </div>
    </form>
    </div>

    <hr>
    <h1>Your Notes</h1>
    <hr>

    <div id="notes" class="row container-fluid">
        <?php
        if ($_SESSION['thereIsNote']){
           for ($i=0;$i<count($_SESSION['note']);$i++){
        ?>
         <div class="container border-2">
             <h3><?= $_SESSION['note'][$i] ?></h3>
             <p><?= $_SESSION['note'][$i] ?> </p>
         </div>
        <?php
           }
        }
        ?>
    </div>
</div>

</body>

</html>
