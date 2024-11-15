<!-- Các hằng số -->

<?php

const _MODULE = "home";
const _ACTION = "dashboard";
const _CODE = true;
// Thong tin ket noi   
const _HOST = 'localhost';               
const _DB = 'mtoan_123';           
const _USER = 'root';
const _PASS = '';     
// Thiết lập host sử dụng cho css js
define('_WEB_HOST', 'http://'.$_SERVER["HTTP_HOST"].'/php/Practice/manager_users');
define('_WEB_HOST_TEMPLATES', _WEB_HOST."/templates");

// Thiết lập path sử dụng cho .php
define('_WEB_PATH', __DIR__);
define('_WEB_PATH_TEMPLATES', _WEB_PATH.'\templates');