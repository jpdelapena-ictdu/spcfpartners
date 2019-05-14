<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SPCF Partner Schools</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/particles.css">
  <link rel="stylesheet" media="screen" href="css/app.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/agency.min.css" rel="stylesheet">
</head>
<body>

<!-- count particles -->
<div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div>


<!-- particles.js container -->
<div id="particles-js">
    


<div class="logo">
    <div class="image-center">
        <img class="logosize" src="img/spcf_logo_glow.png">
    </div>
</div>

<div class="partner-wrapper">
    <div class="container">
      <div class="col-md-12">
        <div class="row justify-content-center">
        @foreach($schools as $partners)
            <div class="col-md-2 col-sm-4 text-center"> 
                <a href="https://{{ $partners->url }}">
                    <figure class="figure">
                        <img class="figure-img img-fluid rounded partners-logo" width="100%" height="100%" src="{{ asset('uploads/'. $partners->logo) }}" >
                        <center>
                            <figcaption class="figure-caption" style="color:white;">{{ $partners->abbreviation }}</figcaption>
                        </center>
                    </figure>
                </a>
            </div>
        @endforeach
        </div>
      </div>
    </div>
</div>

<footer>
    <center>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <span class="footcontent"><b>SYSTEMS PLUS COLLEGE FOUNDATION</b></span>
            <br>
            <span class="footcontent">College of Computing and Information Sciences</span>
            <br>
            <span class="footcontent"><i>Mc. Arthur High Way, Balibago, Angeles City</i></span>
            <br>
            <span class="footcontent">&copy;2018</span>
            <br>
            <span class="footcontent">Powered By:</span>
            <br>
            <img class="ictdulogo" src="img/ictdulogo.png">
          </div>
        </div>
      </div>
  </center>
</footer>

</div>

<!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/app-particles.js"></script>
</body>
</html>