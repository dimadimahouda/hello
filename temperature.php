<?php
$titlePage='temperature';
require_once 'fragment/header.php';
$temp=25;
$class = 'success';
?>

<body>
<p>
    <?php
    if ($temp== 25 ) {
        echo "warm";
        $class = "success";
    }
    ?>
</p>
<div class="alert alert-<?$class" role="alert">
    A simple primary alert—check it out!
    <i class="fa fa-id-card" aria-hidden="true"></i>
</div>
</body>
