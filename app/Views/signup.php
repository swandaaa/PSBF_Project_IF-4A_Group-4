<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Signup</title>
</head>

<body>
    <div class="container">
        <h1>Sign Up</h1>
        <br>
        <div id='form'>
            <br>
            <?php
            echo form_open('/user');

            //Field ID_User
            $att_label = [
                'class' => 'form-label',
            ];
            echo form_label('Id User', 'iduser', $att_label);
            $data_iduser = array(
                'name' => 'iduser',
                'id' => 'iduser',
                'class' => 'form-control'
            );
            echo form_input($data_iduser);




            //Field username
            $att_label = [
                'class' => 'form-label',
            ];
            echo form_label('Username', 'un', $att_label);
            $data_username = array(
                'name' => 'un',
                'id' => 'un',
                'class' => 'form-control'
            );
            echo form_input($data_username);




            //Field password
            echo form_label('Password', 'pw', $att_label);
            $data_password = array(
                'name' => 'pw',
                'id' => 'pw',
                'class' => 'form-control'
            );
            echo form_input($data_password);




            //Field ID_LEVEL
            echo form_label('level', 'level', $att_label);

            $data_role = array(
                'name' => 'level',
                'id' => 'level',
                'class' => 'form-control'
            );

            echo form_input($data_role);



            echo '<br>';
            echo form_submit('submit', 'Submit', "class='btn btn-primary'");
            echo form_close();
            ?>
        </div>
    </div>
</body>

</html>