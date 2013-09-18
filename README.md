PHP-PostOverload
================
A kludge to post massive amounts of POST data between HTML/JavaScript and PHP.

PHP has the [max_input_vars](http://www.php.net/manual/en/info.configuration.php#ini.max-input-vars) variable which restricts the amount of information PHP can import into the POST variable. But what if you have massive amounts of variables that you absolutely have to provide to PHP without hitting this limit?

This module works by:

1. Injecting some code into the form submission process that assesses wheteher the form is too big and if so:
2. Serializing all form inputs and removing the originals.
3. Encoding the seralized inputs into a special variable called 'post64' and submitting this to the server.
4. Meanwhile on the server - checking if the 'post64' variable exists and if so reversing the above process.
5. Feel ill yet?

This module is really just a horrible kludge around submitting massive amounts of form information to PHP from a massive, massive HTML form and shouldn't be used for any serious purpose.

See the form.php file for an example of this in action.


Usage
=====
NOTE: This module requires some version of jQuery and the included base64.js file.

In your HTML file:

	<script src="/path/to/this/module/base64.js"/>
	<script src="/path/to/this/module/overload.js"/>

And in your reciving PHP file:

	include('/path/to/this/module/overload.php');
