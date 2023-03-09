<?php
$foodId=$_GET['foodId'];

if(empty($foodId)){
    header('location:400.php');  
    exit();
}
$db=new PDO('mysql:host=172.31.22.43;dbname=Spencer1178551','Spencer1178551','ST3BJVqAAF');
$sql = "DELETE FROM foods WHERE foodId = :foodId";
$cmd = $db->prepare($sql);
$cmd->bindParam(':foodId', $foodId, PDO::PARAM_INT);
$cmd->execute();
$db = null;

echo '<p>Food Deleted</p>
    <a href="select-cuisine.php">Select another cuisine</a>';

header('location:select-cuisine.php');
?>
?>