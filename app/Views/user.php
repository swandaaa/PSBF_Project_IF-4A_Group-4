<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Tabel User</title>
</head>

<body>
    <div class="container">
        <h1>Data Tabel User</h1>
        <table class="table">
            <thead class="table-dark">
                <th>ID User</th>
                <th>Username</th>
                <th>Password</th>
                <th>ID Level</th>
            </thead>
            <tbody>
                <?php
                foreach ($data->getResultArray() as $record) {
                    echo '<tr>' .
                        '<td>' . $record['ID_USER'] . '</td>' .
                        '<td>' . $record['USERNAME'] . '</td>' .
                        '<td>' . $record['PASSWORD'] . '</td>' .
                        '<td>' . $record['ID_LEVEL'] . '</td>' .
                        '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>