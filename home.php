<?php
$titlePage='First';
require_once 'fragment/header.php';
?>
<body>
<p>

    <form action ="submit.php" method="post">
    <input type="text" name ="name"><br>
    <input type="text" name ="pwd">
    <input type="submit" value="submit" class="btn btn-success">

</form>
</p>
<div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
    <i class="fa fa-id-card" aria-hidden="true"></i>
</div>

</body>
