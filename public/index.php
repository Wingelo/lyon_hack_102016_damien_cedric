<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 06/10/16
 * Time: 17:02
 */
use gregwar\image;

?>
<html>

    <!--Document -->
    <head>
        <title>Mon projet de cours</title>
    </head>

    <header>
    </header>
    <body>
        <h1>Mon projet de cours</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>chaussette</th>
            </tr><?php
            include "../src/bdd.php";
            $connection = GetConnection();
            $liste = ExecSql($connection, "select id, nom, prenom, url_chaussette from chaussettes order by id desc limit 1;");
            while ($user = $liste->fetch_assoc()) { ?><tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['nom']; ?></td>
                    <td><?php echo $user['prenom']; ?></td>
                    <td><img src="<?php echo $user['url_chaussette']; ?>" alt="<?php echo $user['prenom']; ?>"</img></td>
                </tr><?php } ?>
        </table>
        <br/>
        <br/>
        <form name="contact" action="../src/form.php" method="post">
            Nom :
            <input type="text" value="" name="lastName"/>
            <br/>
            Prénom :
            <input type="text" value="" name="firstName"/>
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
