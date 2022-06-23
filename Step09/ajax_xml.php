<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Max-Age: 86400');
header('Access-Control-Allow-Headers: x-requested-with');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
$xml = "<?xml version='1.0' encoding='UTF-8'?>";
$xml .= "<quiz>";
$xml .= "<question>대한민국의 초대 대통령은?</question>";
$xml .= "<answer>이승만</answer>";
$xml .= "<url>http://jmnote.com/wiki/PHP로_XML_생성</url>";
$xml .= "</quiz>";
header('Content-type: text/xml');
echo $xml;

?>