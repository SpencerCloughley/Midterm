<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
</head>
<body>
    <?php
    $cuisineId=$_POST['cuisineId'];
    $db=new PDO('mysql:host=172.31.22.43;dbname=Spencer1178551','Spencer1178551','ST3BJVqAAF');
    $sql = "SELECT * FROM foods WHERE cuisineId =:cuisineId";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':cuisineId', $cuisineId, PDO::PARAM_INT);
    $cmd->execute();
    $foods = $cmd->fetchAll();
    //for each food that is passed in print out name
    echo '<table><thead><th>Food Name</th></thead>';
    foreach($foods as $food){
        echo'<tr>
        <td>' .$food['name'] . '</td>
        </tr>';
    }
    
    $db=null;
    ?>
</body>
</html>