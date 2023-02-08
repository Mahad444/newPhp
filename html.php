<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentOne</title>
</head>
<body>
    <ul>
        <?php 
        $names = array("Mahad","Said","Arafat","Boznian","Chacha");
        foreach($names as $name):
        if ($name == "Mahad"):
            echo "<li>$name</li>";
    endif;
        endforeach;
        ?>
    </ul>
    
</body>
</html>