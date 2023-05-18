<?php
 header('WWW-Authenticate: Basic Realm="Book Projects"');
 header("HTTP/1.1 401 Unauthorized");
?>