<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Validation Rafid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>

    <style>
        body {
            height: 700px;
            background-image: linear-gradient(cyan, white, cyan);
        }

        hr.new5 {
            border: 3px solid black;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="https://id.wikipedia.org/wiki/Halaman_Utama" class="needs-validation" novalidate>
            <div class="form-group">

                <h1>Registrasi Pelatihan "Tunas Bangsa"</h1>
                <br>
                <hr class="new5">
                <label for="uname">Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Masukkan Name" name="uname"
                    pattern="[A-Za-z .]{1,}" required>
                <div class="valid-feedback">Name Valid.</div>
                <div class="invalid-feedback">Hanya gunakan huruf untuk nama! (misal: Rafid Ikbar Athallah)</div>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Masukkan Address" name="address"
                    pattern="[A-Za-z0-9 .]{1,}" required>
                <div class="valid-feedback">Address Valid.</div>
                <div class="invalid-feedback">Hanya gunakan huruf dan angka untuk address! (misal Jl. Mangga No.57)
                </div>
            </div>

            <div class="form-group">
                <label for="eaddress">E-mail Address:</label>
                <input type="email" class="form-control" id="eadress" placeholder="Masukkan E-mail Address"
                    name="eadress" pattern="[A-Za-z0-9_._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                <div class="valid-feedback">E-mail Address Valid.</div>
                <div class="invalid-feedback">Gunakan format email a@a.aa (misal: rafid@gmail.com)</div>
            </div>

            <!-- Meskipun digit, karena tidak disebutkan harus angka, maka huruf juga saya sertakan -->
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Masukkan Password" name="pswd"
                    pattern="[A-Za-z0-9 ]{8,16}" required>
                <div class="valid-feedback">Password Valid.</div>
                <div class="invalid-feedback">Hanya gunakan huruf dan angka sebanyak 8-16 untuk passowrd! (misal:
                    Rafid132)</div>
            </div>

            <!-- Meskipun tidak diberi batasan maksimal, saya menatapkan batas maksimal 15 digit untuk sebatas kewajaran -->
            <div class="form-group">
                <label for="Tlphn">Telephone:</label>
                <input type="text" class="form-control" id="Tlphn" placeholder="Masukkan nomor telephone" name="Tlphn"
                    pattern="\d{7,15}" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Hanya gunakan angka sebanyak minimal 7 dan maksimal 15 untuk telephone
                    (misal: 032147650987)</div>
            </div>

            <div class="form-group">
                <label for="scourse">Select Your Course:</label>
                <select class="custom-select" required>
                    <option value=""></option>
                    <option value="1">BTECH</option>
                    <option value="2">BBA</option>
                    <option value="3">BCA</option>
                    <option value="4">B.COM</option>
                    <option value="5">GEEKSFORGEEKS</option>
                </select>
                <div class="valid-feedback">Course Valid.</div>
                <div class="invalid-feedback">Mohon pilih course yang diinginkan! (misal: BBA)</div>
            </div>

            <div class="form-group">
                <label for="zip">Zip Code:</label>
                <input type="text" class="form-control" id="zip" placeholder="Masukkan Zip Code" name="zip"
                    pattern="\d{6}" required>
                <div class="valid-feedback">Zip Code Valid.</div>
                <div class="invalid-feedback">Hanya gunakan angka sebanyak 6 digit untuk Zip Code (misal: 135792)</div>
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> Saya setuju dengan Syarat
                    dan Ketentuan.
                    <div class="valid-feedback">Syarat dan Ketentuan diterima</div>
                    <div class="invalid-feedback">Setujui Syarat dan Ketentuan sebelum melanjutkan</div>
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-danger">reset</button>
        </form>
    </div>

    <script>
        // Disable form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>
