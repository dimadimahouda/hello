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


    <tr>
        <?php

    for ($row =1;$row<10;$row++) {
        $column = $column + 1;
        //$row= $row+1;
        $value =  $column; ?>

        <td style="background-color: aquamarine"><?=$value?> </td>
        <?php
        }
        ?>
    </tr>
    <?php

    for ($row =1;$row<10;$row++) {
    $column = $column + 1;
    //$row= $row+1;
    $value =  $column; ?>
    <tr>
        <td style="background-color: aquamarine"><?=$value?> </td>
        <?php

        for ($row =1;$row<10;$row++) {
        $column = $column + 1;
        //$row= $row+1;
        $value =  $column*$row; ?>
        <td style="background-color: aquamarine"><?=$value?> </td>
        <?php
        }
        ?>
    </tr>
    <?php
    }
    ?>
</table>
//<?php
//$date1="12/1/2021";
//$date2= explode('/',$date1);
//var_dump(implode('-',$date2));
//foreach(get_defined_constants() as $value){
//    echo "$value<br>";
//}
//
//    ?>

<?php
$nom="hellooooo";
echo $nom;

?>
<table class="table table-striped table-bordered table-hover">
<tr>
    <td>
        char
    </td>
    <td>
        occurence
    </td>
</tr>
 <?php

foreach(count_chars($nom,1) as $character => $number){
    ?>
    <tr>

    <td><?=chr($character)?></td>
        <td><?=$number?></td>
    </tr>
    <?php
}
?>
</table >
<div class="alert alert-success" role="alert">
    hello
    <!--    <i class="fa fa-meetup" aria-hidden="true"></i>-->

</div>
</body>
</html>