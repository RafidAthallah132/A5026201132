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
        h3 {
            text-align: center
        }

        #content {
            border: 2px solid black;
            width: 80%;
            margin: auto;
            padding: auto;
        }

    </style>
</head>

<body>
<br>
    <div class="container" id=content>
        <form action="https://id.wikipedia.org/wiki/Halaman_Utama" class="needs-validation" method="post" novalidate>
            <div class="form-group">
                <br>
                <p>Nama mahasiswa : Rafid Ikbar Athallah</p>
                <p>Nama Panggilan : Rafid</p>
                <p>NRP : 5026201132</p>

                <h3> Form Input Peserta vaksinasi </h3>
                <br>
                <div class="form-inline">
                    <label for="uname" class="col-sm-3">Nama Peserta</label>
                    <div class= "col-sm-1">:</div>
                    <input type="text" class="form-control col-sm-8" id="uname" placeholder="Masukkan Nama Peserta" name="uname"
                        pattern="[A-Za-z .]{10,}" required>
                    <div class="valid-feedback">Name Valid.</div>
                    <div class="invalid-feedback">Hanya gunakan huruf minimal 10 huruf</div>
                </div>
                <br>

                <div class="form-inline">
                    <label for="uname" class="col-sm-3">NIK</label>
                    <div class= "col-sm-1">:</div>
                    <input type="text" class="form-control col-sm-8" id="uname" placeholder="Masukkan NIK" name="uname"
                        pattern="\d{16}" required>
                    <div class="valid-feedback">Name Valid.</div>
                    <div class="invalid-feedback">Hanya gunakan angka sebanyak 16 angka</div>
                </div>
                <br>

                <div class="form-inline">
                    <label for="uname" class="col-sm-3 b">Jenis Vaksin</label>
                    <div class= "col-sm-1">:</div>
                            <select class="custom-select col-sm-8"  required>
                                <option value=""></option>
                                <option value="1">AZ</option>
                                <option value="2">Sinovac</option>
                                <option value="3">Moderna</option>

                            </select>
                            <div class="valid-feedback">Jenis Vaksin Valid.</div>
                            <div class="invalid-feedback">Mohon pilih Jenis Vaksin</div>
                </div>
                <br>

                <div class="form-inline">
                    <label for="uname" class="col-sm-3">No Batch</label>
                    <div class= "col-sm-1">:</div>
                    <input type="text" class="form-control col-sm-8" id="uname" placeholder="Masukkan No Batch" name="uname"
                        pattern="[A-Za-z0-9]{1,}" required>
                    <div class="valid-feedback">No Batch Valid.</div>
                    <div class="invalid-feedback">Hanya gunakan angka dan huruf tapa simbol</div>
                </div>
            </div>

            <div class="form-inline">
            <div class="col-sm-1"></div>
            <button type="submit" class="btn btn-primary col-sm-4" >Simpan</button>
            <div class="col-sm-2"></div>
            <button type="reset" class="btn btn-success col-sm-4">reset</button>
            <div class="col-sm-1"></div>
            </div>
            <br>
            <br>
            <br>
        </form>
    </div>
    <p> </p>

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
