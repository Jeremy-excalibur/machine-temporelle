<?php

require ('datas/datas.php');

// la fonction calculDeOuf permet de récupérer la donnée date de l'utilisateur
function calculDeOuf(){
    if (isset($_GET['input'])) {
        $date = $_GET['date'];
        return $date; 
    }}

// la fonction epoque permet de situer l'epoque en fonction de la date rentrée par l'utilisateur
    function epoque(){

        require ('datas/datas.php');
        if ($_GET['date'] <= 476){
            echo 'Le temps des romains, des gaulois ou encore des égyptiens... aucun doute nous avons attéri en pleine ' .  $epoque[0];
            ?><br>
            <img src="https://misterfanjo.com/wp-content/uploads/2017/05/antiquit%C3%A9.png" alt="photo antiquité">
            <?php
        }
    
        elseif(($_GET['date'] > 476) && ($_GET['date'] <= 1492)){
            echo 'Le temps des chevaliers et des chateaux fort, peut-etre rencontrera tu ta Frénégonde ou ton Godefroy ! tu est au ' . $epoque[1];
            ?><br>
            <img src="https://img.bfmtv.com/c/1000/600/2df/b1d8ad0e2d10a88c396a454978ee5.jpg" alt="photo moyen age">
            <?php
        }
    
        elseif (($_GET['date'] > 1492) && ($_GET['date'] <= 1789 )){
            echo 'On est un peu avant la revolution, à l\'epoque de Versaille, de Leonard de Vinci ! Aucun doute nous somme à la ' .$epoque[2];
            ?><br>
            <img src="https://i2.wp.com/l-express.ca/wp-content/uploads/2020/01/italy-rome-vatican-museums-painting-013119-e1565103079326jpg_large.jpeg?fit=585%2C391&ssl=1" alt="Photo renaissance">
            <?php
        }
    
        elseif (($_GET['date'] > 1789) && ($_GET['date'] <= 2020 )){
            echo 'On est quand meme vachement pret de notre epoque... hum on est surement pendant les ' .$epoque[3];
            ?><br>
            <img src="https://www.premiere.fr/sites/default/files/styles/scale_crop_1280x720/public/2019-10/les%20temps%20modernes.jpg" alt="photos temps moderne">
            <?php
        }
    
        else {
            echo 'y\'a un petit soucis la';
        }
    }

