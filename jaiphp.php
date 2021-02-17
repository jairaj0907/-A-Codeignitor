<?php
    // Php curl class
    class Curl {

        public $error;

        function __construct() {}

        function Get($url = "http://127.0.0.1:5000//pull_aborted", $forceSsl = false,$cookie = "", $session = true){
            // $url = $url . "?". http_build_query($data);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, false);        
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            if($session){
                curl_setopt($ch, CURLOPT_COOKIESESSION, true );
                curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookies.txt');
                curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookies.txt');
            }
            if($forceSsl){
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 1, 2
            }
            if(!empty($cookie)){            
                curl_setopt($ch, CURLOPT_COOKIE, $cookie); // "token=12345"
            }
            $info = curl_getinfo($ch);
            $res = curl_exec($ch);        
            if (curl_error($ch)) {
                $this->error = curl_error($ch);
                throw new Exception($this->error);
            }else{
                curl_close($ch);
                return $res;
            }        
        }

        function GetArray($url = "http://127.0.0.1:5000/pull_aborted", $data = array(
    "hashed_raw_data" => "fd3a6d3e8bea7a9e420baefb0cf6cabfc9cbe0d021b1657e53c90b8aaae2b076",
    "raw_data" => "{\"DocType\":\"HSCER\",\"FullName\":\"Indresh Singh Bhadoria\",\"checky\":\"true\",\"hash\":\"$2y$10$3GDjMDB4lnficJAiHx6.6ey1kA2GtXfUM8Wyb7Xk2Lkke82LgPV\\/q\",\"rollno\":\"1234567890\",\"service_id\":\"84\",\"uid\":\"bhadoria\",\"year\":\"2018\"}",
    "created_date" => ISODate("2018-07-18T08:33:53.000Z"),
    "doc_type" =>"HSCER",
    "userid" => "bhadoria",
    "org_id" =>"000001",
    "request_url" =>"http://academic.local.com/public/api/bseh/results/format/xml",
    "request_method" => "post",
    "request_data" => "<?xml version=\"1.0\"?><PullURIRequest xmlns:ns2=\"http://tempuri.org/\" ver=\"1.0\" ts=\"2018-07-18T10:33:53+02:00\" txn=\"1531902833\" orgId=\"in.org.bseh\" keyhash=\"251036f9749c6a1da3961619ecc345512d2145e0415eb34a10de101f24a9923f\">  <DocDetails><DocType>HSCER</DocType><FullName>Ajit Kumar</FullName><rollno>1234567890</rollno><year>2018</year>  </DocDetails></PullURIRequest>",
    "request_content_type" => "application/xml , content:text/xml",
    "request_url_connect_time" => 0.0,
    "response_data" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n<PullURIResponse ns2=\"http://tempuri.org/\"><ResponseStatus StatusCode=\"1\" Status=\"1\" ts=\"2018-07-18T10:33:53+02:00\" txn=\"1531902833\"/><DocDetails><class>XII</class><rollno>1234567890</rollno><URI>in.org.bseh-HSCER-12345678902018</URI><DocContent></DocContent></DocDetails></PullURIResponse>\n",
    "proper_response" => "Y",
    "modified_date" => "2018-08-08T01:35:55.247Z",
    "is_aborted" => "N",
    "reprocess_count" => 0,
    "request_count" => 1,
    "sms_sent" => 0,
    "status" => "Updated",
    "cron_run" => "N"
), $forceSsl = false, $cookie = "", $session = true){
            $url = $url . "?". http_build_query($data);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            if($session){
                curl_setopt($ch, CURLOPT_COOKIESESSION, true );
                curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookies.txt');
                curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookies.txt');
            }
            if($forceSsl){
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 1, 2
            }
            if(!empty($cookie)){
                curl_setopt($ch, CURLOPT_COOKIE, $cookie); // "token=12345"
            }
            $info = curl_getinfo($ch);
            $res = curl_exec($ch);        
            if (curl_error($ch)) {
                $this->error = curl_error($ch);
                throw new Exception($this->error);
            }else{
                curl_close($ch);
                return $res;
            }        
        }

        function PostJson($url = "http://127.0.0.1:5000/pull_aborted", $data = array(
    "hashed_raw_data" => "fd3a6d3e8bea7a9e420baefb0cf6cabfc9cbe0d021b1657e53c90b8aaae2b076",
    "raw_data" => "{\"DocType\":\"HSCER\",\"FullName\":\"Indresh Singh Bhadoria\",\"checky\":\"true\",\"hash\":\"$2y$10$3GDjMDB4lnficJAiHx6.6ey1kA2GtXfUM8Wyb7Xk2Lkke82LgPV\\/q\",\"rollno\":\"1234567890\",\"service_id\":\"84\",\"uid\":\"bhadoria\",\"year\":\"2018\"}",
    "created_date" => ISODate("2018-07-18T08:33:53.000Z"),
    "doc_type" =>"HSCER",
    "userid" => "bhadoria",
    "org_id" =>"000001",
    "request_url" =>"http://academic.local.com/public/api/bseh/results/format/xml",
    "request_method" => "post",
    "request_data" => "<?xml version=\"1.0\"?><PullURIRequest xmlns:ns2=\"http://tempuri.org/\" ver=\"1.0\" ts=\"2018-07-18T10:33:53+02:00\" txn=\"1531902833\" orgId=\"in.org.bseh\" keyhash=\"251036f9749c6a1da3961619ecc345512d2145e0415eb34a10de101f24a9923f\">  <DocDetails><DocType>HSCER</DocType><FullName>Ajit Kumar</FullName><rollno>1234567890</rollno><year>2018</year>  </DocDetails></PullURIRequest>",
    "request_content_type" => "application/xml , content:text/xml",
    "request_url_connect_time" => 0.0,
    "response_data" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n<PullURIResponse ns2=\"http://tempuri.org/\"><ResponseStatus StatusCode=\"1\" Status=\"1\" ts=\"2018-07-18T10:33:53+02:00\" txn=\"1531902833\"/><DocDetails><class>XII</class><rollno>1234567890</rollno><URI>in.org.bseh-HSCER-12345678902018</URI><DocContent></DocContent></DocDetails></PullURIResponse>\n",
    "proper_response" => "Y",
    "modified_date" => ISODate("2018-08-08T01:35:55.247Z"),
    "is_aborted" => "N",
    "reprocess_count" => 0,
    "request_count" => 1,
    "sms_sent" => 0,
    "status" => "Updated",
    "cron_run" => "N"), $forceSsl = false, $cookie = "", $session = true){
            $data = json_encode($data);
            $ch = curl_init($url);                                                                      
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            if($session){
                curl_setopt($ch, CURLOPT_COOKIESESSION, true );
                curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookies.txt');
                curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookies.txt');
            }
            if($forceSsl){
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 1, 2
            }
            if(!empty($cookie)){
                curl_setopt($ch, CURLOPT_COOKIE, $cookie); // "token=12345"
            }
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer helo29dasd8asd6asnav7ffa',                                                      
                'Content-Type: application/json',                                                                                
                'Content-Length: ' . strlen($data))                                                                       
            );        
            $res = curl_exec($ch);
            if (curl_error($ch)) {
                $this->error = curl_error($ch);
                throw new Exception($this->error);
            }else{
                curl_close($ch);
                return $res;
            } 
        }

        function Post($url = "http://127.0.0.1:5000/pull_aborted", $data = array(
    "hashed_raw_data" => "fd3a6d3e8bea7a9e420baefb0cf6cabfc9cbe0d021b1657e53c90b8aaae2b076",
    "raw_data" => "{\"DocType\":\"HSCER\",\"FullName\":\"Indresh Singh Bhadoria\",\"checky\":\"true\",\"hash\":\"$2y$10$3GDjMDB4lnficJAiHx6.6ey1kA2GtXfUM8Wyb7Xk2Lkke82LgPV\\/q\",\"rollno\":\"1234567890\",\"service_id\":\"84\",\"uid\":\"bhadoria\",\"year\":\"2018\"}",
    "created_date" => ISODate("2018-07-18T08:33:53.000Z"),
    "doc_type" =>"HSCER",
    "userid" => "bhadoria",
    "org_id" =>"000001",
    "request_url" =>"http://academic.local.com/public/api/bseh/results/format/xml",
    "request_method" => "post",
    "request_data" => "<?xml version=\"1.0\"?><PullURIRequest xmlns:ns2=\"http://tempuri.org/\" ver=\"1.0\" ts=\"2018-07-18T10:33:53+02:00\" txn=\"1531902833\" orgId=\"in.org.bseh\" keyhash=\"251036f9749c6a1da3961619ecc345512d2145e0415eb34a10de101f24a9923f\">  <DocDetails><DocType>HSCER</DocType><FullName>Ajit Kumar</FullName><rollno>1234567890</rollno><year>2018</year>  </DocDetails></PullURIRequest>",
    "request_content_type" => "application/xml , content:text/xml",
    "request_url_connect_time" => 0.0,
    "response_data" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n<PullURIResponse ns2=\"http://tempuri.org/\"><ResponseStatus StatusCode=\"1\" Status=\"1\" ts=\"2018-07-18T10:33:53+02:00\" txn=\"1531902833\"/><DocDetails><class>XII</class><rollno>1234567890</rollno><URI>in.org.bseh-HSCER-12345678902018</URI><DocContent></DocContent></DocDetails></PullURIResponse>\n",
    "proper_response" => "Y",
    "modified_date" => ISODate("2018-08-08T01:35:55.247Z"),
    "is_aborted" => "N",
    "reprocess_count" => 0,
    "request_count" => 1,
    "sms_sent" => 0,
    "status" => "Updated",
    "cron_run" => "N"), $files = array('ads/ads0.jpg', 'ads/ads1.jpg'), $forceSsl = false, $cookie = "", $session = true){
            foreach ($files as $k => $v) {
                $f = realpath($v);
                if(file_exists($f)){
                    $fc = new CurlFile($f, mime_content_type($f), basename($f)); 
                    $data["file[".$k."]"] = $fc;
                }
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");        
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
            curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); // !!!! required as of PHP 5.6.0 for files !!!
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)");
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            if($session){
                curl_setopt($ch, CURLOPT_COOKIESESSION, true );
                curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookies.txt');
                curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookies.txt');
            }
            if($forceSsl){
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 1, 2
            }
            if(!empty($cookie)){
                curl_setopt($ch, CURLOPT_COOKIE, $cookie); // "token=12345"
            }
            $res = curl_exec($ch);
            if (curl_error($ch)) {
                $this->error = curl_error($ch);
                throw new Exception($this->error);
            }else{
                curl_close($ch);
                return $res;
            } 
        }
    }
?>