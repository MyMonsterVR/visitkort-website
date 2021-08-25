<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cstyles.css">
  <title>Visitkort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <ul>
    <li><a href="index">Hjem</a></li>
    <li><a href="CV">CV</a></li>
    <li><a class="active" href="Kontakt">Kontakt</a></li>
    <li style="float: right;"><a href="https://github.com/MyMonsterVR"><i class="fa fa-github" style="font-size:16px;"></i></a></li>
  </ul>
  <div id="particles-js"></div>
  <div class="background">
<div class="container">
  <div class="screen">
    <div class="screen-header">
      <div class="screen-header-right">
        <div class="screen-header-ellipsis"></div>
        <div class="screen-header-ellipsis"></div>
        <div class="screen-header-ellipsis"></div>
      </div>
    </div>
    <div class="screen-body">
      <div class="screen-body-item left">
        <div class="app-title">
          <span>KONTAKT</span>
          <span>MIG</span>
        </div>
        <div class="app-contact">TELEFON: +0 00000000</div>
      </div>
    <form method="POST" action="contact.php">
      <div class="screen-body-item">
        <div class="app-form">
          <div class="app-form-group">
              <input class="app-form-control" placeholder="NAVN" placeholder="dit navn" name="sname" required>
          </div>
          <div class="app-form-group">
            <input class="app-form-control" placeholder="EMAIL" name="email" type="email" required>
          </div>
          <div class="app-form-group message">
            <input class="app-form-control" placeholder="BESKED" name="txtmessage" required>
          </div>
          <div class="app-form-group buttons">
            <button class="app-form-button" name="submit">SEND</button>
          </div>
        </div>
    </form>
      </div>
    </div>
  </div>

</div>
</div>

<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<?php
require ('./footer.php')
?>

</body>

</html>
