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
    <div id="nav_bar" class="nav_bar_hide">
            <div class="cwidth">
                <a id="nav_button" onclick="prev(2);">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </a>
            </div>
            <a onclick="reset()">
                <div id="nav_logo">
                    Spent
                </div>
            </a>
        </div>
    
    <div id="step3" class="steps">
        <div class="cwidth">
            <div id="form">
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="amount" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
                <textarea class="form-control" rows="5" id="description" ></textarea>
            </div>
            <div id="submit">
                Done
            </div>
        </div>
    </div>

    <div id="step2" class="steps">
        <div id="user_summary">
            <div id="greeting">
                Hi <span id="greeting_username">Tim</span>, you have spent
            </div>
            <div id="user_summary_amount">1,000.34</div>
            <div id="since_date">
                - Since -<br/>
                24 Dec 2016
            </div>
        </div>
        <div class="cats cwidth">
            <div class="cat" id="cat1" onclick="next(2)">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
                <div class="cat_name">Food</div>
            </div>
            <div class="cat" id="cat1" onclick="next(2)">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <div class="cat_name">Bills</div>
            </div>
            <div class="cat" id="cat1" onclick="next(2)">
                <i class="fa fa-star" aria-hidden="true"></i>
                <div class="cat_name">Entertainment</div>
            </div>
             <div class="cat" id="cat1" onclick="next(2)">
               <i class="fa fa-bus" aria-hidden="true"></i>
                <div class="cat_name">Transportation</div>
            </div>
            <div class="cat" id="cat1" onclick="next(2)">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <div class="cat_name">Necessities</div>
            </div>
            <div class="cat" id="cat1" onclick="next(2)">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
                <div class="cat_name">Other</div>
            </div>
            <div clear="both"></div>
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