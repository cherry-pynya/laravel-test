<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USER</title>
</head>
<body>
    <?php
        foreach ($user as $key => $value) {
            echo "{$key} - {$value} ";
            echo "<br/>";
        }
    ?>
</body>
</html>
