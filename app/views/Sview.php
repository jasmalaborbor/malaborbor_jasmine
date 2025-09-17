<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sview</title>
</head>
<body>
    <h1>Welcome to Sview View</h1>
    <table border = "1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>name</th>
        </th>
        <tr>
            <?php foreach($data as $d): ?>
        <tr>
            <td><?php echo($d['id']); ?></td>
            <td><?php echo($d['name']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>