<h1>Huge POST submission example</h1>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../base64.js"></script>
<script src="../overload.js"></script>
<form action="decode.php" method="POST">

	<? foreach (range(1, 2000) as $i) { // Generate lots of fake data?>
	<input type="hidden" name="input[]" value="<?=rand(1,99999)?>"/>
	<? } ?>

	<input type="submit">

</form>
