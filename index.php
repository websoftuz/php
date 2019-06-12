<?php
ob_start();
define('API_KEY','676643891:AAFR1Gd-tM788uzFln39eoo0rXtr1Ekk0TM');
function MrPHPBot($method,$datas=[]){
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
//-----------------------------------------------------------------------------------------
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
mkdir("data/$chat_id");
mkdir("data/$chat_id/$from_id");
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$fadmin = $message->from->id;
$username = $message->from->username;
mkdir("data/username.txt/$username");
$textmassage = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fm = $update->callback_query->from->id;
$step= file_get_contents("data/$from_id/file.txt");
$owners= file_get_contents("data/$chat_id/owner.txt");
$text1 = $message->text;
$fadmin = $message->from->id;
$owners2= file_get_contents("data/$chatid/owner.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$welcome= file_get_contents("data/$chat_id/welcome.txt");
$textwelcome= file_get_contents("data/$chat_id/textwelcome.txt");
$Dev = 683969047;
$txtt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$tedadmsg = $update->message->message_id;
$fwd = $update->message->forward_from;
$edit = $update->edited_message->text;
$yuzer = $message->from->username;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->message->from->id;
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$lockphoto= file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit= file_get_contents("data/$chat_id/lockedit.txt");
$lockgame= file_get_contents("data/$chat_id/lockgame.txt");
$locklocation= file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact= file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$lockaudio= file_get_contents("data/$chat_id/lockaudio.txt");
$namegroup = $update->message->chat->title;
$lockvoice= file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker= file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin= file_get_contents("data/$chat_id/lockjoin.txt");
$lockdecument= file_get_contents("data/$chat_id/lockdecument.txt");
$lockvideo= file_get_contents("data/$chat_id/lockvideo.txt");
$lockgif= file_get_contents("data/$chat_id/lockgif.txt");
$lockforward= file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator= file_get_contents("data/$chat_id/lockoperator.txt");
$lockfosh= file_get_contents("data/$chat_id/lockfosh.txt");
$locklink2= file_get_contents("data/$chatid/locklink.txt");
$lockphoto2= file_get_contents("data/$chatid/lockphoto.txt");
$lockedit2= file_get_contents("data/$chatid/lockedit.txt");
$lockgame2= file_get_contents("data/$chatid/lockgame.txt");
$locklocation2= file_get_contents("data/$chatid/locklocation.txt");
$lockcontact2= file_get_contents("data/$chatid/lockcontact.txt");
$lockusername2= file_get_contents("data/$chatid/lockusername.txt");
$lockaudio2= file_get_contents("data/$chatid/lockaudio.txt");
$muteall2 = file_get_contents("data/$chatid/muteall2.txt");
$lockvoice2= file_get_contents("data/$chatid/lockvoice.txt");
$locksticker2= file_get_contents("data/$chatid/locksticker.txt");
$lockjoin2= file_get_contents("data/$chatid/lockjoin.txt");
$lockdecument2= file_get_contents("data/$chatid/lockdecument.txt");
$lockvideo2= file_get_contents("data/$chatid/lockvideo.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockforward2= file_get_contents("data/$chatid/lockforward.txt");
$lockoperator2= file_get_contents("data/$chatid/lockoperator.txt");
$lockbots2= file_get_contents("data/$chatid/lockbots.txt");
$lockfosh2= file_get_contents("data/$chatid/lockfosh.txt");
$lockbots= file_get_contents("data/$chat_id/lockbots.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$floods2= file_get_contents("data/$chatid/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$flood2= file_get_contents("data/$chatid/numflood.txt");
$text = $update->inline_qurey->qurey;
$token = '701246173:AAE5eVJzzkelv6hvMAD8oYpJCFHWw9yZKiY';
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$statjson = json_decode($stat, true);
$status = $statjson['result']['status'];
$lockedit3 = file_get_contents("data/$chat_edit_id/lockedit.txt");
$get = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
//-----------------------------------------------------------------------------------------
//
function SendMessage($chat_id, $text){
MrPHPBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
MrPHPBot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
MrPHPBot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
//-----------------------------------------------------------------------------------------
if($textmassage=="/start" && $tc == "private"){
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"*🔺Salom! Versiya: 2.01v🎊. Bot yangi versiyada. Bemalol ishlating. 🏷 Botni ishlatish bo'yicha qo'llanma*: [Qo'llanma](https://t.me/UzBotStore/27) | _Botdagi aksiya haqida ma'lumotni_ /aksiya _buyrugi bilan bilib oling!_",
  'parse_mode'=>'MarkDown',
   'disable_web_page_preview'=>true
  ]);
  }
  if($textmassage=="/start" or $textmessage=="/start@FreeGuardBot"){
      if ($tc == 'group' | $tc == 'supergroup'){
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"*Bu buyruq guruhda ishlamaydi!Iltimos botning lichkasiga yozing!*",
  'parse_mode'=>'MarkDown',
   'disable_web_page_preview'=>true
  ]);
  }
  }
 //groupmanager
 elseif($data=="settings" && $fm == $owners2){
         MrPHPBot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"VAQTINCHALIK ISHLAMAYDI",
]);
       }
  //'reply_markup'=>json_encode([
  //'resize_keyboard'=>true,
  //'inline_keyboard'=>[
 //[
// ['text'=>"Link o'chirish",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
// ],
//  [
// ['text'=>"Rasm o'chirish",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
// ],
//  [
// ['text'=>"@username o'chirish",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 //],
 // [
// ['text'=>"Edit qilishni o'chirish",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 //],
//  [
// ['text'=>"Operatorni o'chirish",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
// ],
//  [
// ['text'=>"O'chirish",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
// ],
 // [
// ['text'=>"Luction o'chirish",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
// ],
 // [
// ['text'=>"Contact o'chirish",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 //],
 // [
 //['text'=>"Forward ni o'chirish",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
// ],
//  [
// ['text'=>"Audioni o'chirish",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
// ],
 // [
// ['text'=>"Ovozni o'chirish",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
// ],
 // [
// ['text'=>"Stickerni o'chirish",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 //],
 // [
 //['text'=>"O'yinni o'chirish",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
// ],
// [
//['text'=>"Videoni o'chirish",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
//],
//[
//['text'=>"Robotlar ro'yhatini yopish",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockvideo']
//],
//[
//['text'=>"Hammani mute qilih",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
//],
//[
//['text'=>"Orqaga",'callback_data'=>'back']
//],
  //]
 // ])
//  ]);} SETTINGS lar bu yerda
  elseif($data=="back" && $fm == $owners2){
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"Tanlang:",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"Sozlamalar",'callback_data'=>'settings']
   ],
    [
   ['text'=>"Guruh ma'lumotlari",'callback_data'=>'groupe'],['text'=>"Boshqaruv qo'llanmasi",'callback_data'=>'help']
   ],
   [
['text'=>"BOTNING YANGILIKLAR KANALI",'url'=>"https://telegram.me/BOTFOUNDERS"]
  ],
    ]
    ])
    ]);
    }
  elseif($textmassage=="/manage" && $from_id == "$owners"){
  if ($tc == 'group' | $tc == 'supergroup'){
    sendAction($chat_id, 'typing');
    MrPHPBot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"Tanlang:",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"Sozlamalar",'callback_data'=>'settings']
   ],
    [
   ['text'=>"Guruh ma'lumotlari",'callback_data'=>'groupe'],['text'=>"Boshqaruv qo'llanmasi",'callback_data'=>'help']
   ],
   [
['text'=>"BOTNING YANGILIKLAR KANALI",'url'=>"https://telegram.me/BOTFOUNDERS"]
  ],
    ]
    ])
    ]);
    }}
    elseif($data=="groupe" && $fm == $owners2){
            MrPHPBot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"Guruh haqida ma'lumotlar:\n\nGuruh nomi: $gpname\nGuruh ID raqami: $chatid\nXabarlar soni: $messageid\nGuruh egasi: $owners2\n",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"Orqaga",'callback_data'=>'back']
                     ],
                      ]
               ])
           ]);
    }
    elseif($data=="help" && $fm == $owners2){
            MrPHPBot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"Qo'llanma:\nSozlamalarni olish va foydalanuvchilarni boshqarish qo'llanmasi:
             */manage* ➖ (Robot sozlamalarini yoqib oling)
             */kick |reply qilib yozasiz|* ➖ (Foydalanuvchiga reply qilib yozing)
             *➖➖➖➖➖➖*
             >Boshqaruv buyruqlar uchun qo'llanma
             */lock|unlock link* ➖ (Link o'chirish/yoqish)
             */lock|unlock username* ➖ (Username o'chirish/yoqish)
             */lock|unlock sticker* ➖ (Stikerni o'chirish/yoqish)
             */lock|unlock contact* ➖ (Kontaktni o'chirish/yoqish)
             */lock|unlock forward* ➖ (Forwardni o'chirish/yoqish)
             */lock|unlock photo* ➖ (Fotoni o'chirish/yoqish)</code>
             */]lock|unlock audio* ➖ (Audioni o'chirish/yoqish)
             */lock|unlock voice* ➖ (Voice chatni o'chirish/yoqish)
             */lock|unlock edit* ➖ (Editni o'chirish/yoqish)
             */lock|unlock game* ➖ (O'yinni o'chirish/yoqish)
             */lock|unlock location* ➖ (LOKALIZATSIYAni o'chirish/yoqish)
             */lock|unlock* ➖ (O'chirish/yoqish)
             */lock|unlock join* ➖ (Joinni o'chirish/yoqish)
             */lock|unlock operator* ➖ (Operatorni o'chirish/yoqish)
             */lock|unlock video* ➖ (Videoni o'chirish/yoqish)
             */lock|unlock bots* ➖ (Botlarni o'chirish/yoqish)
             *➖➖➖➖➖➖*
             >FLOOD boshqarish
             */flood manage* ➖ (Flood boshqarish)
             */lock|unlock flood* ➖ (Flood o'chirish/yoqish)
             */setflood [soni]* ➖ (Floodlar soni o'rnatish)
             *➖➖➖➖➖➖*
             >Xabarlarni olib tashlash bo'yicha qo'llanma
             */rmsg [xabar soni]* ➖ (Xabarlarni o'chirish minimum 1ta, maksimal 100ta)
             *➖➖➖➖➖➖*
             >WELCOME buyrug'i
             */welcome enable|disable * ➖ (Welcome so'rovini yoqish/o'chirish)
             */set welcome* ➖ (Welcome xabarini sozlash)
             *➖➖➖➖➖➖*
             >Guruhni sozlash buyruqlari
             *➖➖➖➖➖➖*
             */setname [nomi]* ➖ (Guruh nomini yozing)
             */setdescription [matn]* ➖ (Guruh descriptionni yozing)
             */setphoto* ➖ (Guruh rasmini o'rnatish)
             */delphoto* ➖ (Guruh rasmini o'chirish)
             */pin [reply]* ➖ (Pin reply bilan)
             */unpin [reply]* ➖ (Pindan olish reply bilan)
             */link* ➖ (Guruh linkini olish)
             */setowner [TelegramID]* ➖ (Foydalanuvchi ID si bilan botni faqat shunga topshirish)
             */automatic [manage]* ➖ (Robot tomonidan avtomatik boshqarish)",
            'parse_mode'=>'MarkDown',
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"Orqaga",'callback_data'=>'back']
                     ],
                      ]
               ])
           ]);
    }
  elseif($data=="lockphoto" && $lockphoto2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockphoto.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
      ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockphoto" && $lockphoto2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockphoto.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvideo" && $lockvideo2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvideo.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvideo" && $lockvideo2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvideo.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                        ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgame" && $lockgame2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockgame.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
            ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"ERROR",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgame" && $lockgame2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockgame.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                 ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"ERROR",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locksticker" && $locksticker2=="✔️" && $fm == $owners2){
    save("data/$chatid/locksticker.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                  ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"ERROR",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locksticker" && $locksticker2=="✖️" && $fm == $owners2){
    save("data/$chatid/locksticker.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                      ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvoice" && $lockvoice2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvoice.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
            ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvoice" && $lockvoice2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvoice.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
             ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockaudio" && $lockaudio2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockaudio.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
            ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockaudio" && $lockaudio2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockaudio.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
            ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockforward" && $lockforward2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockforward.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
            ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockforward" && $lockforward2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockforward.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
            ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockcontact.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
        ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockcontact.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
     ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locklucton" && $locklocation2=="✔️" && $fm == $owners2){
    save("data/$chatid/locklocation.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
     ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockluction" && $locklocation2=="✖️" && $fm == $owners2){
    save("data/$chatid/locklocation.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockfosh" && $lockfosh2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockfosh.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockfosh" && $lockfosh2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockfosh.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockoperator" && $lockoperator2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockoperator.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockoperator" && $lockoperator2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockoperator.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockedit" && $lockedit2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
    elseif($data=="muteall2" && $muteall2=="✔️" && $fm == $owners2){
    save("data/$chatid/muteall2.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirib qo'yildi.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="muteall2" && $muteall2=="✖️" && $fm == $owners2){
    save("data/$chatid/muteall2.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Username",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"Edit",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Operator",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Fosh",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Lucshan",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Voice",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Stiker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Bot",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
          [
          ['text'=>"Mute hammani",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
          ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }elseif($rt && $textmassage=="/unkick" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
  MrPHPBot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Guruhga qaytib olindi.",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif( $textmassage == "/leave" && $from_id == $Dev){
  sendmessage($chat_id,"Guruhdan chiqdim!");
  MrPHPBot('leaveChat',[
  'chat_id'=>$chat_id,
  ]);
}elseif($rt && $textmassage == "/del" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
 MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$update->message->reply_to_message->message_id
    ]);
  }
}
  elseif($data=="lockedit" && $lockedit2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Usename",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"EDIT",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Reklamachilar",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Ogohlantirish",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Almashinish",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Ovoz",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Sticker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Botlar",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockusername" && $lockusername2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockusername.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirilib yuborildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                    ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Usename",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"EDIT",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Reklamachilar",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Ogohlantirish",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Almashinish",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Ovoz",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Sticker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Botlar",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockusername" && $lockusername2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockusername.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Usename",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"EDIT",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Reklamachilar",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Ogohlantirish",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Almashinish",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Ovoz",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Sticker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Botlar",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locklink" && $locklink2=="✔️" && $fm == $owners2){
    save("data/$chatid/locklink.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirilib yuborildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Usename",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"EDIT",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Reklamachilar",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Ogohlantirish",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Almashinish",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Ovoz",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Sticker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Botlar",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locklink" && $locklink2=="✖️" && $fm == $owners2){
    save("data/$chatid/locklink.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Usename",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"EDIT",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Reklamachilar",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Ogohlantirish",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Almashinish",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Ovoz",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Sticker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Botlar",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockbots2" && $lockbots2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockbots.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"O'chirilib yuborildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Usename",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"EDIT",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Reklamachilar",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Ogohlantirish",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Almashinish",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Ovoz",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Sticker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Botlar",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockbots2" && $lockbots2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockbots.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Link",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"Foto",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"Usename",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"EDIT",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"Reklamachilar",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"Ogohlantirish",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"Almashinish",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"Kontakt",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"Forward",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"Audio",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"Ovoz",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"Sticker",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"O'yin",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"Video",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Botlar",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Orqaga",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
elseif (strpos($textmassage, "/setowner") !== false && $from_id == $owners) {
$owner = str_replace("/setowner ","",$textmassage);
save("data/$from_id/file.txt","none");
MrPHPBot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"Bu kishi [$owner](https://t.me/$yuzer)  botni boshqaroladigan yagona odam!",
    'parse_mode'=>'MarkDown',
                  'disable_web_page_preview'=>true
        ]);
save("data/$chat_id/owner.txt","$owner");
}
elseif ( strpos($textmassage , '/setrank') !== false && $rt && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$rank = str_replace("/setrank","",$textmassage);
Save("data/$rtid/rank.txt","$rank");
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Foydalanuvchi pozitsiyasi ro'yxatdan o'tkazildi.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/delrank') !== false && $rt && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
Save("data/$rtid/rank.txt","");
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Foydalanuvchi darajalari tozalangan",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping" && $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Men onlayn bo'laman",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Men onlaynman, janob",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Men onlayn Dada",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/who') !== false && $rt) {
    $ran = file_get_contents("data/$rtid/rank.txt");
if ($tc == 'group' | $tc == 'supergroup'){
    if ($ran != ""){
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Rasmiy:
     $ran",
  'parse_mode'=>'MarkDown',
 ]);
 }else{
     sendmessage($chat_id,"Bu joy emas");
 }}
}
elseif(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklink == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
 MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Link yoqish funksiya yoqildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif($textmassage=="/unlock link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Link funksiya o'chirildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif($update->message->photo){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockphoto == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock photo" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Foto jo'natish yoqildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock photo" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Foto jo'natish o'chirildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif ($textmassage == "/automatic manage" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✔️");
save("data/$chat_id/locklink.txt","✔️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✔️");
save("data/$chat_id/lockoperator.txt","✔️");
save("data/$chat_id/lockforward.txt","✔️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✔️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✔️");
save("data/$chat_id/lockflood.txt","✔️");
save("data/$chat_id/numflood.txt","3");
save("data/$chat_id/welcome.txt","Xush kelibsiz");
SendMessage($chat_id,"#Bajarildi. Guruh endi avtomatik boshqariladi!");
}
}
elseif ($textmassage == "/add" or $textmassage =="/add@FreeGuardBot" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/owner.txt","$from_id");
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✖️");
save("data/$chat_id/locklink.txt","✖️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✖️");
save("data/$chat_id/lockoperator.txt","✖️");
save("data/$chat_id/lockforward.txt","✖️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✖️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✖️");
save("data/$chat_id/lockflood.txt","✖️");
save("data/$chat_id/muteall2.txt","✖️");
save("data/$chat_id/numflood.txt","0");
save("data/$chat_id/welcome.txt","Welcome NewMember To Group");
SendMessage($chat_id,"Qo'shildi Bu buyruqni takrorlamang. Yordam uchun - /help | Bot haqida yangiliklarni o'qib boring! Siz uchun foydali! @BotFounders");
}
}
elseif($textmassage=="/promote" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
     'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Admin bo'ldingiz",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="/demote" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Adminlikdan chiqarildingiz!",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($update->message->gif){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgif == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock gif" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgif.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"GIF o'chirish yoqildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock gif" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgif.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"GIF o'chirilmaydi!",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->video){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvideo == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
if($update->message->video || $update->message->photo || $update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($muteall2 == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock video" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Video tasholmaydi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock video" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Video tasholadi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}

elseif($textmassage=="/muteall" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/muteall2.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Barcha mute bo'ldi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unmute all" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/muteall2.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Barcha mutedan chiqarildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}

if(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$edit)){
  preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match);
if ($lockedit3== "✔️"){
if ($you != "creator" && $you != "administrator"){
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
  }
}
}
elseif($textmassage=="/lock edit" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Xabarni tahrirlash o'chirildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock edit" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Xabarni tahrirlash yoqildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgame== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock game" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"O'yin o'ynolmaysiz",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock game" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"O'yin o'ynash mumkin",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklocation== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock location" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Local xarita tasholmaysiz",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock location" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Local xaritangizni tasholasiz",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockcontact== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock contact" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Kontakt jonatolmidi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock contact" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Kontakt jonatoladi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock username" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Username jonatolmaydi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif($textmassage=="/unlock username" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Username jonatoladi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockaudio== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock audio" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Audio jonatolmidi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock audio" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Audio jonatoladi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvoice == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock voice" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Ovoz jonatolmidi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock voice" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Ovoz jonatoladi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locksticker== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock sticker" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Stiker jonatolmidi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock sticker" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Stiker jonatoladi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->decument){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockdecument== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock decument" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Dokument jonatolmidi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock decument" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Dokument jonatoladi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($update->message->forward_from){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockforward== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
 MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
elseif($textmassage=="/lock forward" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Forward qilolmidi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unlock forward" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Forward qiloladi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
//Lock Operator
if(preg_match("/^(.*)salom|salom*)|(.*)salom(.*)|(.*)salom(.*)|salom(.*)|(.*)salom/",$textmassage)){
preg_match("/^(.*)salom|salom(.*)|(.*)salom(.*)|(.*)salom(.*)|salom(.*)|(.*)salom/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockoperator == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}

elseif($textmassage=="/lock operator" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Reklama bloklandi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif($textmassage=="/unlock operator" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Reklama ochildi",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
//Lock Fosh
elseif(preg_match("'^(biri)(.*)'",$textmassage)){
preg_match("'^(biri)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif(preg_match("'^(biri sal)(.*)'",$textmassage)){
preg_match("'^(biri sal)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif(preg_match("'^(BB Hurmat qiling)(.*)'",$textmassage)){
preg_match("'^(BB Hurmat qiling)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif(preg_match("'^(Dove)(.*)'",$textmassage)){
preg_match("'^(Dove)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif(preg_match("'^(Muqova)(.*)'",$textmassage)){
preg_match("'^(Muqova)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
  MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
}
elseif($textmassage=="/lock fosh" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Foshni o'chirish",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif($textmassage=="/unlock fosh" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✖️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Foshni o'chirish",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif($update->message->new_chat_title){
if ($tc == 'group' | $tc == 'supergroup'){
$newname = $update->message->new_chat_title;
sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Guruh nomi quyidagiga o'zgartirildi: $newname",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
if ($welcome == "✔️"){
sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"$textwelcome",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
}
 elseif($textmassage=="/help@FreeGuardBot" or $textmassage =="/help" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Qo'llanma:\nSozlamalarni olish va foydalanuvchilarni boshqarish qo'llanmasi:
             */manage* ➖ (Robot sozlamalarini yoqib oling)
             */kick |reply qilib yozasiz|* ➖ (Foydalanuvchiga reply qilib yozing)
             *➖➖➖➖➖➖*
             >Boshqaruv buyruqlar uchun qo'llanma
             */lock|unlock link* ➖ (Link o'chirish/yoqish)
             */lock|unlock username* ➖ (Username o'chirish/yoqish)
             */lock|unlock sticker* ➖ (Stikerni o'chirish/yoqish)
             */lock|unlock contact* ➖ (Kontaktni o'chirish/yoqish)
             */lock|unlock forward* ➖ (Forwardni o'chirish/yoqish)
             */lock|unlock photo* ➖ (Fotoni o'chirish/yoqish)</code>
             */]lock|unlock audio* ➖ (Audioni o'chirish/yoqish)
             */lock|unlock voice* ➖ (Voice chatni o'chirish/yoqish)
             */lock|unlock edit* ➖ (Editni o'chirish/yoqish)
             */lock|unlock game* ➖ (O'yinni o'chirish/yoqish)
             */lock|unlock location* ➖ (LOKALIZATSIYAni o'chirish/yoqish)
             */lock|unlock* ➖ (O'chirish/yoqish)
             */lock|unlock join* ➖ (Joinni o'chirish/yoqish)
             */lock|unlock operator* ➖ (Operatorni o'chirish/yoqish)
             */lock|unlock video* ➖ (Videoni o'chirish/yoqish)
             */lock|unlock bots* ➖ (Botlarni o'chirish/yoqish)
             *➖➖➖➖➖➖*
             >FLOOD boshqarish
             */flood manage* ➖ (Flood boshqarish)
             */lock|unlock flood* ➖ (Flood o'chirish/yoqish)
             */setflood [soni]* ➖ (Floodlar soni o'rnatish)
             *➖➖➖➖➖➖*
             >Xabarlarni olib tashlash bo'yicha qo'llanma
             */rmsg [xabar soni]* ➖ (Xabarlarni o'chirish minimum 1ta, maksimal 100ta)
             *➖➖➖➖➖➖*
             >WELCOME buyrug'i
             */welcome enable|disable * ➖ (Welcome so'rovini yoqish/o'chirish)
             */set welcome* ➖ (Welcome xabarini sozlash)
             *➖➖➖➖➖➖*
             >Guruhni sozlash buyruqlari
             *➖➖➖➖➖➖*
             */setname [nomi]* ➖ (Guruh nomini yozing)
             */setdescription [matn]* ➖ (Guruh descriptionni yozing)
             */setphoto* ➖ (Guruh rasmini o'rnatish)
             */delphoto* ➖ (Guruh rasmini o'chirish)
             */pin [reply]* ➖ (Pin reply bilan)
             */unpin [reply]* ➖ (Pindan olish reply bilan)
             */link* ➖ (Guruh linkini olish)
             */setowner [TelegramID]* ➖ (Foydalanuvchi ID si bilan botni faqat shunga topshirish)
             */automatic [manage]* ➖ (Robot tomonidan avtomatik boshqarish)",
  'parse_mode'=>'MarkDown',
  ]);
  }
 }
elseif($rt && $textmassage=="/pin" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#Pin_Boldi",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
  elseif($rt && $textmassage=="/kick" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
  MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Guruhdan chetlashtirildi.",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
elseif($textmassage=="/info" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Guruh ID raqami: *$chat_id*\nGuruh nomi: *$namegroup*\nXabarlar soni: *$tedadmsg*\nGuruh turi: *$tc*",
  'parse_mode'=>'MarkDown',
  ]);
  }
 }
$users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .=$username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="/stat"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        $gruppa = substr_count($users,"-"); 
                        $odam = $mmemcount - $gruppa; 
                        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"Foydalanuvchilar soni: $odam Guruh: $gruppa",
                'hide_keyboard'=>true,
    ]);
    }elseif ($textmassage == '/send' && $from_id == $Dev) {
save("data/$from_id/file.txt","sendtoall");
         MrPHPBot('sendmessage',[
          'chat_id'=>$Dev,
          'text'=>"Iltimos, matnni yuboring:",
    'parse_mode'=>'MarkDown',
    'disable_web_page_preview'=>true
        ]);
}elseif ($step == 'sendtoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","to");
     MrPHPBot('sendmessage',[
          'chat_id'=>$memuser,        'text'=>$textmassage,
    'parse_mode'=>'MarkDown'
        ]);
    }
} elseif ($textmassage == '/all' && $from_id == $Dev) {
save("data/$from_id/file.txt","fortoall");
         MrPHPBot('sendmessage',[
          'chat_id'=>$Dev,
          'text'=>"Iltimos, matnni yuboring:",
    'parse_mode'=>'MarkDown',
        ]);
}elseif ($step == 'fortoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","none");
Forward($memuser, $chat_id,$message_id);
    }
}
elseif (strpos($textmassage , "/setwelcome") !== false && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$we = str_replace("/setwelcome","",$textmassage);
save("data/$chat_id/textwelcome.txt","$we");
SendMessage($chat_id,"Bajarildi");
}
}
elseif (strpos($textmassage , "/setflood") !== false && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$we = str_replace("/setflood","",$textmassage);
if ($we <= 20 && $we >= 1){
save("data/$chat_id/numflood.txt","$we");
SendMessage($chat_id,"Bajarildi");
}
else{
MrPHPBot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"Floodlar soni minimum 1ta, maksimal 20ta",
              ]);
}
}
}
elseif ($textmassage == "/welcome enable" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✔️");
SendMessage($chat_id,"Bajarildi");
}
}
elseif ($textmassage == "/flood check" && $from_id == $Dev) {
rmdir("data/spam");
mkdir("data/spam");
SendMessage($chat_id,"Bajarildi");
}
elseif ($textmassage == "/lock flood" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✔️");
SendMessage($chat_id,"Bajarildi");
}
}
elseif ($textmassage == "/unlock flood" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✖️");
SendMessage($chat_id,"Bajarildi");
}
}
elseif ($textmassage == "/welcome enable" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✔️");
SendMessage($chat_id,"Bajarildi");
}
}
elseif ($textmassage == "/lock bots" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✔️");
SendMessage($chat_id,"Bajarildi");
}
}
elseif ($textmassage == "/unlock bots" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✖️");
SendMessage($chat_id,"Bajarildi");
}
}
elseif (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbots == "✔️" && $newchatmemberu != "SPDLBot") {
 MrPHPBot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'Guruhga robot qoshish taqiqlangan!',
  'parse_mode'=>'HTML'
 ]);
 MrPHPBot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
elseif ( strpos($textmassage , '/rmsg') !== false  ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($from_id == $owners){
$num = str_replace("/rmsg","",$textmassage);
if ($num <= 1000 && $num >= 1){
for($i=$message_id; $i>=$message_id-$num; $i--){
MrPHPBot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
MrPHPBot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"$num ta xabar o'chirildi",
              ]);
}else{
MrPHPBot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"Xabar o'chirishlar soni maksimal 25ta",
              ]);
}
}
}
}
elseif ( strpos($textmassage ,"/setname") !== false && $from_id == $owners  ) {
  $newname= str_replace("/setname","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Nomlandi",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , "/setdescription") !== false && $from_id == $owners ) {
  $newdec= str_replace("/setdescription","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Bajarildi",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="/unpin" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Bajarildi",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/delphoto" && $from_id == $owners){
  save("data/$from_id/file.txt","setphoto");
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
MrPHPBot('deleteChatPhoto',[
   'chat_id'=>$chat_id,
     ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Bajarildi",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/me" && $from_id == $owners){
$sti = "https://provps.ir/anti/Owner.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
  MrPHPBot('sendSticker',[
  'chat_id'=>$chat_id,
  'sticker'=>$sti,
  ]);
  }
}
elseif($textmassage=="/me" && $from_id == $Dev){
$sti = "https://provps.ir/anti/Dev.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
  MrPHPBot('sendSticker',[
  'chat_id'=>$chat_id,
  'sticker'=>$sti,
  ]);
  }
}
elseif($textmassage=="/me"){
$sti = "https://provps.ir/anti/Member.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
  MrPHPBot('sendSticker',[
  'chat_id'=>$chat_id,
  'sticker'=>$sti,
  ]);
  }
}
elseif($textmassage=="/link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"Guruh linki\n$getlinkde",
    'parse_mode'=>'html',
     ]);
 }
}
elseif ($textmassage == "/setphoto" && $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Rasm jo'nating:",
            'parse_mode' => 'MarkDown',
        ]);
    }
} elseif ($step == "setphoto") {
    save("data/$from_id/file.txt", "none");
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        $photo = $update->message->photo;
        $file = $photo[count($photo) - 1]->file_id;
        $get = MrPHPBot('getfile', ['file_id' => $file]);
        $patch = $get->result->file_path;
        file_put_contents("data/$chat_id/photogp.png", file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
        MrPHPBot('setChatPhoto', [
            'chat_id' => $chat_id,
            'photo' => new CURLFile("data/$chat_id/photogp.png")
        ]);
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Bajarildi!",
            'parse_mode' => 'MarkDown',
        ]);
        unlink("data/$chat_id/photogp.png");
    }
}
elseif($textmassage=="/flood manage" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Flood funksiya qabul qilindi. Flood minimum 1ta, maksimum 20ta qabul qiladi",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'inline_keyboard'=>[
 [
 ['text'=>"Floodni yoqish",'callback_data'=>'text'],['text'=>"$floods",'callback_data'=>'lockflood']
 ],
  [
 ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
 ],
  ]
  ])
  ]);
  }}
  elseif($data=="f-"  && $fm == $owners2){
    $floodnew = $flood2 - 1;
    $floodnew1 = $flood2 - 1;
    save("data/$chatid/numflood.txt","$floodnew");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Tanlang:",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Floodni yoqish",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodnew1",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="f+"  && $fm == $owners2){
    $floodne = $flood2 + 1;
    $floodne2 = $flood2 + 1;
    save("data/$chatid/numflood.txt","$floodne");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Tanlang:",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Floodni yoqish",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodne2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockflood.txt","✔️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Floodni yoqish",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockflood.txt","✖️");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"Faollashtirildi",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"Floodni yoqish",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif ($data == 'text')
{
MrPHPBot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"Guruhning professional boti!",
]);
}
$timing = date("Y-m-d-h-i-sa");
$timing = str_replace("am","",$timing);
$metti_khan = file_get_contents("data/spam/$timing-$from_id.txt");
$timing_spam = $metti_khan+1;
file_put_contents("data/spam/$timing-$from_id.txt","$timing_spam");
$metti_khan2 = file_get_contents("data/spam/$timing-$from_id.txt");
if($metti_khan2 >= $flood){
if($floods == "✔️"){
MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
    MrPHPBot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"$first_name guruhdan chetlashtirildi.",
      'parse_mode'=>'MarkDown',
      ]);

}
}
elseif ($text == "ads") {
}
{
   MrPHPBot('answerInlineQuery', [
        'inline_query_id' => $update->inline_query->id,
        'results' => json_encode([[
            'type' => 'article',
             'thumb_url'=>"http://up.upinja.com/mpjd9.jpg",
            'id' => base64_encode(rand(5, 555)),
            'title' => 'Bot haqida',
            'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "Xabarlarni o'chirish.
Stiker, link, reklama va hakozo.
➖➖➖
*Botning rasmiy kanali: @BotFounders*"],
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        ['text' => "Botga qo'shiling", 'url' => 'https://telegram.me/FreeGuardBot']
                    ],
                    [
                        ['text' => "Boshqalar bilan bo'lishing", 'switch_inline_query' => 'ads']
                    ]
                ]
            ]
        ]])
    ]);
}
if($textmassage=="/aksiya" && $tc == "private"){
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"*Aksiya haqida to'liq ma'lumot->* [Aksiya haqida ma'lumot kanali](https://t.me/UzBotStore/80)",
  'parse_mode'=>'MarkDown',
   'disable_web_page_preview'=>true
  ]);
  }
?>
