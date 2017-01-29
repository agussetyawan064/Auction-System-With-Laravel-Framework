<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Simple Dark Form</title>



      <link rel="stylesheet" href="css/simple-dark.css">


</head>

<body>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
<div class='login'>
  <h2>Profil Perusahaan</h2>
  <form class="" action="{{url('/beranda')}}" method="get">
    <input name='nama_perusahaan' placeholder='Nama Perusahaan' type='text' required />
    <input name='alamat_perusahaan' placeholder='Alamat' type='text' required />
    <input name='kota_perusahaan' placeholder='Kota Perusahaan' type='text' required />
    <input name='npwp' placeholder='Nomor Pokok Wajib Pajak (NPWP)' type='text' required />
    <input name='no_telepon' placeholder='No Telp' type='text' required />
    <div class='agree'>
      <input id='agree' name='agree' type='checkbox' required />
      <label for='agree'></label>Accept rules and conditions
    </div>
    <input class='animated' type='submit' value="Konfirmasi Data">
    <a class='forgot' href="{{url('/login')}}">Already have an account?</a>
  </form>
</div>

    <script src="js/simple-dark.js"></script>

</body>
</html>
