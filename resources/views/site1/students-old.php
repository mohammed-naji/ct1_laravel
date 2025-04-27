<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Page | Site1</title>
</head>

<body>
    <h1>Welcome <?= $teacher ?></h1>
    <?php if (count($students) > 0): ?>
    <p>Your Students</p>
    <ul>
        <?php foreach ($students as $std): ?>
        <li><?= $std ?></li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p>You dont have students yet</p>
    <?php endif; ?>
</body>

</html>
