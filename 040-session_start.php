<?php
//session_set_cookie_params(60*60*24,".site.com/admin", "", false, true);
session_set_cookie_params(60*60*24*30,"/", "localhost", false, true);
session_start();
