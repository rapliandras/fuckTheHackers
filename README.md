fuckTheHackers
==============

Show random error messages for hackers only.

Usage
====

The error texts have to be specified in an array inside the `fuckTheHackers()` function (index.php). With some magic, the script sets a random element of this array to be the new exception message. Call `set_exception_handler()` in a common file, eg. your app controller or index.php. This causes the original error to be rethrown with the new message. If the original exception was thrown on a page, the new error message will never change on pageload. 

Note
====

Due to the nature of `set_exception_handler()`, as of now it's impossible to put `fuckTheHackers()` into a class, and must be located in the global namespace as a regular function.
