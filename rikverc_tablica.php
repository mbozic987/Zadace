<?php

if(isset($_GET['x'])){
    $x=$_GET['x'];
}else{
    echo 'Postavite GET parametar x za broj redova';
    exit;
}

if(isset($_GET['y'])){
    $y=$_GET['y'];
}else{
    echo 'Postavite GET parametar y za broj redova';
    exit;
}

$xos=$x-2;
$yos=$y-2;
$red=$x-1;
$stupac=$y-1;
$petlja=$x*$y;
$broj=1;
$matrica=array();

for($broj;$broj<=$petlja;){

    for($i=$xos;$i>=0;$i--){
        $matrica[$red][$stupac]=$broj++;
        $red--;
        if($broj>$petlja){
            break;
        }
    }
    
    for($i=$yos;$i>=0;$i--){
        $matrica[$red][$stupac]=$broj++;
        $stupac--;
        if($broj>$petlja){
            break;
        }
    }
     
    for($i=0;$i<=$xos;$i++){
        $matrica[$red][$stupac]=$broj++;
        $red++;
        if($broj>$petlja){
            break;
        }
    }
       
    for($i=0;$i<=$yos;$i++){
        $matrica[$red][$stupac]=$broj++;
        $stupac++;
        if($broj>$petlja){
            break;
        }
    }    
       
    $red-=1;
    $stupac-=1;
    $yos-=2;
    $xos-=2;
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