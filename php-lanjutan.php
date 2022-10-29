<?php

//$nama="Hendry";

/*
echo $nama;
echo "</br>";
echo $nama;
echo "</br>";
echo $nama;
echo "</br>";
echo $nama;
echo "</br>";
echo $nama;
*/

//perulangan
// $no=10;

/*
$i=0;
for ($i=0; $i <$no ; $i++) { 
    $n=$i+1;
    echo $n." ".$nama. "<br/>";
}
*/

/*
$i=0;
$no=10;

while ($i <$no) {
    $n=$i+1;
    echo $n." ".$nama. "<br/>";
    $i++;
}
*/

/*
$i=0;
$no=10;
do {
    $n=$i+1;
    echo $n." ".$nama. "<br/>";
    $i++;
} while ($i <$no);
*/

// $data=array('Suho','Xiumin','Lay','Baekhyun','Chen','Chanyeol','D.O','Kai','Sehun');

// echo $data[5];
/*
foreach ($data as $value) {
    echo $value."<br>";
}
*/

//percabangan
/*
if ($nama="Afifa") {
    echo $nama." adalah peserta MSIB SEAL Batch 3";
}else if ($nama="Talia"){
    echo $nama." peserta magang Central Ai";
}else{
    echo $nama." bukan peserta magang Central Ai";
}
*/

/*
switch ($nama) {
    case 'Afifa':
        echo $pesan=$nama." adalah peserta MSIB SEAL Batch 3";
        break;
        case 'Talia':
            echo $pesan=$nama." peserta magang Central Ai";
            break;
            default:
            $pesan=$nama." bukan peserta magang Central Ai";
}
echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Afifa":
                    $pesan = $_POST['nama']." adalah peserta MSIB SEAL Batch 3";
                break;
                case "Talia":
                    $pesan = $_POST['nama']." adalah peserta magang Central Ai";
                break;
                case "Puma":
                    $pesan = $_POST['nama']." adalah kucing";
                break;
                default:
                    $pesan = $_POST['nama']." bukan mahasiswa";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah.";
        }
    ?>
</body>
</html>