<?php
define ('url',"6062792211:AAG43jNK_gXVzygXyoX3kbf20khAqPUz4yQ");

$name = $_GET['name'];

$message = $_GET['message'];

$phone = $_GET['phone'];

$chat_id = '{-953022145}';

$message = urlencode("Name:".$name."\nPhone: ".$phone."\nMessage: ".$message);

file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>