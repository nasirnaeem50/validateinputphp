<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
     age:<br>
     <input type="text" name="age"><br>
     <input type="submit" name="login" value="login">   
    </form>
    
</body>
</html>
<?php
if(isset($_POST["login"])){
    $age=filter_input(INPUT_POST,"age",
                 FILTER_VALIDATE_INT);
    echo $age;             
}


?>