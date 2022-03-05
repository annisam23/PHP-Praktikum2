<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2(POST)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
    h2{
        text-align:center;
        background-color:plum;
        font-family:arial;
        margin:1em;
      }
     form{
       margin:10px;
       padding:1em;
     }
     h5{
       text-align:right;
     }
 </style>
</head>
<body>
<h2>Form Belanja</h2>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
    <form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="mesincuci"> 
        <label for="produk_0" class="custom-control-label">Mesin cuci</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_1" class="custom-control-label">tv</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_2" class="custom-control-label">kulkas</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text1" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
		</div>
		<div class="col-md-6">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">Barang</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TV</td>
      <td>4.200.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Kulkas</td>
      <td>3.100.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mesin Cuci</td>
      <td>3.800.000</td>
    </tr>
    <h5>Harga dapat berubah setiap saat.</h5>
  </tbody>
</table>
		</div>
	</div>
</div>


    
  



<?php
$proses = $_POST['proses'];
$namacostumer = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$produk = $produk;

echo "<br> Nama pembeli: " .$namacostumer;
echo "<br> Produk : " .$produk;
echo "<br> Jumlah Beli : " .$jumlah;

switch ($produk) {
  case $produk == "kulkas":
    echo "<br> Harganya : Rp. ".$jumlah * 3800000;
      break;
  
  case $produk == "tv":
    echo "<br> Harganya : Rp. ".$jumlah * 4200000;;
        break;

    case $produk == "mesincuci":
    echo "<br> Harganya : Rp. ".$jumlah * 4100000;;
        break;

  default:
    echo "tidak tersedia";
      break;
}
?>
</body>
</html>