<?php
$dsn="mysql:host=localhost;dbname=dodo3000";
$db= new PDO($dsn, "root", "");
$query=$db->query("SELECT * FROM beds");
$items=$query->fetchAll();
foreach($items as $beds){
$price=$beds["price"];};
    if(isset($_GET["sale"])){
        $price=$price-($_GET["sale"]);
        
    }

include("header.php");
?>
    
  <div class="catalogue">
        
<?php
foreach($items as $bed){
?>  <div class="catalogue-item">
        <img src="./products/<?=$bed["name"]?>.jpg">
        <h3><?=$bed["brand"]?></h3>
        <p><?=$bed["name"]?>  <?=$bed["size"]?></p>
        
        <div class="price">
        
        <?php if(isset($_GET["sale"])){?>
            <p><strike><?=$bed["price"]?> € </strike></p>
             <p> <?= $price ?> </p>
            <?php }else{?><p><?=$bed["price"]?> € <?php } ?></p>
        </div>

    </div>
<?php } ?>
    
</div>
</body>
</html>