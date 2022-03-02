<!doctype html>
<html>
<head>
</head>
    <?php
    
    $color = "";
    $dato = $REQUEST["nombre"];
    fuction generarColor(){
        $num = random_int(1,7);
        switch ($num){
            case 1:
                return = "red";
                break;
            case 2:
                return = "green";
                break;
            case 3:
                return = "blue";
                break;
            case 4:
                return = "pink";
                break;
            case 5:
                return = "orange";
                break;
            case 6:
                return = "yellow";
                break;
            case 6:
                return = "black";
                break;
    
            }

    }
    $color = generarColor();
    ?>
<body bgcolor="<?= $color ?>">
<center>

<h1 style="color:blue"><?= $color ?></h1>
</center>
</body>
</html>