<?php

/**
 *
 * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
 *
 * @access    public
 * @param    string
 * @return    string
 */
if (!function_exists('currency_format')) {
  function currency_format($number, $suffix = 'đ')
  {
    if (!empty($number)) {
      return number_format($number, 0, ',', '.') . "{$suffix}";
    }
  }
}

function get_hotel_address(){
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $addr = $_POST['address'];
    return $addr;
  }
}

function getLatLong()
{
  // $address = get_hotel_address();
  // echo ($address);
  $address = "Nghệ An";
  if (!empty($address)) {
    //Formatted address
    $formattedAddr = str_replace(' ', '+', $address);
    //Send request and receive json data by address
    $apikey = 'AIzaSyDJx44jiP9QHAeOec2C0aLW29jiL6OQyRU';

    $geocodeFromAddr = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddr . '&sensor=false&key=' . $apikey);
    $output = json_decode($geocodeFromAddr);
    //Get latitude and longitute from json data
    $data['latitude'] = $output->results[0]->geometry->location->lat;
    $data['longitude'] = $output->results[0]->geometry->location->lng;
    //Return latitude and longitude of the given address
    if (!empty($data)) {
      return $data;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

$registration = $_POST['registration'];

if ($registration == "success"){
  // some action goes here under php
  echo json_encode(getLatLong());
} 
