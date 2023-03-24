<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Tabel Pembayaran</title>
</head>

<body>
    <div class="container">
        <h1>Data Tabel Pembayaran</h1>
        <table class="table">
            <thead class="table-dark">
                <th>ID Pembayaran</th>
                <th>ID Bank</th>
                <th>ID Tarif</th>
                <th>Status Bayar</th>
            </thead>
            <tbody>
                <?php
                foreach ($data->getResultArray() as $record) {
                    echo '<tr>' .
                        '<td>' . $record['ID_PEMBAYARAN'] . '</td>' .
                        '<td>' . $record['ID_BANK'] . '</td>' .
                        '<td>' . $record['ID_TARIF'] . '</td>' .
                        '<td>' . $record['STATUS_BAYAR'] . '</td>' .
                        '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>