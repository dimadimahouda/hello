<?php
$titlePage='temperature';
require_once 'fragment/header.php';
$temp=25;
$class = "success";
$text="warm"
?>

<body>
<p>
    <?php
    if ($temp== 25 ) {
        $text="warm";
        $class = "success";
    }

    ?>
</p>
<div class="alert alert-sucess>" role="alert">
    text
    <i class="fa fa-id-card" aria-hidden="true"></i>
</div>
</body>
