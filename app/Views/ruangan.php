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
        <br>
        <button id="tambah" type="button" class="btn btn-primary">Tambah Data</button>
        <div id='form' style="display:none;">
            <br>
            <?php
            echo form_open('/ruangan');
            //Field ID_RUANGAN
            $att_label = [
                'class' => 'form-label',
            ];
            echo form_label('Id Ruangan', 'id', $att_label);
            $data_id = array(
                'name' => 'id',
                'id' => 'id',
                'class' => 'form-control'
            );
            echo form_input($data_id);

            //Field ID_KET_RUANGAN
            $att_label = [
                'class' => 'form-label',
            ];
            echo form_label('Id Kategori Ruangan', 'idKat', $att_label);
            $data_idKat = array(
                'name' => 'idKat',
                'id' => 'idKat',
                'class' => 'form-control'
            );
            echo form_input($data_idKat);

            //Field NAMA_RUANGAN
            echo form_label('Nama Ruangan', 'nama', $att_label);
            $data_nama = array(
                'name' => 'nama',
                'id' => 'nama',
                'class' => 'form-control'
            );
            echo form_input($data_nama);

            //Field KAPASITAS_RUANGAN
            echo form_label('Kapasitas Ruangan', 'kapasitas', $att_label);
            $data_kapasitas = array(
                'name' => 'kapasitas',
                'id' => 'kapasitas',
                'class' => 'form-control'
            );
            echo form_input($data_kapasitas);

            //Field STATUS_RUANGAN
            echo form_label('Status Ruangan', 'status', $att_label);
            $data_status = array(
                'name' => 'status',
                'id' => 'status',
                'class' => 'form-control'
            );
            echo form_input($data_status);

            echo '<br>';
            echo form_submit('submit', 'Submit', "class='btn btn-success'");
            echo '<button id="batal" type="button" class="btn btn-danger">Batal</button>';
            echo form_close();
            ?>

        </div>
        <br>
        <script>
            const add_button = document.getElementById("tambah");
            add_button.addEventListener("click", add);

            function add() {
                document.getElementById("form").style.display = "block";
            }
            const cancel_button = document.getElementById("batal");
            cancel_button.addEventListener("click", cancel);

            function cancel() {
                document.getElementById("form").style.display = "none";
            }
        </script>


        <br>
        <table class="table">
            <thead class="table-dark">
                <th>Id Ruangan</th>
                <th>Id Kategori Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Kapasitas Ruangan</th>
                <th>Status Ruangan</th>
            </thead>
            <?php foreach ($data as $rowRuangan) : ?>
                <tbody>
                    <td><?= $rowRuangan->ID_RUANGAN ?></td>
                    <td><?= $rowRuangan->ID_KET_RUANGAN ?></td>
                    <td><?= $rowRuangan->NAMA_RUANGAN ?></td>
                    <td><?= $rowRuangan->KAPASITAS_RUANGAN ?></td>
                    <td><?= $rowRuangan->STATUS_RUANGAN ?></td>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>