<?php
    include "external.php";
    echo "lalalallalala";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Books </h1>
    <ul>
        <?php foreach($multiArray as $multi){ ?>
            <h2>Title: <?php echo $multi['title'] ?> </h2>
            <h3>Author: <?php echo $multi['author'] ?> </h3>
            <p>Price: $<?php echo $multi['price'] ?> </p>
        <?php }?>
        </ul>
</body>
</html>