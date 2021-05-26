<?php
$titlePage='First';
require_once 'fragment/header.php';
?>
</head>
<body>
<p>
    <?php
    $text="";
    if(isset($_POST['name']) && isset($_POST['pwd'])) {
        if ($_POST['name']=="houda" && $_POST['pwd']=="1234"){

            $text= "hello ". $_POST['name'];
            echo $text;
        } else {
           $text= "name error ";
            echo $text;
        }
    }
    ?>

</p>
<div class="alert alert-primary" role="alert">
    bonjour <?=$text?>
    bonjour <?=$_POST['name']?>
    <i class="fa fa-id-card" aria-hidden="true"></i>
</div>

</body>

