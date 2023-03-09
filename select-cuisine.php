<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="foods.php" method="post">
        <fieldset>
            <label for="cuisineId">Cuisines:</label>
            <select name="cuisineId" id="cuisineId">
                <?php
                $db = new PDO('mysql:host=172.31.22.43;dbname=Spencer1178551', 'Spencer1178551', 'ST3BJVqAAF');
                
                $sql= "SELECT * FROM cuisines";

                $cmd = $db->prepare($sql);
                    //run the query
                $cmd->execute();

                $cuisines=$cmd->fetchAll();
                foreach($cuisines as $cuisine){
                    echo '<option value=" ' . $cuisine['cuisineId']. '">' . $cuisine['name'] . '</option>';
                }
                $db = null;
                ?>
            </select>
        </fieldset>
        <button class="btnGet">Get Foods</button>
    </form>
</body>
</html>