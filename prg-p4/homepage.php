<?php
include 'header.inc.php';
?>
<style>
    .homepage{
        background-color: black;
    }
</style>
<div class="welkom">welkom op vakantiehuisjes.nl</div>
<form action="search.php">
<div class="land">select land:<input type="text" name="land"/></div>
<div class="price">price range:<input type="double" name="price"/></div>
<button type="submit" class="go-button">go</button>
</form>