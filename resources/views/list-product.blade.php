<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào</h1>

    <table border='1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $value)
            <tr>
                <td><?php echo $value['id']?></td>
                <td><?php echo $value['name']?></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>