<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        require 'Comment.php';

        $comment = new Comment('This is some comment text.', 5);

        echo $comment->userId;


    
    ?>
</body>
</html>