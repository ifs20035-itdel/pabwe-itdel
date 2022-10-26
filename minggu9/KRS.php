<!-- 
    Nama File       : KRS.php 
    NIM             : 11S20035
    Nama Mahasiswa  : Michael Napitupulu 
-->

<?php 
    $Nama = "Michael A.S. Napitupulu";
    $NIM = "11S20035";

    $data_kode_sks = array(
        "11S3109" => 4,
        "11S3101" => 3,
        "10S3109" => 3,
        "11S3116" => 3,
        "11S3112" => 3,
        "11S3105" => 3,
    );
    $data_kode_matkul = array(
        "11S3109" => 'Pengembangan Aplikasi Berbasis Web',
        "11S3101" => 'Analisis dan Perancangan Perangkat Lunak',
        "10S3109" => 'Kecerdasan Buatan',
        "11S3116" => 'Teori Bahasa Formal dan Automata',
        "11S3112" => 'Pengujian dan Penjaminan Mutu Perangkat Lunak',
        "11S3105" => 'Kriptografi dan Keamanan Informasi',
    );

    $Total = 0;
    foreach($data_kode_sks as $sk ){
        $Total+=$sk;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>KRS</title>
        <style>
            hr{
                border: 3px lightgrey solid;
                width: 1000px;
                margin-left: 0;
            }
            table, td{
                border-collapse: collapse;
                background-color: none;
                text-align: left;
                padding-bottom: 5px;
                padding-top: 5px;
            }
            </style>
    </head>
    <body style="font-family:sans-serif;">
        <table>
            <h2>Kartu Rencana Studi(KRS)</h2>
            <hr>
            <tr>
                <th scope="col" style="column-width:250px;">NIM</th>
                <th scope="col" style="column-width:600px;"><?php echo $NIM;?></th>
                <th scope="col" style="column-width:150px;"></th>
            </tr>
            <tr>
                <th scope="col" style="column-width:250px;">Nama</th>
                <th scope="col" style="column-width:600px;"><?php echo $Nama;?></th>
                <th scope="col" style="column-width:150px;"></th>
            </tr>
        </table><br><br>
        <table>
            <thead style="border-bottom: 2px lightgrey solid">
                <th scope="col" style="column-width:250px;">Kode Mata Kuliah</th>
                <th scope="col" style="column-width:600px;">Nama Mata Kuliah</th>
                <th scope="col" style="column-width:150px;">SKS</th>
            </thead>
            <?php
            $j=0;
            $sks = array_values($data_kode_sks);
            $kode_mk= array_keys($data_kode_matkul);
            $matkul = array_values($data_kode_matkul);
            // echo "<table border =\"1\" ";
            for ($i=0; $i < sizeof($data_kode_matkul); $i++) { 
                echo "<tr style=\"border-bottom: 2px lightgrey solid;\">\n";
                echo ("<td>" . $kode_mk[$j] . " </td> \n");
                echo ("<td> " . $matkul[$j] . " </td> \n");
                echo ("<td> " . $sks[$j] . " </td> \n");
                echo "</tr>";
                $j+=1;
                }
                ?>
            <tfoot>
                <td>TOTAL</td>
                <td></td>
                <td><?php echo $Total;?></td>
            </tfoot>
        </table>
    </body>
</html>