<?php

/*
  Created on : 2017-jan-25, 19:06:51
  Author     : TheDonBase
 */

class admin extends controller {

    function index() {
        if (common::isLoggedIn()) {
            url::redir("/admin/home");
        } else {
            if (url::post("username") && url::post("password")) {
                $admins = new admins();
                if ($user = $admins->auth(url::post("username"), url::post("password"))) {
                    session::set("id", $user["id"]);
                    session::set("username", $user["username"]);
                    session::set("firstname", $user["firstname"]);
                    session::set("lastname", $user["lastname"]);
                    url::redir("/admin/home");
                } else {
                    $data = array("error" => "Username or Password Incorrect.");
                    load::view("admin/login", $data);
                }
            } else {
                load::view("admin/login");
            }
        }
    }

    function home() {
        if (!common::isLoggedIn()) {
            url::redir("/");
        } else {
            load::view("admin/home");
        }
    }

    function doLogout() {
        session::endSession();
        url::redir("/");
    }

}
