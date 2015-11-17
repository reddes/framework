<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>
        <?php echo TITLE; ?>
    </title>


    <!-- LINK CSS    -->


    <!-- Bootstrap -->
    <link href="<?php echo PUBLIC_FOLDER ?>bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- CUSTOM CSS    -->
    <link href="<?php echo PUBLIC_FOLDER ?>custom.css" rel="stylesheet">

    <!-- LIBS JS    -->
    <script src="/libs/js/libs.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo PUBLIC_FOLDER ?>jquery.1.11.1/jquery.min.js"></script>

    <!--ANGULAR JS    -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo PUBLIC_FOLDER ?>bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>

<body ng-app>
    <nav class="navbar navbar-default" style="border-radius:0;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">REDDES FRAMEWORK</a>
            </div>

        </div>
    </nav>


    <div class="container">
        <div class="row col-md-12">

            <?php

use app\core\Request as Request;

$app = new App();
$app->start(new Request);


?>

        </div>

    </div>

    <footer>
        <div class='footer'>&copyReddes Development</div>
    </footer>
</body>


</html>