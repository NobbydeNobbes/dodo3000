<?php

if(isset($_FILES['Image'])){



}
include("header.php");
if(!empty($_POST)){
    $Marque=trim(strip_tags($_POST["Marque"]));
    $Modele=trim(strip_tags($_POST["Modèle"]));
    $Taille=trim(strip_tags($_POST["Taille"]));
    $Prix=trim(strip_tags($_POST["Prix"]));
    $Image=$_Files["Image"]["name"];
    $tmpName= $_FILES["Image"]['tmp_name'];
    $name= $_FILES["Image"]['name'];
    $uploadPath='./products/'.$name;
    move_uploaded_file($tmpName, $uploadPath);
    
    
    
    // if(!empty($_POST["Image"]) && !empty($_POST["Modèle"])){
    //    $newName= rename($Image, $Modele);
    //     move_uploaded_file($newName, $uploadDir);
    // }

$dsn="mysql:host=localhost;dbname=dodo3000";
$db= new PDO($dsn, "root", "");
$query=$db->prepare("INSERT INTO beds (brand, name, size, price, image) VALUES(:brand, :name, :size, :price, :image)");
$query->bindParam(":brand", $Marque);
$query->bindParam(":name", $Modele);
$query->bindParam(":size", $Taille);
$query->bindParam(":price", $Prix, PDO::PARAM_INT);
$query->bindparam(":image", $Image);
if($query->execute()){
    header("Location: index.php");
    
}

}





?>
<div class="sale">
<form action="index.php" method="get"class="sale-form">
    <input type="submit" value="Appliquer une démarque">
    <input type="number" id="sale" name="sale">
</form>
</div>

<div class="add-bed">
    <form action="" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="imageUpload">Sélectionner une photo du lit</label>
                <input id="imageUpload" type="file" name="Image" accept=".jpg">
            </div>
            <div class="form-group">
                 <label for="inputBrand">Marque : </label>
                <input id="inputBrand" type="text" name="Marque" value="<?= isset($Marque) ? $Marque: "" ?>">
            </div>
            
            <div class="form-group">
                <label for="inputName">Modèle : </label>
                <input id="inputName"type="text" name="Modèle" value="<?= isset($Modele) ? $Modele: "" ?>">
            </div>
            <div class="form-group">
                <label for="inputSize">Taille : </label>
                <input id="inputSize"type="text" name="Taille" value="<?= isset($Taille) ? $Taille: "" ?>">
            </div>
            <div class="form-group">
                <label for="inputPrice">Prix : </label>
                <input id="inputPrice"type="number" name="Prix" value="<?= isset($Prix) ? $Prix: "" ?>">
            </div>
            <input type="submit" value="Ajouter un lit">
        </form>


        
       
        
        
        
    


<?php 
include("footer.php");
?>