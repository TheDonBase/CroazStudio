<?php

/*
  Created on : 2017-jan-25, 10:13:08
  Author     : TheDonBase
 */

class controller {
    function __construct() {
        $GLOBALS["instances"][] = $this;
    }
}
