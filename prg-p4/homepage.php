<?php
include 'header.inc.php';
?>
<style>
    .homepage{
        background-color: black;
    }
</style>
<div class="welkom"><h2>welkom op vakantiehuisjes.nl</h2>
<form action="search.php">
<div class="land">select land:<input type="text" name="land"/></div>
<div class="price">price range:<input type="double" name="price"/></div>
<button type="submit" class="go-button">go</button>
</form>
</div>
