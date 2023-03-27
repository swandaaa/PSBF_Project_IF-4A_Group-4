<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Tabel Penyewaan</title>
</head>

<body>
    <div class="container">
        <h1>Data Tabel Penyewaan</h1>
        <button type="button" id="tambah" class="btn btn-primary">Tambah Data</button>
        <div id='form' style="display:none">
            <br><br>
            <?php
            echo form_open('/penyewaan');
            //field ID_SEWA
            $att_label = [
                'class' => 'form-label',
            ];
            echo form_label('Id Sewa', 'id', $att_label);
                $data_id = array(
                    'name' => 'id',
                    'id' => 'id',
                    'class' => 'form-control'
            );
            echo form_input($data_id);

            //Field ID_USER
            $att_label = [
                'class' => 'form-label',
            ];
            echo form_label('Id User', 'id_user', $att_label);
            $data_id_user = array(
                'name' => 'id_user',
                'id' => 'id_user',
                'class' => 'form-control'
            );
            echo form_input($data_id_user);

            //Field ID_
            $att_label = [
                'class' => 'form-label',
            ];
            echo form_label('Id Ruangan', 'id_ruangan', $att_label);
            $data_id_ruangan = array(
                'name' => 'id_ruangan',
                'id' => 'id_ruangan',
                'class' => 'form-control'
            );
            echo form_input($data_id_ruangan);

            //Field Tanggal Sewa
            echo form_label('Tanggal Sewa', 'tgl_sewa', $att_label);
            $data_tgl_sewa = array(
                'name' => 'tgl_sewa',
                'id' => 'tgl_sewa',
                'class' => 'form-control'
            );
            echo form_input($data_tgl_sewa);

            //Field Durasi Sewa
            echo form_label('Durasi Sewa', 'durasi_sewa', $att_label);
            $data_durasi_sewa = array(
                'name' => 'durasi_sewa',
                'id' => 'durasi_sewa',
                'class' => 'form-control'
            );
            echo form_input($data_durasi_sewa);

            //Field Keterangan
            echo form_label('Keterangan', 'ket', $att_label);
            $data_ket = array(
                'name' => 'ket',
                'id' => 'ket',
                'class' => 'form-control'
            );
            echo form_input($data_ket);

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
                    <th>ID Sewa</th>
                    <th>ID User</th>
                    <th>ID Ruangan</th>
                    <th>Tanggal Sewa</th>
                    <th>Durasi Sewa</th>
                    <th>Ket</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $record) : ?>
                        <tbody>
                            <td> <?= $record->ID_SEWA ?></td>
                            <td> <?= $record->ID_USER ?></td>
                            <td> <?= $record->ID_RUANGAN ?></td>
                            <td> <?= $record->TGL_SEWA ?></td>
                            <td> <?= $record->DURASI_SEWA ?></td>
                            <td> <?= $record->KET ?></td>
                        </tbody>
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>
</body>

</html>