<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web PHP</title>

    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="content">
        <div class="banner">
            <header>
                <h1>Teknik Komputer & Jaringan</h1>
                <h3>SMK Muhammadiyah 2 Palembang</h3>
            </header>
        </div>

        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">Dashboard</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=galery">Galery</a></li>

                <div class="tanggal">
                    <tgl>Tanggal/Waktu: <span id="tanggalwaktu"></tgl>
                </div>
            </ul>
        </div>

        <div class="body">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                        include "page/home.php";
                        break;
                    case 'about':
                        include "page/about.php";
                        break;
                    case 'galery':
                        include "page/galery.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "page/home.php";
            }

            ?>
        </div>
    </div>
    <script>
        var dt = new Date();
        document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
    </script>
</body>

</html>