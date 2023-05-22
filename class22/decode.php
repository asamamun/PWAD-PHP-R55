<?php
if(isset($_GET['m'])){
    echo base64_decode($_GET['m']);
}