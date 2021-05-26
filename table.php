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
<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-light">
<tr>
    <td>
        char
    </td>
    <td>
        occurence
    </td>
</tr></thead>
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
<?php
$arr = array(1, 2, 3, 4);
$i=0;
foreach ($arr as &$value) {
    $value = $value * 2;

    echo $arr[$i];
    $i=$i+1;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
?>
<div class="alert alert-success" role="alert">
    hello it's me houda
    <!--    <i class="fa fa-meetup" aria-hidden="true"></i>-->

</div>
</body>
</html>