<?php

/*
  Created on : 2017-jan-25, 10:50:23
  Author     : TheDonBase
 */

    class model{
        public $model;
        function __construct() {
            $this->model = new database();
            $this->model->connect($GLOBALS["config"]["database"]["host"], $GLOBALS["config"]["database"]["username"],
                    $GLOBALS["config"]["database"]["password"], $GLOBALS["config"]["database"]["name"]);
        }
    }