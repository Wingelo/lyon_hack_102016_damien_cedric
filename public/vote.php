<!--Document -->

/**
* Created by PhpStorm.
* User: damien
* Date: 06/10/16
* Time: 20:11
*/


<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Mon projet de cours</title>
    </head>

    <header>
    </header>
    <body>
        <h1>Mon projet de cours</h1>
        <?php
        if (count($_GET) != 1) {
            echo '<h2 class="red"> Il faut <strong>3</strong> votes. </h2>';
        }
        ?>
        <form name="vote" action="../src/validvote.php" method="post">

                <?php
                include "../src/bdd.php";
                $connection = GetConnection();
                $index = 0;

                $liste = ExecSql($connection, "select id, url_chaussette from chaussettes;");
                while ($user = $liste->fetch_assoc()) { ?>
            <img src="<?php echo $user['url_chaussette']?>" alt="<?php echo $user['id']?>" />
            <input type="checkbox" value="<?php echo $user['id']?>" name="vote<?php echo $user['id']?>" />
                <?php }
            echo '<input type="hidden" name="id" value ="' . $_GET['id'] .'"/>';  ?>
            <input type="submit"/>

        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>

    </body>
</html>