<?php

// URL jahan se data fetch karna hai
$url = "https://jsonplaceholder.typicode.com/posts/1";

// cURL initialize karo
$ch = curl_init();

// Options set karo
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Output string me aayega, browser pe nahi

// Execute cURL request
$response = curl_exec($ch);

// Error check karo
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    // JSON ko decode karo agar JSON response ho
    $data = json_decode($response, true);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


// Close cURL
curl_close($ch);
?>
$url = :;
$ch = curl_init();
curl_setopt($ch , CURLOPT_UEL , $url);
curl_setopt($ch , CURLOPT_RETURNTRANSFER, TRUE);
$RESPONCE = curl_exec($ch);
IF(curl_errno($CH)){
    ECHO "curl_errorg"
}



?>