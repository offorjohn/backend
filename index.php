<?php
$url = "https://otpninja.com/api/v1/listpayments"; // Replace with your API URL

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'X-OTPNINJA-TOKEN: hLAPySpZEuGtGJVCbglgToIVLdjdssMR' // Replace with your actual API key if required
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($http_status == 200) {
        $data = json_decode($response, true); // Decode JSON response
        print_r($data); // Do something with the data
    } else {
        echo "Failed to fetch data. HTTP Status Code: " . $http_status;
    }
}

curl_close($ch);
?>
