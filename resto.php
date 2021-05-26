<?php
$titlePage='First';
require_once 'fragment/header.php';

?>
<body>
<p>

<form action ="resto_submit.php" method="post">
   name <input type="text" name ="name"><br>
    subname<input type="text" name ="prenom"><br>
  sandwich number  <input type="number" name ="nbr"><br>
    <div class="form-group shadow-textarea">
        <label for="exampleFormControlTextarea6">adresse:</label>
        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." name cols="adress"></textarea>
    </div>
    <select class="form-select" aria-label="Default select example" name="type">
        <option selected>Open this select menu</option>
        <option value="1">Viande</option>
        <option value="2">poulet</option>
        <option value="3">Escalope</option>
    </select>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="harissa" name = "ingred[]">
        <label class="form-check-label" for="inlineCheckbox1">harissa</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="salade" name = "ingred[]">
        <label class="form-check-label" for="inlineCheckbox2">salada</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="mayo" name = "ingred[]" >
        <label class="form-check-label" for="inlineCheckbox3">mayonaise </label>
    </div>

    <input type="submit" value="submit" class="btn btn-success">

</form>
</p>
<div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
    <i class="fa fa-id-card" aria-hidden="true"></i>
</div>

</body>

