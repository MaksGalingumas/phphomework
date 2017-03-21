<?php
include "autoloader.php";

use Magicc\State;
use Magicc\Voke;
use Magicc\NFQ\Call;
use Magicc\NFQ\Condes;
use Magicc\NFQ\NFQ2\Debug;
use Magicc\NFQ\NFQ2\Getset;
use Magicc\NFQ\NFQ2\Sleepwake;

echo "<b> Magic voke veikimas: </b>" ."<br>";
$voke = new Voke(10);
echo $voke(5, TRUE);
echo "<br>";

echo "<b> Magic sleep, wake veikimas: </b>" ."<br>";
$v1 = new Sleepwake(10);
$s1 = serialize ($v1);
echo $s1;
$v2 = unserialize($s1);
echo "<br>";
echo $v2->length;
echo "<br>";

echo "<b> Magic set state veikimas: </b>" ."<br>";
$v1 = new State();
eval('$c=' . var_export($v1, TRUE). ';');
echo $c->length;
echo $c->hidden;

echo "<br>";

echo "<b> Magic get,set,isset,unset,toString,invoke,clone veikimas: </b>" ."<br>";
$setget = new Getset(10);
echo $setget->pasleptas . '<br>';
echo $setget->pasleptas = 'Nauja paslepta verte';
echo "<br>";
echo isset ($setget->pasleptas);
unset($setget->pasleptas);
echo ($setget->pasleptas);
echo $setget;
echo "<br>";
echo $setget('nepasleptas');
echo "<br>";
$klonas = clone $setget;
echo "setget Cloned:   ". $setget->cloned."<br>";
echo "klonas Cloned:   ". $klonas->cloned."<br>"; 
echo "<br>";

echo "<b> Magic debug info veikimas: </b>" ."<br>";
$bug = new Debug();
var_dump ($bug);
echo "<br>";

echo "<b> Magic call ir callStatic veikimas: </b>" ."<br>";
$static = new Call();
echo call::nfq1() . "<br>";

echo call::nfq2();
echo "<br>";

echo "<b> Magic contruct ir destruct veikimas: </b>" ."<br>";
try{
    $magic = new Condes('MesMylimNFQ');
    echo $magic->title;
    unset ($magic);
    echo '<br>';
}catch(Exception $e){
    print_r($e);
}

?>