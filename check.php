<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  
    <title></title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500" rel="stylesheet">
    <link href="css/check.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
</head>
<body>
    
    <div class = "background">
        <h1 class="header center title">Underage Alcohol Consumption</h1>
<h5 class="white-text center header col s12 titletext">Your chance is <?php  $file = file_get_contents('outputfinal.txt');
    if ($file == '1') { echo "high";}
    else {echo "low";}?></h5>
        <h4 class="white-text center header col s12 titletext">Your exact probability is <?php echo $file2 = file_get_contents('outputprob.txt')?></h4>
        <h4 class="white-text center header col s12 titletext">Logistic regression algorithm accuracy: <?php echo $file3 = file_get_contents('accuracy.txt')?></h4>
        </div>
    </body>
</html>