<?php

/*
  Created on : 2017-jan-25, 10:01:50
  Author     : TheDonBase
 */

class main extends controller implements controllerInterface {

    function index() {
        load::view("main::index");
    }

}
