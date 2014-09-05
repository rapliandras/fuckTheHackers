<?php
    /**
     * @brief FUCKWARE
     * @details An ultimate software to fuck up hackers
     * @throws random but unique messages for pages inaccessible for non-hackers
     * @author Andras Rapli, http://rapliandras.hu, twitter: @rapliandras
     */

    function fuckTheHackers(){

        // Generates a pack of love and random static error messages to fuck with hackers

        $errors = array(

            "You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT * FROM logins WHERE ' at line 1",

            "You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '''')' at line 2'",

            "Parse error: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM in /var/www/public_html/private/b_request.php on line 29",

            "Parse error: syntax error, unexpected '\$this' in /var/www/public_html/private/b_request.php on line 250"

            );

        $fucktor = hexdec(md5($_SERVER['REQUEST_URI']));

        $dist = $fucktor / count($errors);

        $errors_with_weight = array();

        $max_spread = $fucktor * 2;

        $modified_fucktor = substr($fucktor,2,4);

        while($modified_fucktor > count($errors)){
            $modified_fucktor = $modified_fucktor >> 1;
        }

        $modified_fucktor = intval($modified_fucktor);
            
        $selected_error = $errors[$modified_fucktor-1];

        echo "<h1>$selected_error</h1>";
    }