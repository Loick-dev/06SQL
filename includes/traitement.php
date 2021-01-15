<?php
    require_once('bdd.inc.php');

    // $req = $bdd->prepare('INSERT INTO apprenants (prenom, codepostal, ville) VALUES (?, ?, ?)');
    // $req->execute(array($_POST['prenom'], $_POST['codepostal'], $_POST['ville']));
    $req = $bdd->prepare('INSERT INTO apprenants (prenom, codepostal, ville) VALUES (?, ?, ?)');
    $req->execute(array($_POST['prenom'], $_POST['codepostal'], $_POST['ville']));
    header('Location: ../index.php?read');


    // echo '<prep>';
    // var_dump($bdd);
    // var_dump($req);
    // echo '</prep>';
?>