<?php
$titlePage='temperature';
require_once 'fragment/header.php';
$temp=25;
$class = 'success';
?>

<body>
<p>
    <?php
    /*if ($temp== 25 ) {
        echo "warm";
        $class = "success";
    }*/
    echo "warm";
    ?>
</p>
<div class="alert alert-success" role="alert">
    A simple primary alert—check it out!
    <i class="fa fa-id-card" aria-hidden="true"></i>
</div>
</body>
