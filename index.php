<!doctype html>
<html>
<?php
require_once('model/database.php');
include_once("model/StudentTableGateway.php");
$database = new StudentTableGateway($pdo);
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student list</title>
</head>
<body>
<div class="row" style="height: 40px"></div>
<div style="width: 100%; height: 20px;"></div>
<div>
    <div class="col-md-1"></div>
    <div class="col-md-4" >
        <form class="form" action="/" method="post">
            <label class="control-label col-sm-2" style="padding-top: 5px" for="name">Name:</label>

            <div class="col-sm-10">
                <input class="form-control" name="name" type="text" >

            </div>
            <label class="control-label col-sm-2" style="padding-top: 5px" for="surname">Surname:</label>
            <div class="col-sm-10">
                <input class="form-control" name="surname" type="text" >

            </div>
            <label class="control-label col-sm-2" style="padding-top: 5px" for="groupa">Groupa:</label>
            <div class="col-sm-10">
                <input class="form-control" name="groupa" type="text" >

            </div>
            <label class="control-label col-sm-2" style="padding-top: 5px" for="score">Score:</label>
            <div class="col-sm-10">
                <input class="form-control" name="score" type="text" >

            </div>
            <label class="control-label col-sm-2" style="padding-top: 5px" for="email">Email:</label>
            <div class="col-sm-10">
                <input class="form-control" name="email" type="text" >

            </div>
            <button class="btn btn-success btn-block" style="margin-top: 15px" type="submit">SEND</button>
        </form>
        <a href="?action=delete" class="btn btn-danger btn-block">Delete table</a>
    </div>



</div>
<div >

    <div class="col-md-6">
            <table class="table table-striped" style="text-align: center">
                <thead>
                <tr>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Surname</th>
                    <th style="text-align: center">Groupa</th>
                    <th style="text-align: center">Score</th>
                    <th style="text-align: center">Email</th>
                </tr>
                </thead>
                <tbody>
                <?php


                if ($database->isPostClear()) {
                    echo "Заполните ВСЕ формы\n";
                } else{
                   $database ->addData();
                }

                $result = $database->getTable();

                foreach ($result as $value) {

                    echo '<tr><td>' . $value['name']. '</td>';
                    echo '<td>' . $value['surname']. '</td>';
                    echo '<td>' . $value['groupa']. '</td>';
                    echo '<td>' . $value['score']. '</td>';
                    echo '<td>' . $value['email']. '</td></tr>';



                }
                ?>
                </tbody>
            </table>
    </div>
    <div class="col-md-5"></div>
</div>






</body>
</html>


