<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page | Site1</title>
    <style>
        h1 span {
            color: red;
        }
    </style>
</head>

<body>
    <?php echo $name; ?> -
    {{ $name }}
    <h1>Welcome <span><?php echo $name; ?></span>, my age <span><?= $age ?></span></h1>
    <p>Users Count : <?= $users_count ?></p>
</body>

</html>
