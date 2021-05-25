<?php
$titlePage='temperature';
require_once 'fragment/header.php';
$temp=-25;
$class = "success";
$text="warm";
$icon="meetup";
?>

<body>
<p>
    <?php
    if ($temp== 25 ) {
        $text="warm";
        $class = "success";
        $icon="meetup";
    }
    elseif ($temp== -25 )
    {
        $text="froid";
        $class = "warning";
        $icon="free-code-camp";
    }
    ?>
</p>
<div class="alert alert-<?=$class?>" role="alert">
    <?=$text?>
<!--    <i class="fa fa-meetup" aria-hidden="true"></i>-->

</div>
</body>
