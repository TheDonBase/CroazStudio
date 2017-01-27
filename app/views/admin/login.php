<?php

/* 
    Created on : 2017-jan-25, 19:16:37
    Author     : TheDonBase
*/
load::view("admin::templates::login::head");
?>
<div class="container">
            <div class="starter-template">
                <form method="post">
                    <label>Username:</label><input type="text" name="username" /><br/>
                    <label>Password:</label><input type="password" name="password" /></br>
                    <div style="color:red;"><?=(isset($error)) ? $error : "" ?></div>
                    <button type="submit">Login</button> 
                </form>
            </div>
        </div>
<?php 
load::view("admin::templates::login::foot");
?>