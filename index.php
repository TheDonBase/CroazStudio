<?php

/*
  Created on : 2017-jan-25, 09:17:53
  Author     : TheDonBase
 */
error_reporting(E_ALL);

$GLOBALS["config"] = array(
    "appName" => "CroazMVC",
    "version" => "0.0.1",
    "domain" => "croazscape.no-ip.org",
    "path" => array(
        "app" => "app/",
        "core" => "core/",
        "session" => "app/sessions",
        "index" => "index.php"
    ),
    "defaults" => array(
        "controller" => "main",
        "method" => "index"
    ),
    "routes" => array(),
    "database" => array(
        "host" => "localhost",
        "username" => "root",
        "password" => "",
        "name" => "croazgames"
    )
);
$GLOBALS["instances"] = array();

require_once $GLOBALS["config"]["path"]["core"] . "autoload.php";
new router();
