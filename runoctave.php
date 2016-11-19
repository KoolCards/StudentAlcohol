
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  
    <title>Lynbrook FTC</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500" rel="stylesheet">
    
</head>
<body>
<?php $sex=$_POST["sex"]; ?>
<?php $age=$_POST["age"]; ?>
    <?php $address=$_POST["address"]; ?>
    <?php $educationm=$_POST["educationm"]; ?>
    <?php $educationf=$_POST["educationf"]; ?>
    <?php $studytime=$_POST["studytime"]; ?>
    <?php $supp=$_POST["supp"]; ?>
    <?php $failedclasses=$_POST["failedclasses"]; ?>
    <?php $extra=$_POST["extra"]; ?>
    <?php $higher=$_POST["higher"]; ?>
    <?php $famrel=$_POST["famrel"]; ?>
    <?php $freetime=$_POST["freetime"]; ?>
    <?php $friends=$_POST["friends"]; ?>
    <?php $absent=$_POST["absent"]; ?>
<?php
$myfile = fopen("octaveinput.txt", "w");
    fwrite($myfile, $sex);
    fwrite($myfile, ",");
    fwrite($myfile, $age);
    fwrite($myfile, ",");
    fwrite($myfile, $address);
    fwrite($myfile, ",");
    fwrite($myfile, $educationm);
    fwrite($myfile, ",");
    fwrite($myfile, $educationf);
    fwrite($myfile, ",");
    fwrite($myfile, $studytime);
    fwrite($myfile, ",");
    fwrite($myfile, $supp);
    fwrite($myfile, ",");
    fwrite($myfile, $failedclasses);
    fwrite($myfile, ",");
    fwrite($myfile, $extra);
    fwrite($myfile, ",");
    fwrite($myfile, $higher);
    fwrite($myfile, ",");
    fwrite($myfile, $famrel);
    fwrite($myfile, ",");
    fwrite($myfile, $freetime);
    fwrite($myfile, ",");
    fwrite($myfile, $friends);
    fwrite($myfile, ",");
    fwrite($myfile, $absent);
?>
    <div class = "section background">
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center title">Underage Alcohol Consumption</h1>
      <div class="row center">
        <form action="http://localhost/check.php" class = "form-text white-text" method = "post"><input type="Submit" value = "View my Results" class = "finalbutton submitbutton" id = "done">
</form>
      </div>
          <div class="container">
    <div class="section">
        
    <script>
        </script>

  </div>
        </div>
      </div>
        </div>
    </div>
      
</body>
</html>