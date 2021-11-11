<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").dblclick(function () {
                $("#link").attr("href", function (i, origValue) {
                    return origValue + "#Sejarah_klasifikasi";
                });
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h2>JQuery HTML Set Content and Attributes</h2>
        <hr>
        <p><a href="https://id.wikipedia.org/wiki/Hewan" id="link">Wikipedia hewan</a></p>
        <button type="button" class="btn btn-primary">Sejarah Klasifikasi Hewan</button>
        <hr>
        <p>pada link awal, "Wikipedia Hewan" akan membawa user <br> ke website wikipedia tentang hewan ketika diklik</p>
        <p>Setelah tombol diklik cepat dua kali, link awal akan<br> ditambahkan #Sejarah_klasifikasi sehingga
            membawa user <br>langsung ke wikipedia tentang Sejarah Klasifikasi Hewan <br> jika link wikipedia
            ditekan kembali</p>
    </div>
</body>

</html>
