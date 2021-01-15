<?php 
    $recup = $bdd->prepare('SELECT * FROM apprenants');
    $recup->execute();
  //  var_dump($recup);

?>

<h2>Liste</h2>

<table class="table">
    <thead>
        <tr>
            <th>N°</th>
            <th>Prénom</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($donnees = $recup->fetch()){

                ?>
        <tr>
            <td><?= $donnees['id']?></td>
            <td><?= $donnees['prenom']?></td>
            <td><?= $donnees['codepostal']?></td>
            <td><?= $donnees['ville']?></td>
            <td>
                <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                <a href="./includes/traitement.php?delete" class="btn btn-sm btn-danger">Supprimer</a>
            </td>
        </tr>
        
        
        <?php
            }
        ?>
    </tbody>
</table>