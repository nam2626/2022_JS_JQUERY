<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Max-Age: 86400');
	header('Access-Control-Allow-Headers: x-requested-with');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
  // 네이버 Papago NMT 기계번역 Open API 예제
  $client_id = "qw7rWlYT7cysH2ER9RmF"; // 네이버 개발자센터에서 발급받은 CLIENT ID
  $client_secret = "GdLjE8b_fo";// 네이버 개발자센터에서 발급받은 CLIENT SECRET
  $encText = urlencode($_GET['txt']);
  $postvars = "source=ko&target=en&text=".$encText;
  $url = "https://openapi.naver.com/v1/papago/n2mt";
  $is_post = true;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $postvars);
  $headers = array();
  $headers[] = "X-Naver-Client-Id: ".$client_id;
  $headers[] = "X-Naver-Client-Secret: ".$client_secret;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec ($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close ($ch);
  if($status_code == 200) {
    echo $response;
  } else {
    echo "Error 내용:".$response;
  }
?>