<?php

$content = '';
foreach ($_POST as $key => $value) {
    if ($value) {
        $content .= "$key: **$value**\n";
    }
}
if (trim($content)) {
    $content = "<b>Message from Site:</b>\n".$content;
    // Your bot's token that got from @BotFather
    $apiToken = "*YOUR TOKEN*";
    $data = [
        'chat_id' => '*YOUR CHAT ID*,
        'text' => $content,
        'parse-mode' => 'HTML'
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
}

?>
