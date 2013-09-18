<?
if (isset($_POST['post64'])) {
	$b64 = base64_decode($_POST['post64']);
	unset($_POST['post64']);
	$start = 0;
	while ( ($amp = strpos($b64, '&', $start)) !== false ) {
		$substr = urldecode(substr($b64, $start, $amp - $start));
		if (preg_match('/^(.*)=(.*)$/', $substr, $matches)) {
			if (substr($matches[1], -2) == '[]') { // Append to an array by name? (i.e. ends with '[]')
				$_POST[substr($matches[1],0,-2)][] = $matches[2];
			} else // Simple set
				$_POST[$matches[1]] = $matches[2];
		}
		$start = $amp + 1;
	}
}
?>
