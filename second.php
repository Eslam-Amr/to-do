<?php
$filename = './list.json';
$mission='';
$x = json_decode(file_get_contents($filename), true);

if(isset($_REQUEST['mission'])){

    $mission=$_REQUEST['mission'];
}
if(!empty($mission)&&strlen($mission)>0){
    
    $x[]=[
        'index' => !count($x) ? 1 :  ++end($x)['index'],
        'mission' =>$mission
    ];
    
    $mission=' ';
    file_put_contents($filename, json_encode($x));

}
if(isset($_GET["index"])){

    unset($x[$_GET["index"]-1]);
}

file_put_contents($filename, json_encode($x));



?>
