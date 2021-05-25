<?php
$titlePage='temperature';
require_once 'fragment/header.php';
$row=1;
$column =0;
$value=1;

?>

<body>
<p>
    <table>
    <?php

    for ($row =1;$row<10;$row++){
        $column = $column+1;
        //$row= $row+1;
        $value = $row*$column;
?>
    <tr>
        <td><?=$value?> </td>
    </tr>
    }

</table>

    ?>
</p>
<div class="alert alert-success" role="alert">
    hello
    <!--    <i class="fa fa-meetup" aria-hidden="true"></i>-->

</div>
</body>