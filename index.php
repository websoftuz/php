<?php  
ob_start();  
define('API_KEY','67663891:AAFR1Gd-tM788uzFln39eoo0rXtr1Ekk0TM');
//bot tokeni yozing 
$admin = "683969047"; 
function ACL($callbackQueryId, $text = null, $showAlert = false)
{    
     return bot('answerCallbackQuery', [    
        'callback_query_id' => $callbackQueryId,    
        'text' => $text,    
        'show_alert'=>$showAlert,    
    ]);    
}    
function get($fayl){ 
$get = file_get_contents("$fayl"); 
return $get; 
} 

function ty($ch){  
   return bot('sendChatAction', [ 
   'chat_id' => $ch, 
   'action' => 'typing', 
   ]); 
   } 

function bot($method,$datas=[]){  
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);  
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);  
    if(curl_error($ch)){  
        var_dump(curl_error($ch));  
    }else{  
        return json_decode($res);  
    }  
}  
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;  
$chat_id = $message->chat->id;  
$mtext = $message->text;  
$name = $message->from->first_name;       
$yuzer = $message->from->username;
    
$rand = mt_rand( 0, 10); 
if($mtext == "/savol" && $mtext == "/savol@tutorialsuzbot"){ 
bot('sendMessage',[ 
     'chat_id'=>$chat_id, 
     'text'=>"Savolingiz raqami - ".$rand, 
     'parse_mode'=>'markdown', 
]); 
}

if($mtext == "/start"){ 
bot('sendMessage',[ 
     'chat_id'=>$chat_id, 
     'text'=>"👍", 
     'parse_mode'=>'markdown', 
]); 
}
