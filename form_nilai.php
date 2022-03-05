<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2 (GET)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      h2{
        text-align:center;
        background-color:grey;
        font-family:arial;
      }
      form{
        margin:10px;
      }
    </style>
  </head>
<body>
  <h2>FORM PENILAIAN MAHASISWA</h2>
<form action="form_nilai.php" method="GET">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text"  size ="30" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="basis data ">basis data</option>
        <option value="ddp">ddp</option>
        <option value="pw">pw</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai Uts</label> 
    <div class="col-8">
      <input id="text1" name="nilaiuts" value="" size="6" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text2" name="nilaiuas" value="" size="6" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai Tugas/ Praktikum</label> 
    <div class="col-8">
      <input id="text3" name="nilaitugas" value="" size="6" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php 
//variabel $_get menampilkan hasilnya di url sehingga tidak cocok untuk login atau dll
//sedangkan variabel $_post lebih cocok untuk karena tidak menampilkan hasil di url tetapi langsung ke action untuk ditampung



//Method POST akan mengirimkan data atau nilai langsung ke action untuk ditampung, tanpa menampilkan pada URL. 
// Sedangkan method GET akan menampilkan data/nilai pada URL, kemudian akan ditampung oleh action
 $proses = $_GET['proses'];
 $namamhs = $_GET['nama'];
 $matakuliah = $_GET['matkul'];
 $nilaiuts = $_GET['nilaiuts'];
 $nilaiuas = $_GET['nilaiuas'];
 $nilaitugas = $_GET['nilaitugas'];
 $rata2nilai = $nilaitugas + $nilaiuas + $nilaiuts;
 $dibagi = $rata2nilai / 3;


 echo "Proses : ".$proses;
 echo "<br> Nama mahasiswa : " .$namamhs;
 echo "<br> Mata Kuliah : " .$matakuliah;
 echo "<br> Nilai UTS : " .$nilaiuts;
 echo "<br> Nilai UAS : " .$nilaiuas;
 echo "<br> Nilai Tugas/Praktikum : " .$nilaitugas;
 echo "<br> Nilai Rata-Rata : " .$dibagi;
 
?>

</body>
</html>