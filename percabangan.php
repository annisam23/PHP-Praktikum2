<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>percabangan</title>
</head>
<body>

    <form action="percabangan.php" method="post">
        Masukan nama anda : <input type="text" name="nama" id="nama"><br>
        Nilai :  <input type="number" name="nilai" id="nilai">
        <input type="submit" value="submit">
    </form>



<?php 

//variabel buat nangkep si input 
$nama = $_POST["nama"];
echo "Nama Anda : ".$nama;
$nilai =$_POST["nilai"];
//if else
//if($nilai >= 85 && $nilai <= 100){
  //  echo "<br>"."Nilai : A";
//} elseif ($nilai >= 74 && $nilai <= 84){
  //  echo "<br>"."Nilai : B";
//} elseif ($nilai >= 56 && $nilai <= 69){
  //  echo"<br>"."Nilai : C";
//} elseif ($nilai >= 36 && $nilai <= 55){
  //  echo"<br>"."Nilai : D";
//}elseif ($nilai >= 0 && $nilai <= 35){
  //  echo"<br>"."Nilai : E";
//}else{
  //  echo "<br>"."Nilai - ";
//}



switch ($nilai) {
    case $nilai >= 85 && $nilai <= 100:
        echo "<br>"."Nilai Anda Sangat Memuaskan";
        break;
    

    case $nilai >= 74 && $nilai <= 84:
        echo "<br>"."Nilai Anda Memuaskan";
        break;

    case $nilai >= 56 && $nilai <= 69:
        echo "<br>"."Nilai Anda Cukup";
        break;

    case $nilai >= 36 && $nilai <= 55:
        echo "<br>"."Nilai Anda Kurang";
        break;

    case$nilai >= 0 && $nilai <= 35:
        echo "<br>"."Nilai Anda Sangat Kurang";
        break;

    default:
        echo "<br>"."Nilai tidak ada";
        break;
}
?>
</body>
</html>