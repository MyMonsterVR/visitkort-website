<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visitkort</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<ul>

  <li><a class="active" href="index">Home</a></li>
  <li><a href="CV">CV</a></li>
  <li><a href="Kontakt">Kontakt</a></li>
  <li style="float: right;"><a href="https://github.com/MyMonsterVR"><i class="fa fa-github" style="font-size:16px;"></i></a></li>

</ul>
<body>
          <div class="container" style="padding-top: 15%;">
                  <div class="row people containerColor">
                      <div class="col-md-6 col-lg-4 item" style="padding: 69px -250px 0px;"><img style="padding: 69px -250px 0px;" class="pic" src="img/INSERTAPICHERE.jpg">
                        <div class="textHandler">
                          <h3 class="name" >Rasmus Kristensen</h3>
                        </div>
                      </div>
                      <div class="col">
                          <p class="description ptext">Jeg er en dreng på 17 år som godt kan lide at programmer. Har programmeret mest i C# og Node.JS</p>
                          <div class="btnHandler">
                            <a href="CV" target="_parent"><button class="btn btn-danger btnManager" type="button">CV</button></a>
                            <a href="Kontakt" target="_parent"><button class="btn btn-danger btnManager" type="button">Kontakt</button></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div id="toastNotice" class="toast toastPos">
        <div class="toast-header">
          <strong class="mr-auto">Mail Sendt</strong>
          <small  style="padding-left: 170px;">Lige nu</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </button>
      </div>
      <div class="toast-body">
        Tak for din besked, jeg vil tjekke den hurtigst muligt
      </div>
    </div>
    
    <script src="js/bootstrap.min.js"></script>
    <?php
        require('./footer.php')
    ?>
</body>

</html>


<script type="text/javascript">
  if(window.location.search == "?sent") {
    var myAlert = document.getElementById('toastNotice');
    var bsAlert = new bootstrap.Toast(myAlert);
    bsAlert.show();
  }
</script>
