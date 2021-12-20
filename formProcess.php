<?php
$eggQty = $_POST['eggQty'];
$saladQty = $_POST['saladQty'];
$chxQty = $_POST['chxQty'];
$zuchiniQty = $_POST['zuchiniQty'];
$cerealQty = $_POST['cerealQty'];
$oJQty = $_POST['oJQty'];
$store = $_POST['store'];

define('EGGSNEEDED', 10);
define('SALADNEEDED', 10);
define('CHICKENNEEDED', 3);
define('ZUCHININEEDED', 4);
define('CEREALNEEDED', 2);
define('OJNEEDED', 3);

if($store === 'yes'){
    $egg = EGGSNEEDED - $eggQty;
    $salad = SALADNEEDED - $saladQty;
    $chicken = CHICKENNEEDED - $chxQty;
    $cereal = CEREALNEEDED - $cerealQty;
    $oJ = OJNEEDED - $oJQty;
    echo '<p>Grocery List:<p></br>';
    echo '<p>Eggs: </p>'.$egg.'</br>';
    echo '<p>Salad Kits:</p>'.$salad.'</br>';
    echo '<p>Chicken: </p>'.$chicken.'</br>';
    echo '<p>Cereal:</p>'.$cereal.'</br>';

}else{
    echo '<p>Hooray no need to shop this week!!!</p>';
}

?>