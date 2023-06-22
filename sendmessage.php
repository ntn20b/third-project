<?php

$content = '';
foreach ($_POST as $key => $value) {
    if ($value) {
        $content .= "$key $value\n";
    }
}
if (trim($content)) {
    $content = "<b>Message from Site:</b>\n".$content;
    // Your bot's token that got from @BotFather
    $apiToken = "6062792211:AAG43jNK_gXVzygXyoX3kbf20khAqPUz4yQ";
    $data = [
        'chat_id' => '@designFrankfurtBotG',
        'text' => $content,
        'parse-mode' => 'HTML'
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
}

?>