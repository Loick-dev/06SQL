<?php

    require_once('includes/bdd.inc.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('./templates/head.inc.html');
    ?>
</head>
<body>
    <header>
        <?php
            require('./templates/header.html');
        ?>
    </header>
    <main class="container-fluid">
    <div class="row">
        <div class="col-3">
            <?php
                require('./templates/nav.html');
            ?>
        </div>
        <div class="col-9">
        <?php   
            if(isset($_GET['read'])){
                include('./includes/read.inc.php');
            }
            elseif(isset($_GET['create'])){
                include('./includes/create.inc.php');
            }
            else{
                echo '<h2 class=p-5>¡Bienvenido!</h2>';
            }

        ?>
        </div>
    </div>
    </main>
    <footer>
        <?php
            require('./templates/footer.html');
        ?>
    </footer>

</body>
</html>