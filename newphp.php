$username='jai';
$password='raj';
$url1 = 'http://127.0.0.1:5000/pull_aborted/';

$hashed_raw_data='hgqbfkjwJDBFW54WRGKJ';
$raw_data='RAJ/56364';
$created_date =2018-07-18T08:33:53.000Z;
$doc_type='HSCER';
$userid='RSAC54654';
$org_id='320255';
$request_url='http://academic.local.com/public/api/bseh/results/format/xml';
$request_method='POST';
$request_data=<?xml version=\"1.0\"?><PullURIRequest xmlns:ns2=\"http://tempuri.org/\" ver=\"1.0\" ts=\"2018-07-18T10:33:53+02:00>;
$request_content_type='app/xml';
$request_url_connect_time=00.1';
$response_data='<?xml version=\"1.0\" encoding=\"utf-8\"?>\n<PullURIResponse ns2=\"http://tempuri.org/\">';
$proper_response='X';
$modified_date='ISODate("2018-08-08T01:35:55.247Z")';
$is_aborted='N';
$reprocess_count='0;
$request_count='1';
$sms_sent='0';
$status='Updated';
$cron_runt='NZS';
$postData='?where={ 
    "hashed_raw_data" : ".$hashed_raw_data.","raw_data" : ".
$raw_data.","created_date" : ".$created_date.","created_date" : ".$created_date.","doc_type" : ".$doc_type.","userid" : ".$userid.","org_id" : ".$org_id.","request_url" : ".$request_url.","request_method" : ".$request_method.","request_data" : ".$request_data.","request_content_type" : ".$request_content_type.","request_url_connect_time" : ".$request_url_connect_time.","response_data" : ".$response_data.","proper_response" : ".$proper_response.","modified_date" : ".$modified_date.","is_aborted" : ".$is_aborted.","reprocess_count" : ".$reprocess_count.","sms_sent" : ".$sms_sent.","status" : ".$status.","cron_run" : ".$cron_run.","postData" : ".$postData."
    }';
$URL = $url1 . $postData;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result=curl_exec ($ch);
print_r($result);die();