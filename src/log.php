<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 06/10/16
 * Time: 20:35
 */

include("bdd.php");

$connection = GetConnection();

$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];

if (strtolower($lastName)=='admin' && strtolower($firstName)=='admin@wild') {
    header ('Location: ../public/admin.php');
    exit;
} else {
    $query = "Select id from chaussettes where lower(nom) = lower('$lastName') and prenom = lower('$firstName') and IFNULL(vote1,0)=0;" ;
    $result = ExecSql($connection, $query);

    if ($user = $result->fetch_assoc()) {
        $test = "?id=".$user['id'];

        header('Location: ../public/vote.php' . $test);

    } else {
        header ('Location: ../public/index.php');
    }
}