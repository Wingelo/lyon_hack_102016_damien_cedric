<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 06/10/16
 * Time: 20:35
 */
$nbVote = count($_POST);
if ($nbVote != 4 ) {
    $test = "?";
    $i = 1;
    foreach ($_POST as $key=>$value) {
        echo '<input type="hidden" name="' . $key . '" value="' . $value . '"/>' ;
       ?> <input type="hidden" name="id" value="4"/> <?php
       if ($i != 1) {
        $test .="&";
       }
        $test .= "$key=$value";
        $i++;

    }
    header('Location: ../public/vote.php'.$test);

} else {
    include("bdd.php");

    $connection = GetConnection();

    foreach ($_POST as $key=>$value) {

     if ($key != 'id') {
         $query= "update chaussettes set vote2 = vote2+1 where id = $value ;" ;
     } else {
         $query = "update chaussettes set vote1 = 1 where id = $value ;" ;
     }

     ExecSql($connection, $query);
  }
     // à renvoyer sur le login
    header('Location: ../public/index.php');
}

