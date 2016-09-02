<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spent</title>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
    <div id="step3" class="steps">
    <p onclick="next(3);">next</p>
    <p onclick="prev(3);">prev</p>
    </div>

    <div id="step2" class="steps">
        <div class="cwidth">
            <div class="navbar">
                <i class="fa fa-caret-left" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <div id="step1" class="steps">
        <div id="header">
            <h1>Spent</h1>
        </div>
        <div id="users">
            <div class="user_buttons" onclick="input_user(0)">T</div>
            <div class="user_buttons" onclick="input_user(1)">J</div>
            <div class="user_buttons" onclick="input_user(2)">
                <i class="fa fa-adjust" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nano.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>