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
        background-image: url(https://media.istockphoto.com/photos/heap-of-wooden-numbers-on-blue-background-picture-id1292684021?b=1&k=20&m=1292684021&s=170667a&w=0&h=5-7WcFt5ibtORzehe4YnPSTZIgUiayWQ3ICRrOibazk=);
        background-repeat: no-repeat;
        background-size: cover;

        }
        .container{
            align-items: center;
            justify-content: center;
            width: 700px;
            background: rgba(253, 227, 170, 0.781);
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
        <h2>Kalkulator Sederhana</h2>
        <br>
        <form method="post" attribute="post" action="hasil_perhitungan">
            <p>Angka Pertama :<br />
                <input type="text" id="first" name="first">
            </p>
            <p>Angka Kedua :<br />
                <input type="text" id="second" name="second">
            </p>
            @csrf
            <p>Pilih Operasi: </p>
            <label class="radio-inline">
                <input type="radio" name="group1" id="add" value="add" checked="true">
                <p>+</p><br />
            </label>

            <label class="radio-inline">
                <input type="radio" name="group1" id="subtract" value="subtract">
                <p>-</p><br />
            </label>

            <label class="radio-inline">
                <input type="radio" name="group1" id="times" value="times">
                <p>x</p><br />
            </label>

            <label class="radio-inline">
                <input type="radio" name="group1" id="divide" value="divide">
                <p>/</p><br />
            </label>
            <br />
            <button type="submit" name="answer" id="answer" value="answer">Calculate</button>
        </form>
    </div>
</body>
</html>
