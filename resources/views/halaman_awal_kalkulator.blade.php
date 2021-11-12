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
        background-image: url(https://images.unsplash.com/photo-1531736275454-adc48d079ce9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTd8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80);
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
