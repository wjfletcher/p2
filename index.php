<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="DWA portfolio">
    <meta name="author" content="Warren Fletcher">

    <title>DWA Portfolio</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="css/custom.css">

    

</head>

<body>
    <?php require 'logic.php'; ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Warren Fletcher</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="title">Portfolio</li>
                            <li><a href="http://p1.wjfletcher.me">View</a></li>
                            <li><a href="https://github.com/wjfletcher/p1">Github</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project 2 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="title">XKCD Password Generator</li>
                            <li><a href="http://p2.wjfletcher.me">View</a></li>
                            <li><a href="https://github.com/wjfletcher/p2">Github</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project 3 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="title">Developers Best Friend</li>
                            <li><a href="http://p3.wjfletcher.me">View</a></li>
                            <li><a href="https://github.com/wjfletcher/p3">Github</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project 4 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">View</a></li>
                            <li><a href="#">Github</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="jumbotron">
            <h1>XKCD Password Generator</h1>
            <h2>By using the form below, this generator produces a password made up of a number common english words. You can choose how many words you want (up to 10), whether it contains a number, and whether it contains a special character (# ,$ , %, etc.). Give it a go!</h2>
            <br>
            <h3><?php
if (is_array($password)) {
            foreach ($password as $value){
    
    echo $words[$password[$count]];
    echo "-";
    $count++;
};
} else { echo $words[$password];
       };

if ($_POST["number"] == TRUE) {
    echo rand(0,9);
}

echo $chars[$char];
?>
            </h3>
                <br>
                <form method="post" action="index.php">
                    <p>How many words?</p>
                    <input type="number" name="words" id="words" max="10" placeholder="number from 1 to 10" required>
                    <br><br>
                    <input type="checkbox" name="number" id="number" value="TRUE">
                    <label for="number">Include number</label>
                    <br>
                    <input type="checkbox" name="spechar" id="spechar" value="TRUE">
                    <label for="spechar">Include special character</label>
                    <br><br>
                    <input type="submit" value="Get password">
                </form>

        </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>