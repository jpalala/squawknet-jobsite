<?php
	function tachyonize($salt,$string) {
		return sha1($salt . $string);
	}
?>
