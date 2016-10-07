<!--Document -->
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


    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style_photo.css">
        <title>Formulaire : Concours de chaussette</title>
    </head>

    <header>
    </header>
    <body>
        <h1>Formulaire : Concours de chaussette</h1>

            <p>Nom :</p>
        <input type="text" value="" name="lastName" id="lastName"/>
            <br/>
            <p>Prénom :</p>
        <input type="text" value="" name="firstName" id="firstName"/>
            <br/>
        <h1>CAPTURE VIDEO</h1>
        <video id="video" width="320" height="240" autoplay></video>
        <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
        <img id="image" src="" alt="" width="320" height="240" />

        <br/>

        <button id="snap">Prendre une photo</button>
        <button id="send_snap">Envoyer sur le serveur</button>

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/take_picture.js"></script>


    </body>
</html>
