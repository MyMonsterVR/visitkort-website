<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">

    <title>Visitkort</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <ul>
      <li><a href="index">Home</a></li>
      <li><a class="active" href="CV">CV</a></li>
      <li><a href="Kontakt">Kontakt</a></li>
      <li style="float: right;"><a href="https://github.com/MyMonsterVR"><i class="fa fa-github" style="font-size:16px;"></i></a></li>
    </ul>

    <div class="cvarticle">
          <embed src="Files/INSERTCVFILE.pdf" type="application/pdf">
    </div>

    <?php
        require('./footer.php')
    ?>
  </body>
</html>
