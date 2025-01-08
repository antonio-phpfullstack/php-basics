<?php
// By default, this cookie will expire when the browser session ends.
setcookie("name", "value");

// If you want the cookie to persist for a longer period,
// specify the expiration time in seconds using the third parameter.
setcookie("name", "value", time() + (3600*24*30));