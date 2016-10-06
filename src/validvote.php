<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 06/10/16
 * Time: 20:35
 */
$nbVote = count($_POST);
if ($nbVote > 0 && $nbVote < 4 ) {
    print_r ($_POST);
}

echo 4;
