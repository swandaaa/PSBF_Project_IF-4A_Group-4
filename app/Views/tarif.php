<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Tabel Tarif</title>
</head>

<body>
    <div class="container">
        <h1>Data Tabel Tarif</h1>
        <table class="table">
            <thead class="table-dark">
                <th>ID Tarif</th>
                <th>ID Sewa</th>
                <th>Mulai Sewa</th>
                <th>Selesai Sewa</th>
                <th>Lama Sewa</th>
                <th>Total Bayar</th>
            </thead>
            <tbody>
                <?php
                foreach ($data->getResultArray() as $record) {
                    echo '<tr>' .
                        '<td>' . $record['ID_TARIF'] . '</td>' .
                        '<td>' . $record['ID_SEWA'] . '</td>' .
                        '<td>' . $record['MULAI_SEWA'] . '</td>' .
                        '<td>' . $record['SELESAI_SEWA'] . '</td>' .
                        '<td>' . $record['LAMA_SEWA'] . '</td>' .
                        '<td>' . $record['TOTAL_BAYAR'] . '</td>' .
                        '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>