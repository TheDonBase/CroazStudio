<?php

/*
  Created on : 2017-jan-26, 18:06:11
  Author     : TheDonBase
 */

class admins extends model {

    function auth($username, $password) {
        $this->model->query("SELECT * FROM `users` WHERE `username`=? AND `password`=? AND `rights`=?", array($username, $password, 1));
        if ($row = $this->model->fetch_assoc()) {
            return $row;
        } else {
            return false;
        }
    }

}

?>