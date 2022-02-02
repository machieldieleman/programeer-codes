<?php
include 'header.inc.php';
?>
<style>
    .homepage{
        background-color: black;
    }
</style>
<div class="welkom"><h1>welkom op vakantiehuisjes.nl</h1>
<form action="search.php">
<div class="land">selecteer land:<br><input type="text" name="land"/></div>
<div class="price">wat mag het kosten:<br><input type="number" name="price"/></div>
<button type="submit" class="go-button">go</button>
</form>
</div>
