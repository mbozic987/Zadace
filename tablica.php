<?php

if(isset($_GET['x'])){
    $x=$_GET['x'];
}else{
    echo 'Obavezno postavljanje GET parametra x za broj redova';
    exit;
}

if(isset($_GET['y'])){
    $y=$_GET['y'];
}else{
    echo 'Obavezno postavljanje GET parametra y za broj stupaca';
    exit;
}

$xos=$x-2;
$yos=$y-2;
$red=$x-1;
$stupac=$y-1;
$loop=$x*$y;
$broj=1;
$matrica=array();

while($broj<$loop){
    for($j=$yos;$j>=0;$j--){
        $matrica[$red][$stupac]=$broj++;
        $stupac--;
    }

    for($j=$xos;$j>=0;$j--){
        $matrica[$red][$stupac]=$broj++;
        $red--;
    }

    for($i=0;$i<=$yos;$i++){
        $matrica[$red][$stupac]=$broj++;
        $stupac++;
    }
    
    for($i=0;$i<=$xos;$i++){
        $matrica[$red][$stupac]=$broj++;
        $red++;
    }
    $red-=1;
    $stupac-=1;
    $yos-=2;
    $xos-=2;
}

if($yos&$xos=0|-1){
    $matrica[$red][$stupac]=$broj;
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