<?php
	/**
	 * Created by PhpStorm.
	 * User: apprenti
	 * Date: 07/10/16
	 * Time: 10:40
	 */
	include "../src/bdd.php";

	$connection = GetConnection();

	$query="SELECT nom, prenom, url_chaussette from chaussettes ORDER BY vote2 DESC limit 1;";

	$result = ExecSql($connection, $query);

	 if ($user = $result->fetch_assoc())
	 {
	 	$name = $user['nom'];
		 $firstName= $user['prenom'];
		 $url_socket= $user['url_chaussette'];

		 ?>
		 <link rel="stylesheet" href="css/style_vote.css" >
			<h1>Les Chaussettes gagnantes sont celle de <?php echo $name. ' '. $firstName?></h1>
			<img id="winner" src="<?php echo $url_socket?>"/>
	<?php };

