<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
    <div id="step3" class="steps">
    <p onclick="next(3);">next</p>
    <p onclick="prev(3)">prev</p>
    </div>

    <div id="step2" class="steps">
    <p onclick="next(2);">next</p>
    <p onclick="prev(2)">prev</p>
    </div>

    <div id="step1" class="steps">
    <p onclick="next(1);">next</p>
    <p onclick="prev(1)">prev</p>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nano.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>