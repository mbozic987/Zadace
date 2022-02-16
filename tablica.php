<?php

if(isset($_GET['x'])){
    $red=$_GET['x'];
}else{
    echo 'Obavezno postavljanje GET parametra x za broj redova';
    exit;
}

if(isset($_GET['y'])){
    $stupac=$_GET['y'];
}else{
    echo 'Obavezno postavljanje GET parametra y za broj stupaca';
    exit;
}

$petlja=$red*$stupac;

$red--;
$stupac--;

$lijevo = 0;
$gore = 0;
$desno = $stupac;
$dolje = $red;

$broj=1;
$matrica=[];

while($broj<=$petlja){
    for($j=$desno;$j>=$lijevo;$j--){
        $matrica[$dolje][$j]=$broj++;
    }
    $dolje--;
    if($broj>$petlja){
        break;
    }


   for($j=$dolje;$j>=$gore;$j--){
        $matrica[$j][$lijevo]=$broj++;
    }
    $lijevo++;
    if($broj>$petlja){
        break;
    }   


    for($j=$lijevo;$j<=$desno;$j++){
        $matrica[$gore][$j]=$broj++;
    }
    $gore++;
    if($broj>$petlja){
        break;
    }
    

    for($j=$gore;$j<=$dolje;$j++){
        $matrica[$j][$desno]=$broj++;
    }
    $desno--;
    if($broj>$petlja){
        break;
    }
}

echo '<table>';
for($i=0;$i<count($matrica);$i++){
    echo '<tr>';
    for($j=0;$j<count($matrica[$i]);$j++){
        echo '<td>', $matrica[$i][$j] , '</td>';    
    }
    echo '</tr>';
}
echo '</table>';