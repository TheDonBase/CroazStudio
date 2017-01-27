<?php

/*
  Created on : 2017-jan-25, 19:05:11
  Author     : TheDonBase
 */

class common {

    static function isLoggedIn() {
        $check = array("id", "username", "firstname", "lastname");
        return (session::check($check)) ? true : false;
    }

}

?>