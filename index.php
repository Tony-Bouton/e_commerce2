


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form  action="index.php"    method="post">
    <label for="prixHt">Prix HT</label>
    <input type="number" id="prixHt" name="prixHt" >

    <label for="tva">TVA</label>
    <input type="number" id="tva" name="tva" >

    <label for="name">Nom du produit</label>
    <input type="text" id="name" name="name" >

    <label for="category">Categorie</label>
    <input type="text" id="category" name="category" >

    <label for="stock">Stock</label>
    <input type="number" id="stock" name="stock" >

    <label for="description">Description</label>
    <input type="text" id="description" name="description" >

    <input type="submit" value="ajouter">



</form>

<?php
include "product.class.php";
$newProduct= $_POST;

$ttc= function ($tva,$prixHt){
    return $tva*$prixHt;
};




$newProduct1='<ul>';
foreach($newProduct as $key=>$value){
$newProduct1.='<li>'.$key.':'.$value.'</li>';
}
$newProduct1.='<li> prix TTC:'.number_format($ttc($_POST['tva'],$_POST['prixHt']),$decimals=2).'</li>';

echo $newProduct1;
?>


</body>
</html>