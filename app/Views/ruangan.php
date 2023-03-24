<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Ruangan</title>
</head>
<body>
    <div class="container">
        <h1>Data Ruangan</h1>
    <table class="table">
    <thead class="table-dark">
        <th>id</th>
        <th>id ket ruangan</th>
        <th>nama ruangan</th>
        <th>kapasitas ruangan</th>
    </thead>
    <?php foreach($data as $rowRuangan) : ?>
    <tbody>
        <td><?= $rowRuangan->ID_RUANGAN ?></td>
        <td><?= $rowRuangan->ID_KET_RUANGAN ?></td>
        <td><?= $rowRuangan->NAMA_RUANGAN?></td>
        <td><?= $rowRuangan->KAPASITAS_RUANGAN?></td>
    </tbody>
    <?php endforeach ?>
    </table>
    </div>
</body>
</html>