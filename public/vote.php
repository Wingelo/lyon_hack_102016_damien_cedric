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
        <form name="vote" action="../src/validvote.php" method="post">

                <?php
                include "../src/bdd.php";
                $connection = GetConnection();
                $liste = ExecSql($connection, "select id, url_chaussette from chaussettes order by id desc limit 1;");
                /*while ($user = $liste->fetch_assoc()) {*/ ?>

                   <input type="checkbox" value="1" name="vote1" />
                   <input type="checkbox" value="2" name="vote2" />
            <input type="submit"/>

        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>

    </body>
</html>