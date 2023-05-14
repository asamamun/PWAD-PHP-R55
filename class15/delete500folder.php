<?php
 for ($i=1; $i <= 500 ; $i++) { 
    if(is_dir($i)) rmdir($i);
 }