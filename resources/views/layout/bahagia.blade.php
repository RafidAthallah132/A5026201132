<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-1 text-right">
                        <img src="https://zedemy.com/wp-content/uploads/avatars/1666/6131bc5015bfc-bpfull.jpg" style="width:100px;">
                    </div>
                    <div class="col-md-3 text-right">
                        <h1>5026201132</h1>
                    </div>
                    <div class="col-md text-left">
                        <h1><b>Rafid Ikbar Athallah</b></h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">

            <div class="col-md-3">
                <div class="thumbnail" >
                    <h1 class="text-center">Navigasi</h1>
                <hr>
                <ul class="nav text-center">
                    <li><a href="/pegawai" class="btn btn-info p-1">Pegawai</a></li><br>
                    <li><a href="/absen" class="btn btn-info p-1">Absen</a></li><br>
                    <li><a href="/tugas" class="btn btn-info p-1">Tugas</a></li><br>
                    <li><a href="" class="btn btn-info p-1" disabled>Minggu depan</a></li><br>
                    <li><a href="" class="btn btn-info p-1" disabled>Praktikum</a></li><br>
                </ul>
                </div>
            </div>
            <div class="col-md-9">
                <h3>@yield('judulhalaman')</h3>
                @section('konten')
                @show
            </div>
        </div>

        <footer>
            <p style="text-align: center">Hak cipta oleh 5026201132 - Rafid Ikbar Athallah</p>
          </footer>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#dtpickerdemo').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                showTodayButton: false,
                locale : 'id',
                "defaultDate": new Date(),
            });
        });
    </script>
</body>

</html>
