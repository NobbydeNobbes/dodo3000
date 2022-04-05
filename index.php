<?php
$dsn="mysql:host=localhost;dbname=dodo3000";
$db= new PDO($dsn, "root", "");
$query=$db->query("SELECT * FROM beds");
$items=$query->fetchAll();

        
        
    

include("header.php");
?>
    
  <div class="catalogue">
  <h2>Catalogue</h2>
        
<?php
foreach($items as $bed){
?>  <div class="catalogue-item">
        <img src="./products/<?=$bed["image"]?>">
        <h3><?=$bed["brand"]?></h3>
        <p><?=$bed["name"]?>  <?=$bed["size"]?></p>
        
        <div class="price">
        
        <?php if(isset($_GET["sale"])){?>
            <p><strike><?=$bed["price"]?> € </strike></p>
             <p style="color:#aa2080;"> <?= $bed["price"]-($_GET["sale"]) ?> €</p>
            <?php }else{?><p><?=$bed["price"]?> € <?php } ?></p>
        </div>

    </div>
<?php } 
    
include("footer.php");?>