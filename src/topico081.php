<?php

$a=30;
$a=10;
$a=5;
echo "<br> $a";
$arr=[30,10,5];
$arr[0]+=5;
echo "<br>arr[0] = ".$arr[0];
echo "<br>arr[0] = ".$arr[1];
echo "<br>arr[0] = ".$arr[2];
$uf=["SP", "RJ", "MG", "ES"];
echo "<br>".$uf[2];
echo "<pre>";print_r($arr);echo "</pre>";

$estudante=[
    "id"=>1,
    "ra"=>12356,
    "nome"=>"kyan",
    "curso"=>"ads"
];

echo "<pre>";print_r($estudante);

echo "<br>id: ".$estudante["id"];
echo "<br>ra: ".$estudante["ra"];
echo "<br>nome: ".$estudante["nome"];
echo "<br>curso: ".$estudante["curso"];
echo "<pre>";print_r($estudante);echo"</pre>";

$multi=[
    [10,"avião",30],
    [40,50,"ilha"],
    ["água",80,"barco"]
];

echo "<br>".$multi[2][0];
echo "<br>".$multi[0][1];
echo "<br>".$multi[1][2];
echo "<br>".$multi[2][2];

$bd=[
    ["id"=>1, "nome"=>"bete", "curso"=>"tads"],
    ["id"=>2, "nome"=>"cleide", "curso"=>"tdb"],
    ["id"=>3, "nome"=>"beto", "curso"=>"tjd"]
];

echo "<br>".$bd[2]["nome"];
echo "<br>".$bd[0]["curso"];
echo "<br>".$bd[1]["id"];

?>