fuckTheHackers
==============

What if you could change the error messages on your site to mislead hackers? Fake the fingerprint of your system, expose fake paths, table names or throw errors in plugins not even on your system! FuckTheHackers does just that. The fuckTheHackers library replaces all existing exceptions with forged ones.


Usage
====

The error texts have to be specified in an array inside the `fuckTheHackers()` function (index.php). With some magic, the script sets a random element of this array to be the new exception message. Call `set_exception_handler()` in a common file, eg. your app controller or index.php. This causes the original error to be rethrown with the new message. If the original exception was thrown on a page, the new error message will never change on pageload. 

Note
====

Due to the nature of `set_exception_handler()`, as of now it's impossible to put `fuckTheHackers()` into a class, and must be located in the global namespace as a regular function.
