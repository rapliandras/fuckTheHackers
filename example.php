<?php

// Original error messages will be overridden. 
    set_exception_handler('fuckTheHackers');
    throw new Exception("Original error message.");
    
/* possible outcome: 

You have an error in your SQL syntax; check the manual that corresponds 
to your MySQL server version for the right syntax to use near 'SELECT *
FROM logins WHERE ' at line 1

*/
