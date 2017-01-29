<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Material Login Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <!-- Mixins-->
  <!-- Pen Title-->
  <div class="pen-title">
    <h1>Sistem Lelang</h1>
  </div>
  <div class="container">
    <div class="card"></div>
    <div class="card">
      <h1 class="title">Login</h1>
      <form action="{{url('/register')}}" method="get">
        <div class="input-container">
          <input type="#{type}" id="#{label}" required="required"/>
          <label for="#{label}">Username</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" id="#{label}" required="required"/>
          <label for="#{label}">Password</label>
          <div class="bar"></div>
        </div>
        <div class="button-container">
          <button type="submit"><span>Go</span></button>
        </div>
        <div class="footer"><a href="#">Forgot your password?</a></div>
      </form>
    </div>
    <div class="card alt">
      <div class="toggle" title="Daftar Akun"></div>
      <h1 class="title">Register
        <div class="close"></div>
      </h1>
      <form method="get" action="{{url('/login')}}">
        <div class="input-container">
          <input type="#{type}" id="#{label}" required="required"/>
          <label for="#{label}">E-mail Perusahaan</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" id="#{label}" required="required"/>
          <label for="#{label}">Password</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" id="#{label}" required="required"/>
          <label for="#{label}">Konfirmasi Password</label>
          <div class="bar"></div>
        </div>
        <div class="button-container">
          <button type="submit"><span>Next</span></button>
        </div>
      </form>
    </div>
  </div>
  {{-- <!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"></a> --}}
  <!-- CodePen--><a id="codepen" href="http://arionindonesia.co.id" title="Kunjungi Web" target="_blank"></a>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="js/index.js"></script>

</body>
</html>
