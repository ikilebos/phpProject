<html>

<div class="container">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./css/bootstrap.css">

        <!--font awesome-->
        <link rel="stylesheet" href="./css/all.css">

        <!--My Css-->
        <link rel="stylesheet" href="./css/style.css">

        <title>Tugas Pertama</title>
    </head>

    <body>

        <?php
        // FUNGSI BULAN DALAM BAHASA INDONESIA
        function bulan($bln)
        {
            $bulan = $bln;
            switch ($bulan) {
                case 1:
                    $bulan = "Januari";
                    break;
                case 2:
                    $bulan = "Februari";
                    break;
                case 3:
                    $bulan = "Maret";
                    break;
                case 4:
                    $bulan = "April";
                    break;
                case 5:
                    $bulan = "Mei";
                    break;
                case 6:
                    $bulan = "Juni";
                    break;
                case 7:
                    $bulan = "Juli";
                    break;
                case 8:
                    $bulan = "Agustus";
                    break;
                case 9:
                    $bulan = "September";
                    break;
                case 10:
                    $bulan = "Oktober";
                    break;
                case 11:
                    $bulan = "November";
                    break;
                case 12:
                    $bulan = "Desember";
                    break;
            }
            return $bulan;
        }

        //CARA MEMANGGIL FUNGSI BULAN

        $bulan = bulan(date("m"));
        echo $bulan;
        ?>


        <hr>


        <!-- <?php

                for ($ganjil = 1; $ganjil <= 20; $ganjil++) {
                    if ($ganjil % 2 == 1) {

                        echo $ganjil;
                    }
                }

                ?> -->

        <form action="" method="post">
            banyak : <input type="text" name="banyak" value="<?php echo (isset($_POST['banyak'])) ? $_POST['banyak'] : '' ?> "><br><br>
            bilangan : <select name="bil">
                <option value="ganjil">Ganjil</option>
                <option value="genap">Genap</option>
                <option value="semua">Semua Bilangan</option>
            </select><br>
            <br><input type="submit" name="tampil" value="tampil">
        </form>

        <?php
        if (isset($_POST['tampil'])) {
            $ulang = $_POST['banyak'];
            $jenis = $_POST['bil'];

            if ($jenis == 'genap') {
                for ($i = 1; $i <= $ulang; $i++) {
                    if ($i % 2 == 0) {
                        echo $i . ", ";
                    }
                }
            } else if ($jenis == 'ganjil') {
                for ($i = 1; $i <= $ulang; $i++) {
                    if ($i % 2 !== 0) {
                        echo $i . ", ";
                    }
                }
            } else {
                for ($i = 1; $i <= $ulang; $i++) {
                    echo $i . ", ";
                }
            }
        }
        ?>




        <hr>
        <br>

        <!-- menampilkan array dengan menggunakan for -->

        <?php
        $Biodata = array(1 => "Muhammad Rizky", "Laki-laki", "12/12/12", "Palembang", "JL. Rambutan Dalam 30 illir");
        echo $Biodata[1] . "<br>"; // index 0
        echo $Biodata[2] . "<br>"; // index 1
        echo $Biodata[3] . "<br>"; // index 2
        echo $Biodata[4] . "<br>"; // index 3
        echo $Biodata[5] . "<br>"; // index 4

        echo '<hr>';
        // kalo banyak dak perlu skok skok
        for ($x = 1; $x <= count($Biodata); $x++) {
            echo $Biodata[$x] . "<br>";
        }
        echo "<hr>";
        // menampilkan array menggunakan foreach
        foreach ($Biodata as $kunci => $isi) {
            echo $kunci . "=>" . $isi . "<br>";
        }

        echo "<hr>";

        $namamahasiswas = [
            [
                "nama" => "budi santoso",
                "nim" => "022115115",
                "jenis_kelamin" => "laki-laki",
                "jurusan" => "sistem informatika",
                "semester" => "7",
                "ipk" => "3.45",
                "email" => [
                    "budisantoso@gmail.com",
                    "budisinting@gmail.com"
                ],
                "pembimbing" => [
                    "p1" => "dr.dery susanti s.kom.,m.kom.,baskom.",
                    "p2" => "fahmi najis sumanto s.kom.,m.mkom.,baskom"
                ],
            ],
            [
                "nama" => "sontoloyo",
                "nim" => "0245421",
                "jenis_kelamin" => "waria",
                "jurusan" => "kecantikan",
                "semester" => "14",
                "ipk" => "1.45",
                "email" => [
                    "sontoloyo@gmail.com",
                    "bsontoloyo@yahoo.com"
                ],
                "pembimbing" => [
                    "p1" => "dr.dery susanti s.kom.,m.kom.,baskom.",
                    "p2" => "fahmi najis sumanto s.kom.,m.mkom.,baskom"
                ],
            ],

        ];



        foreach ($namamahasiswas as $namamahasiswa) {
            echo "Nama Mahasiswa : ";
            echo $namamahasiswa['nama'] . "<br>";
            echo "Nim : ";
            echo $namamahasiswa['nim'] . "<br>";
            echo "Jenis Kelamin :";
            echo $namamahasiswa['jenis_kelamin'] . "<br>";
            echo "Jurusan : ";
            echo $namamahasiswa['jurusan'] . "<br>";
            echo "Semester : ";
            echo $namamahasiswa['semester'] . "<br>";
            echo "ipk : ";
            echo $namamahasiswa['ipk'] . "<br>";
            if (is_array($namamahasiswa['email'])) {
                echo "Email : ";
                foreach ($namamahasiswa['email'] as $email) {
                    echo "<li>" . $email . "</li>";
                }
            }
            if (is_array($namamahasiswa['pembimbing'])) {
                echo "pembimbing : ";
                foreach ($namamahasiswa['pembimbing'] as $email) {
                    echo "<li>" . $email . "</li>";
                }
            }

            echo "<hr>";
        }






        ?>

        <hr>


        <?php
        function TanggalIndonesia($date)
        {
            $date = date('Y-m-d', strtotime($date));
            if ($date == '0000-00-00')
                return 'Tanggal Kosong';

            $tgl = substr($date, 8, 2);
            $bln = substr($date, 5, 2);
            $thn = substr($date, 0, 4);

            switch ($bln) {
                case 1: {
                        $bln = 'Januari';
                    }
                    break;
                case 2: {
                        $bln = 'Februari';
                    }
                    break;
                case 3: {
                        $bln = 'Maret';
                    }
                    break;
                case 4: {
                        $bln = 'April';
                    }
                    break;
                case 5: {
                        $bln = 'Mei';
                    }
                    break;
                case 6: {
                        $bln = "Juni";
                    }
                    break;
                case 7: {
                        $bln = 'Juli';
                    }
                    break;
                case 8: {
                        $bln = 'Agustus';
                    }
                    break;
                case 9: {
                        $bln = 'September';
                    }
                    break;
                case 10: {
                        $bln = 'Oktober';
                    }
                    break;
                case 11: {
                        $bln = 'November';
                    }
                    break;
                case 12: {
                        $bln = 'Desember';
                    }
                    break;
                default: {
                        $bln = 'UnKnown';
                    }
                    break;
            }

            $hari = date('N', strtotime($date));
            switch ($hari) {
                case 1: {
                        $hari = 'Senin';
                    }
                    break;
                case 2: {
                        $hari = 'Selasa';
                    }
                    break;
                case 3: {
                        $hari = 'Rabu';
                    }
                    break;
                case 4: {
                        $hari = 'Kamis';
                    }
                    break;
                case 5: {
                        $hari = "Jum'at";
                    }
                    break;
                case 6: {
                        $hari = 'Sabtu';
                    }
                    break;
                case 7: {
                        $hari = 'Minggu';
                    }
                    break;
                default: {
                        $hari = 'UnKnown';
                    }
                    break;
            }

            $tanggalIndonesia = "Hari " . $hari . ", Tanggal " . $tgl . " " . $bln . " " . $thn;
            return $tanggalIndonesia;
        }

        ?>
        <!-- Tanggal PHP : <?= date('Y-m-d') ?> -->
        Tanggal Indonesia : <?= TanggalIndonesia(date('Y-m-d')) ?>
</div>

<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/all.js"></script>
</body>

</html>