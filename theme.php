<head>
    <style>
        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
    </style>
</head>
<?php
$cookie_name = "theme";
$cookie_value = "1";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<body>
<form action ="resto_submit.php" method="post">
    name <input type="text" name ="name"><br>
    <input type="submit" value="submit" class="btn btn-success">
</form>

<div class="container-fluid bg-1 text-center">
    <h3>Who Am I?</h3>
    <img src="bird.jpg" class="img-circle" alt="Bird">
    <h3>I'm an adventurer</h3>
</div>

<div class="container-fluid bg-1 text-center">
    <h3>What Am I?</h3>
    <p>Lorem ipsum..</p>
</div>

<div class="container-fluid bg-1 text-center">
    <h3>Where To Find Me?</h3>
    <p>Lorem ipsum..</p>
</div>

</body>
