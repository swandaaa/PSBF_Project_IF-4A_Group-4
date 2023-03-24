<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Kategori Ruangan</title>
</head>
<body>
    <div class="container">
    <table class="table">
    <thead class="table-dark">
        <th>id</th>
        <th>kategori</th>
        <th>harga per jam</th>
    </thead>
    <?php foreach($data as $row) : ?>
    <tr>
        <td><?= $row->ID_KET_RUANGAN ?></td>
        <td><?= $row->KATEGORI ?></td>
        <td><?= $row->HARGA_PERJAM?></td>
    </tr>
    <?php endforeach ?>
    </table>
    </div>
</body>
</html>