<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        body{
        background-image: url(https://schoolsweek.co.uk/wp-content/uploads/2018/07/Math-Numbers-SM-1.jpg);
        background-repeat: no-repeat;
        background-size: cover;

        }
        .container{
            align-items: center;
            justify-content: center;
            width: 700px;
            background: rgba(235, 241, 241, 0.842);
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto;

        }
        button{
        width: 200px;
        }

    </style>
</head>
<body>

    <div class="container">
    <div class="row">
            <div class="alert alert-success">
                Hasil operasi adalah :
                <?php
                $first = $_POST['first'];
                $second= $_POST['second'];
                    if($_POST['group1'] == 'add') {
                    echo $first + $second;
                    }
                    else if($_POST['group1'] == 'subtract') {
                    echo $first - $second;
                    }
                    else if($_POST['group1'] == 'times') {
                    echo $first * $second;
                    }
                    else if($_POST['group1'] == 'divide') {
                    echo $first / $second;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
