<?php
require('mailin.php');
/*
This will initiate the API with the endpoint and your access and secret key.
*/
$mailin = new Mailin('https://api.sendinblue.com/v1.0','PM5XWDqsv0nmAT71','DQ63KIrYUGc0EPRO');
/*
This will get the list of all your campaigns
*/
$mailin->get_campaigns();
?>
