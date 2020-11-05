

<form method="post" action="/">

       <p><label for="shortname">Enter short name like (AAPL, GOOG)</label></p>
    <p><input type="text" name="shortname" id="shortname"/></p>
   <p><button type="submit">Submit</button></p>

</form>
<hr>
<p>Name: <?php echo $data->getLongName(); ?></p>
<p>Symbol: <?php echo $data->getShortName(); ?></p>
<p>Open: <?php echo $data->getOpen(); ?></p>
<p> Previous Close: <?php echo $data->getPreviousClose(); ?></p>





