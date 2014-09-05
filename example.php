<?php

// Original error messages will be overridden. 
    set_exception_handler('fuckTheHackers');
    throw new Exception("Original error message.");