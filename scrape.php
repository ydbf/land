<?php

// URL to scrape
$url = 'https://ppv.land/api/streams/vip?id=2863'; // Replace with the URL you want to scrape

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url); // Set the URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return response as a string
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Auth: D6lR9ZLRgk5mjj1q3Yp21Ja1QnXQX3GwME0e2f80R7WN74J1Xr7T0zTTY8JPCPg9zZiwmK29D2g750URoyDfN2r9vlSehRME4OlQMa96M1T5pwjAglXh3SGcz15x9Uak'
)); // Set the custom 'Auth:' header

// Execute the cURL session
$response = curl_exec($ch);

// Check if there was an error
if($response === false) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    // Save the response as a JSON file
    $file = 'test.json'; // File name for saving the response
    $result = file_put_contents($file, $response);

    if ($result === false) {
        echo "Error writing to file.";
    } else {
        echo "Response saved to test.json";
    }
}

// Close the cURL session
curl_close($ch);
?>
