<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $days = 10;

        if ($days >= 1 && $days <= 7) {
            echo "new battlepass user";
        } elseif ($days >= 8 && $days <= 24) {
            echo "battlepass enjoyer";
        } elseif ($days >= 25 && $days <= 30) {
            echo "battlepass for-renewal";
        }
    ?>
      
</body>
</html>