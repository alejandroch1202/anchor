<?php

function send($msg)
{

    $token = "YOUR_TELEGRAM_BOT_TOKEN";
    $id = "YOUR_TELEGRAM_ID";
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage";
    $options = 'chat_id=' . $id . '&text=' . $msg;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $options);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    header("Location: /");
}
