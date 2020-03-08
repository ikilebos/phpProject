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

        <title>Tugas Kedua</title>
    </head>

    <body>
        <div class="main">

        <h1 style="text-align: center;">Spesifikasi Hp Apple Iphone</h1>
        <h2 style="text-align: center;">Tugas Kedua</h2>

        <?php
            function tanggal_indo($tanggal, $cetak_hari = false)
            {
               $hari = array(
                  1 =>    'Senin',
                  'Selasa',
                  'Rabu',
                  'Kamis',
                  'Jumat',
                  'Sabtu',
                  'Minggu'
               );
            
               $bulan = array(
                  1 =>   'Januari',
                  'Februari',
                  'Maret',
                  'April',
                  'Mei',
                  'Juni',
                  'Juli',
                  'Agustus',
                  'September',
                  'Oktober',
                  'November',
                  'Desember'
               );
            
               // $split     = explode('-', $tanggal);
            
               $split1      = explode(' ', $tanggal);
               $tgl         = $split1[0];
               $tgl_expload = explode('-', $tgl);
            
               $tgl_indo    = $tgl_expload[2] . ' ' . $bulan[(int) $tgl_expload[1]] . ' ' . $tgl_expload[0];
            
               if ($cetak_hari) {
                  $num = date('N');
                  return $hari[$num] . ', ' . $tgl_indo;
               }
               return $tgl_indo;
            }

            // memanggil function
            $waktu = date("Y-m-d H:i:s");
            echo tanggal_indo($waktu, true);
         ?>

            <hr>

        <?php

     
        $apple = [
            [
                "nama"    => "iphone 11 Pro Max ",
                "os"      => "iOS 13, upgradable to iOS 13.1",
                "cpu"     => "Hexa-core (2×2.65 GHz Vortex + 4×1.8 GHz Tempest",
                "display" => "6.5 inches, 1142 x 2688 pixels",
                "memory"  => "512 GB, 4 GB RAM",
                "batrey"  => "Li-Ion 3969 mAh",
                "camera"  => "Primary 12 MP + 12 MP + 12 MP & Secondary 7 MP",
                "harga"   => "19.500.000"
            ],
            [
                "nama"    => "iphone 11 Pro ",
                "os"      => "iOS 13, upgradable to iOS 13.1",
                "cpu"     => "Hexa-core (2×2.65 GHz Lightning + 4×1.8 GHz Thunder",
                "display" => "5.8 inches, 1125 x 2436 pixels",
                "memory"  => "512 GB, 4 GB RAM",
                "batrey"  => "Li-Ion 3046 mAh",
                "camera"  => "Primary 12 MP + 12 MP + 12 MP & Secondary 12 MP",
                "harga"   => "11.500.000"
            ],
            [
                "nama"    => "iphone XS Max ",
                "os"      => "iOS 12, upgradable to iOS 13.1",
                "cpu"     => "Hexa-core (2×2.5 GHz Vortex + 4×1.6 GHz Tempest",
                "display" => "6.5 inches, 1242 x 2688 pixels",
                "memory"  => "512 GB, 4 GB RAM",
                "batrey"  => "Li-Ion 3174 mAh",
                "camera"  => "Primary 12 MP + 12 MP & Secondary 7 MP",
                "harga"   => "11.900.000"
            ],
            [
                "nama"    => "iphone XR ",
                "os"      => "iOS 12, upgradable to iOS 13.1",
                "cpu"     => "Hexa-core (2×2.5 GHz Vortex + 4×1.6 GHz Tempest",
                "display" => "6.1 inches, 828 x 1792 pixels",
                "memory"  => "256 GB, 3 GB RAM",
                "batrey"  => "Li-Ion 2942 mAh",
                "camera"  => "Primary 12 MP & Secondary 7 MP",
                "harga"   => "9.888.000"
            ],
            [
                "nama"    => "iphone X ",
                "os"      => "iOS 11, upgradable to iOS 13.1",
                "cpu"     => "Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral",
                "display" => "5.8 inches, 1125 x 2436 pixels",
                "memory"  => "256 GB, 3 GB RAM",
                "batrey"  => "Li-Ion 2716 mAh",
                "camera"  => "Primary 12 MP + 12 MP & Secondary 7 MP",
                "harga"   => "7.500.000"
            ],
        ];
        ?>

        
            <table class="table table-bordered" border="4">
                <tr>
                    <th>Nama</th>
                    <th>OS</th>
                    <th>CPU</th>
                    <th>DISPLAY</th>
                    <th>MEMORY</th>
                    <th>BATREY</th>
                    <th>CAMERA</th>
                    <th>HARGA</th>

                </tr>
                <?php foreach ($apple as $t) { ?>
                    <tr>
                        <td><?= $t['nama']; ?></td>
                        <td><?= $t['os']; ?></td>
                        <td><?= $t['cpu']; ?></td>
                        <td><?= $t['display']; ?></td>
                        <td><?= $t['memory']; ?></td>
                        <td><?= $t['batrey']; ?></td>
                        <td><?= $t['camera']; ?></td>
                        <td><?= $t['harga']; ?></td>
                    </tr>
                <?php } ?>
            </table>




        </div>
        <script src="./js/jquery-3.4.1.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/all.js"></script>
    </body>

</html>