<?php
/*
checks if base_url is a function, if not, showawarning.
*/
if(!(function_exists('base_url'))) {

	echo "<em><tt>Assets_Helper</tt></em> requires <em><tt>url_helper</tt></em>'s <tt>base_url()</tt> function.<br> 
	Load the<em><tt> url_helper</tt></em> first, then load the <em><tt>Assets_Helper</tt></em>";
	exit();
}
/*
function css()
fetches file specified from assets/css
*/
if(!(function_exists('css'))) {

	function css($file) {


		//check for base_url, return and exit if URL helper not loaded

			return base_url() . 'assets/css/' . $file;

	}
}

/*
function js()
fetches file specified from assets/js
*/
if(!(function_exists('js'))) {

	function js($file) {
		return base_url() . 'assets/js/' . $file;
	}
}
