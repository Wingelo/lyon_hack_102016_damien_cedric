<?php
/**
 * User: damien
 * Date: 22/09/16
 * Time: 11:08
 */
include("bdd.php");

$connection = GetConnection();

if (count($_POST) == 0) {

} else {
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $urlImage = $_POST['urlImage'];

    $result = ExecSql($connection,"Select 1 from chaussettes where lower(nom) = lower('$lastName') and lower(prenom) = lower('$first');");
    if ($user = $result>fetch_assoc()) {
        $query = "update user set url_chaussette = '$urlImage' " ;
        $query .= "where nom = '$lastName' and prenom = '$firstName')";

    } else {

        $query = "insert into user (nom,prenom,age,email) VALUES ('" . $_POST['nom'] . "', '";
        $query .= $_POST['prenom'] . "', '" . $_POST['url_image'] . "');";
    }
//    ECHO $query;
    ExecSql($connection, $query);
}
//    $query = "insert into user (nom, prenom, age, email) values " .$_POST() ;
header('Location: ../public/admin.php');
