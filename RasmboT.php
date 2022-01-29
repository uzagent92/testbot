<?php
//Sarvarxon06
$admin = '1306283935'; // Admin ID
$token = '2117290470:AAHeUWySn4p1pcztLtCNkRdQrGexIVFI_Pw';  //Bot token
$userR = "ipythonprogrammer"; //admin user
$kanalimz ="@YangiYilTabriklari"; //kanal useri
$botiym ="@TgRasmBot";//bot useri
//Sarvar06
function bot($method,$datas=[]){
global $token;
$url = "https://api.telegram.org/bot".$token."/".$method;
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
//Sarvarxon06
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $messenge->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
//Sarvarxon06
$photo = $message->photo;
$gif = $message->animation;
$video = $message->video;
$music = $message->audio;
$voice = $message->voice;
$sticker = $message->sticker;
$document = $message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$name = $message->from->first_name;
$Uzbb = file_get_contents("data/$from_id/uzbb.txt");
$Uzb = file_get_contents("data/$from_id/uzb.txt");
$Uzb1 = file_get_contents("data/$from_id/uzb1.txt");
$Uzb2 = file_get_contents("data/$from_id/uzb2.txt");
$Uzb3 = file_get_contents("data/$from_id/uzb3.txt");
$Uzb4 = file_get_contents("data/$from_id/uzb4.txt");
$Uzb5 = file_get_contents("data/$from_id/uzb5.txt");
$Uzb6 = file_get_contents("data/$from_id/uzb6.txt");
$Uzb7 = file_get_contents("data/$from_id/uzb7.txt");
$Uzb8 = file_get_contents("data/$from_id/uzb8.txt");
$Uzb9 = file_get_contents("data/$from_id/uzb9.txt");
$Uzb10 = file_get_contents("data/$from_id/uzb10.txt");
$Uzb11 = file_get_contents("data/$from_id/uzb11.txt");
$Uzb12 = file_get_contents("data/$from_id/uzb12.txt");
$Uzb13 = file_get_contents("data/$from_id/uzb13.txt");
$Uzb14 = file_get_contents("data/$from_id/uzb14.txt");
$Uzb15 = file_get_contents("data/$from_id/uzb15.txt");
$Uzb16 = file_get_contents("data/$from_id/uzb16.txt");
$Uzb17 = file_get_contents("data/$from_id/uzb17.txt");
$Uzb18 = file_get_contents("data/$from_id/uzb18.txt");
$Uzb19 = file_get_contents("data/$from_id/uzb19.txt");
$Uzb20 = file_get_contents("data/$from_id/uzb20.txt");
$Uzb21 = file_get_contents("data/$from_id/uzb21.txt");
$Uzb22 = file_get_contents("data/$from_id/uzb22.txt");
$Uzb23 = file_get_contents("data/$from_id/uzb23.txt");
$Uzb24 = file_get_contents("data/$from_id/uzb24.txt");
$Uzb25 = file_get_contents("data/$from_id/uzb25.txt");
$Uzb26 = file_get_contents("data/$from_id/uzb26.txt");
$Uzb27 = file_get_contents("data/$from_id/uzb27.txt");
$Uzb28 = file_get_contents("data/$from_id/uzb28.txt");
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");
$soat = date('H:i:s',strtotime('4 hour'));
$sana=date("d-F, Y-\y\i\l",strtotime("4 hour"));
//Knopkalar 
$update = json_decode(file_get_contents('php://input'));
$admin = "1306283935";
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$botiym = "Tgrasmbot";
$tx = $message->text;
$text= $message->text;
$ism = file_get_contents("Sarvarxon06/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
$name = $message->chat->first_name;
$user = $message->from->username;
//Sarvarxon06
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;
$fadmin = $message->from->id;
$cty = $message->chat->type;

$mid = $message->message_id;
$tx = $message->text;
$id1 = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;

$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;
$title = $message->chat->title;
$description = $message->chat->description;

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ismi = $message->new_chat_member->first_name;
$is_bot = $message->new_chat_member->is_bot;

$sticker = $message->sticker;
$audio = $message->audio;
$voice = $message->voice;
$video = $message->video;
$caption = $message->caption;
$performer = $message->performer;
$gif = $message->animation;
$doc = $message->document;
$contact = $message->contact;
$game = $message->game;
$location = $message->location;
$forward_ch = $message->forward_from_chat;
$forward = $message->forward_from;
$selfi1 = $message->video_note;

$chan  = $update->channel_post;
$ch_text = $chan->text;
$ch_photo = $chan->photo;
$ch_mid = $chan->message_id;
$ch_cid = $chan->chat->id;

$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

mkdir("Sarvarxon06");
mkdir("Stat");
mkdir("Bot");
$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎥Ismga Video"]],
[['text'=>"☃️𝚈𝚊𝚗𝚐𝚒 𝚈𝚒𝚕 𝚃𝚊𝚋𝚛𝚒𝚔𝚕𝚊𝚛𝚒🎄"]],
[['text'=>"📸𝚁𝚊𝚜𝚖 𝚝𝚊𝚢𝚢𝚘𝚛𝚕𝚊𝚜𝚑"],['text'=>"✨𝚀𝚒𝚣𝚒𝚚𝚊𝚛𝚕𝚒⚡"]],
[['text'=>"🤖𝙱𝚘𝚝 𝚑𝚊𝚚𝚒𝚍𝚊 ᵃᵈᵐⁱⁿᵍᵃ ᵐᵘʳᵒʲᵃᵃᵗ👨‍💻"]],
]
]);
//foydali bo‘lim👇
$fkey = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔃𝚈𝚊𝚗𝚐𝚒𝚕𝚊𝚜𝚑🔄"],],
[['text'=>"🎅𝚈𝚊𝚗𝚐𝚒 𝚈𝚒𝚕🎄"],['text'=>"🎬𝙷𝚊𝚛𝚏𝚐𝚊 𝚟𝚒𝚍𝚎𝚘🎥"],],
[['text'=>"📰𝚈𝚊𝚗𝚐𝚒𝚕𝚒𝚔𝚕𝚊𝚛 ⁿᵉʷˢ"],['text'=>"💱𝚅𝚊𝚕𝚢𝚞𝚝𝚊 𝚔𝚞𝚛𝚜𝚒💲"],],
[['text'=>"❤️𝚂𝚎𝚟𝚐𝚒 𝚝𝚎𝚜𝚝"],['text'=>"🎇𝙿𝚜𝚒𝚡𝚘𝚕𝚒𝚔 𝚝𝚎𝚜𝚝🎆"],],
[['text'=>"📲𝚃𝚎𝚕𝚎𝚐𝚛𝚊𝚖 𝚏𝚘𝚗𝚕𝚊𝚛𝚒🎴"],['text'=>"📚 𝚃𝚎𝚕𝚎𝚐𝚛𝚊𝚖 𝚝𝚒𝚕𝚕𝚊𝚛𝚒 ☑️"],],
[['text'=>"🔝𝙱𝚘𝚜𝚑 𝚖𝚎𝚗𝚞🔝"],]]
]);
//adminga xabar👇
$keyseis = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🤖𝙱𝚘𝚝𝚗𝚒 𝚋𝚊𝚑𝚘𝚕𝚊𝚜𝚑"]],
[['text'=>"💬𝙵𝚒𝚔𝚛 𝚋𝚒𝚕𝚍𝚒𝚛𝚒𝚜𝚑"],['text' =>"👨‍✈️𝙰𝚍𝚖𝚒𝚗𝚜𝚝𝚛𝚊𝚝𝚘𝚛👨‍💻"]],
[['text'=>"🔝𝙱𝚘𝚜𝚑 𝚖𝚎𝚗𝚞🔝"],],
]
]);
//Psixologik
$menu = json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"📅 𝐊𝐮𝐧"],['text'=>"🧾 𝐎𝐲"]],
	[['text'=>"🌅 𝐅𝐚𝐬𝐥"],['text'=>"💫𝐌𝐮𝐜𝐡𝐚𝐥𝐥𝐚𝐫"]],
    [['text'=>"⬆️𝙾𝚛𝚚𝚊𝚐𝚊⬆️"]],
	]
	]);
//Logolar turlari👇
$keys = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📿𝙸𝚜𝚖𝚕𝚊𝚛 𝚖𝚊'𝚗𝚘𝚜𝚒"]],
[['text'=>"🤴𝚈𝚒𝚐𝚒𝚝𝚕𝚊𝚛"],['text'=>"👸𝚀𝚒𝚣𝚕𝚊𝚛"]],
[['text'=>"🤵𝚂𝚎𝚟𝚒𝚜𝚑𝚐𝚊𝚗𝚕𝚊𝚛👰"]],
[['text'=>"🕋𝙷𝚊𝚓 ᵏᵃᵇᵃ🕋"]],
[['text'=>"👀𝙺𝚘'𝚣𝚐𝚊"],['text'=>"➰𝙱𝚞𝚢𝚞𝚖𝚕𝚊𝚛𝚐𝚊"]],
[['text'=>"🟡𝙷𝚄𝙼𝙰𝙽𝚂🟡"],['text'=>"🩸𝚀𝚘𝚗𝚕𝚒"]],
[['text'=>"🔝𝙱𝚘𝚜𝚑 𝚖𝚎𝚗𝚞🔝"]],
]
]);
//Logolar knopkalari👇
//panel bo‘lim👇
$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📄xᴀʙᴀʀ ᴊᴏ'ɴᴀᴛɪsʜ"],],
[['text'=>"📊sᴛᴀᴛɪsᴛɪᴋᴀ"],['text'=>"🗳ʙᴏᴛ ᴋᴏᴅɪ🗳"],],
[['text'=>"🚫Ban🚫"],['text'=>"🚫ʙᴀɴᴅᴀɴ ᴏʟɪsʜ✅"],],
[['text'=>"❇ᴜsᴇʀʟᴀʀɢᴀ xᴀʙᴀʀ ᴊᴏ'ɴᴀᴛɪsʜ❇"],],
[['text'=>"🔝𝙱𝚘𝚜𝚑 𝚖𝚎𝚗𝚞🔝"],],
]
]);
//A'zo bo‘lish bo‘limi👇
$ret1 = bot("getChatMember",[
         "chat_id"=>"-1001532811875", // Sarvarxon06
         "user_id"=>$uid
         ]);
     $ret2 = bot("getChatMember",[
         "chat_id"=>"-1001532811875", // Sarvarxon06
         "user_id"=>$uid
         ]);
     $ret3 = bot("getChatMember",[
         "chat_id"=>"-1001532811875", // Sarvarxon06
         "user_id"=>$uid
         ]);
$stat1 = $ret1->result->status;
$stat2 = $ret2->result->status;
$stat3 = $ret3->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member") and ($stat3=="creator" or $stat3=="administrator" or $stat3=="member")){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"<b>𝑄𝑢𝑦𝑖𝑑𝑎𝑔𝑖 𝑘𝑎𝑛𝑎𝑙𝑖𝑚𝑖𝑧𝑔𝑎 𝑜𝑏𝑢𝑛𝑎 𝑏𝑜ʻ𝑙𝑖𝑛𝑔. 𝑂𝑏𝑢𝑛𝑎 𝑏𝑜'𝑙𝑖𝑏 𝑞𝑎𝑦𝑡𝑎 /start 𝑏𝑜𝑠𝑖𝑛𝑔! 𝐵𝑜𝑡𝑛𝑖 𝑘𝑒𝑦𝑖𝑛 𝑡𝑜ʻ𝑙𝑖𝑞 𝑖𝑠ℎ𝑙𝑎𝑡𝑖𝑠ℎ𝑖𝑛𝑔𝑖𝑧 𝑚𝑢𝑚𝑘𝑖𝑛!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ 𝘖𝘣𝘶𝘯𝘢 𝘣𝘰'𝘭𝘪𝘴𝘩","url"=>"https://t.me/YangiYilTabriklari"]],
]
]),
]); 
return false;
}
//BLOKI
$Sarvarxon06 = json_decode(file_get_contents('php://input'));
$Sarvar = $Sarvarxon06->message;
$cid = $Sarvar->chat->id;
$text=$Sarvar->text;
$type = $Sarvar->chat->type;
$reply = $Sarvar->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
 if($type=="private"){
if($text == "🚫ʙᴀɴᴅᴀɴ ᴏʟɪsʜ✅" and $cid==$admin){
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🚫ʙᴀɴᴅᴀɴ ᴏʟɪɴᴀᴅɪɢᴀɴ 🆔️ ɴɪ ʏᴜʙᴏʀɪɴɢ!" ,
       'parse_mode'=>'markdown',  
       'reply_markup' => $rpl,
       ]);
       }}
       if($reply == "🚫ʙᴀɴᴅᴀɴ ᴏʟɪɴᴀᴅɪɢᴀɴ 🆔️ ɴɪ ʏᴜʙᴏʀɪɴɢ!"){  
$fayl = file_get_contents("block.db");
$fayl2 = "$text";
$fayl3 = str_replace($fayl2,"",$fayl);
file_put_contents("block.db","$fayl3");
$fayl = file_get_contents("block.db");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "[$text](tg://user?id=$text)  ʙᴀɴᴅᴀɴ ᴏʟɪɴᴅɪ" ,
       'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
      ]); 
      bot('sendmessage', [
      'chat_id' =>$sd,
       'text' => "*𝘚𝘢𝘭𝘰𝘮*  [$name](tg://user?id=$uid)  𝘚𝘪𝘻𝘨𝘢 𝘹𝘶𝘴𝘩 𝘹𝘢𝘣𝘢𝘳 𝘣𝘰𝘳!
𝘚𝘪𝘻 [𝘈𝘥𝘮𝘪𝘯𝘴𝘵𝘳𝘢𝘵𝘰𝘳](tg://user?id=$admin) 𝘛𝘰𝘮𝘰𝘯𝘪𝘥𝘢𝘯 𝘢𝘥𝘮𝘪𝘯𝘥𝘢𝘯 𝘰𝘭𝘪𝘯𝘥𝘪𝘯𝘨𝘪𝘻!
𝘌𝘯𝘥𝘪 𝘣𝘰𝘵𝘯𝘪 𝘣𝘦𝘮𝘢𝘭𝘰𝘭 𝘪𝘴𝘩𝘭𝘢𝘵𝘪𝘴𝘩𝘪𝘯𝘨𝘪𝘻 𝘮𝘶𝘮𝘬𝘪𝘯!
𝘘𝘢𝘺𝘵𝘢 /start 𝘣𝘰𝘴𝘪𝘯𝘨!" ,
       'parse_mode'=>'markdown', 
       ]);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$bass = $message->text;
$uid = $message->from->id;
$reply = $message->reply_to_message->text;

$replymenu = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$blocks=file_get_contents("block.db");
if(mb_stripos($blocks,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>🖐𝘚𝘢𝘭𝘰𝘮 <a href='tg:user?id=$cid'>$name</a> \n𝘚𝘪𝘻 ⛔️ 𝘉𝘰𝘵𝘪𝘮𝘪𝘻𝘥𝘢𝘯 𝘧𝘰𝘺𝘥𝘢𝘭𝘢𝘯𝘢 𝘰𝘭𝘮𝘢𝘺𝘴𝘪𝘻, 𝘤𝘩𝘶𝘯𝘬𝘪 𝘣𝘰𝘵 𝘴𝘪𝘻𝘯𝘪 𝘣𝘭𝘰𝘬𝘭𝘢𝘨𝘢𝘯!!!\n𝘉𝘭𝘰𝘬𝘥𝘢𝘯 𝘤𝘩𝘪𝘲𝘪𝘴𝘩 𝘶𝘤𝘩𝘶𝘯 𝘈𝘥𝘮𝘪𝘯𝘴𝘵𝘳𝘢𝘵𝘰𝘳𝘨𝘢 𝘺𝘰𝘻𝘪𝘯𝘨! 𝘉𝘭𝘰𝘬𝘥𝘢𝘯 𝘤𝘩𝘪𝘲𝘮𝘢𝘨𝘶𝘯𝘪𝘯𝘨𝘪𝘻𝘤𝘩𝘢 𝘣𝘰𝘵 𝘴𝘪𝘻 𝘶𝘤𝘩𝘶𝘯 𝘪𝘴𝘩𝘭𝘢𝘮𝘢𝘺𝘥𝘪!!!🚫!</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"𝘈𝘥𝘮𝘪𝘯𝘴𝘵𝘳𝘢𝘵𝘰𝘳👨‍💻", "url"=>"https://t.me/IPythonProgrammer"]],
]
])
]);return false;}

if($bass=="🚫Ban🚫"){
if($cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Ban Qilinadigan 🆔️ni Yuboring!",
'reply_markup'=>$replymenu,
]);
}
}
if($reply=="Ban Qilinadigan 🆔️ni Yuboring!"){
file_put_contents("block.db","$blocks\n$bass");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"✅[$bass](tg://user?id=$bass) *Banlandi!*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);
        bot('SendMessage',[
   'chat_id'=>$bass,
        'text'=>"<b>🚫😡Sizni ⛔bu botda bloklashdi🚫. Endi botimizdan foydalana olmaysiz!</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}
//Sarvarxon06
if($text=="⬅️𝙾𝚛𝚚𝚊𝚐𝚊⬅️"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz 📸𝚁𝚊𝚜𝚖 𝚝𝚊𝚢𝚢𝚘𝚛𝚕𝚊𝚜𝚑 𝚖𝚎𝚗𝚞𝚜𝚒𝚍𝚊𝚜𝚒𝚣.</b>",
'parse_mode'=>'html',
'reply_markup'=>$keys
]);
}
//Sarvar06
if($text=="📸𝚁𝚊𝚜𝚖 𝚝𝚊𝚢𝚢𝚘𝚛𝚕𝚊𝚜𝚑"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Botlarimnikanali/19",
'caption'=>"<b>🖼️ 𝚁𝚊𝚜𝚖 𝚝𝚊𝚢𝚢𝚘𝚛𝚕𝚊𝚜𝚑 𝚋𝚘'𝚕𝚒𝚖𝚒𝚐𝚊 𝚡𝚞𝚜𝚑 𝚔𝚎𝚕𝚒𝚋𝚜𝚒𝚣 𝚚𝚊𝚗𝚍𝚊𝚢 𝚛𝚊𝚜𝚖 𝚝𝚊𝚢𝚢𝚘𝚛𝚕𝚊𝚖𝚘𝚚𝚌𝚑𝚒𝚜𝚒𝚣?

👨‍💻 𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒: @IPythonProgrammer

𝚁𝚊𝚜𝚖 𝚝𝚞𝚛𝚒𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐 ☟︎︎︎!</b>",
'parse_mode'=>'html',
'reply_markup'=>$keys
]);
}
//Foydali bo‘lim xabari 👇
if($text=="✨𝚀𝚒𝚣𝚒𝚚𝚊𝚛𝚕𝚒⚡"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"
✨𝚀𝚒𝚣𝚒𝚚𝚊𝚛𝚕𝚒 𝚋𝚘'𝚕𝚒𝚖𝚐𝚊 𝚡𝚞𝚜𝚑 𝚔𝚎𝚕𝚒𝚋𝚜𝚒𝚣😀!",
'parse_mode'=>'markdown',
'reply_markup'=> $fkey,
     ]);
}
//admin xabari
if($text == "🤖𝙱𝚘𝚝 𝚑𝚊𝚚𝚒𝚍𝚊 ᵃᵈᵐⁱⁿᵍᵃ ᵐᵘʳᵒʲᵃᵃᵗ👨‍💻"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<a href='tg:user?id=$cid'>$name</a> 𝙰𝚍𝚖𝚒𝚗𝚐𝚊 𝚖𝚞𝚛𝚘𝚓𝚊𝚊𝚝 𝚚𝚒𝚕𝚖𝚘𝚚𝚌𝚑𝚒𝚖𝚒𝚜𝚒𝚣? 𝙱𝚘𝚝 𝚑𝚊𝚚𝚒𝚍𝚊 𝚏𝚒𝚔𝚛𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚋𝚒𝚕𝚍𝚒𝚛𝚒𝚗𝚐!

𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒 ☞︎︎︎ <a href = 'tg://user?id=1306283935'>IPythonProgrammer</a>",
'parse_mode'=>"html",
'reply_markup'=>$keyseis,
]);
}
//Logolar xabari👇
/*if($text=="🤴Yigitlar uchun🤴"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/ikandaroff/629",
'caption'=>"<b>🖤Dasturchi: @Ipythonprogrammer  
O‘zingizga yoqqan rasmga ism yozish uchun bittasini tanlang☟ </b>",
'parse_mode'=>'html',
]);
}*/
if($text=="🤴𝚈𝚒𝚐𝚒𝚝𝚕𝚊𝚛"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Botlarimnikanali/3",
'caption'=>"<b>𝚂𝚒𝚣𝚐𝚊 𝚑𝚊𝚖 𝚜𝚑𝚞𝚗𝚍𝚊𝚢 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚔𝚎𝚛𝚊𝚔𝚖𝚒? 𝚄𝚗𝚍𝚊 𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐! 👨‍💻 𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒: @IPythonProgrammer</b>",
'parse_mode'=>'html',
'reply_markup'=>$key1
]);
}
if($text=="👸𝚀𝚒𝚣𝚕𝚊𝚛"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Botlarimnikanali/2",
'caption'=>"<b>𝚂𝚒𝚣𝚐𝚊 𝚑𝚊𝚖 𝚜𝚑𝚞𝚗𝚍𝚊𝚢 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚔𝚎𝚛𝚊𝚔𝚖𝚒? 𝚄𝚗𝚍𝚊 𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐! 👨‍💻 𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒: @IPythonProgrammer</b>",
'parse_mode'=>'html',
'reply_markup'=>$key2
]);
}
if($text=="🕋𝙷𝚊𝚓 ᵏᵃᵇᵃ🕋"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Botlarimnikanali/4",
'caption'=>"<b>𝚂𝚒𝚣𝚐𝚊 𝚑𝚊𝚖 𝚜𝚑𝚞𝚗𝚍𝚊𝚢 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚔𝚎𝚛𝚊𝚔𝚖𝚒? 𝚄𝚗𝚍𝚊 𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐! 👨‍💻 𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒: @IPythonProgrammer</b>",
'parse_mode'=>'html',
'reply_markup'=>$keyaa2
]);
}
if($text=="👀𝙺𝚘'𝚣𝚐𝚊"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Botlarimnikanali/5",
'caption'=>"<b>𝚂𝚒𝚣𝚐𝚊 𝚑𝚊𝚖 𝚜𝚑𝚞𝚗𝚍𝚊𝚢 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚔𝚎𝚛𝚊𝚔𝚖𝚒? 𝚄𝚗𝚍𝚊 𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐! 👨‍💻 𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒: @IPythonProgrammer</b>",
'parse_mode'=>'html',
'reply_markup'=>$key3
]);
}
if($text=="➰𝙱𝚞𝚢𝚞𝚖𝚕𝚊𝚛𝚐𝚊"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Botlarimnikanali/6",
'caption'=>"<b>𝚂𝚒𝚣𝚐𝚊 𝚑𝚊𝚖 𝚜𝚑𝚞𝚗𝚍𝚊𝚢 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚔𝚎𝚛𝚊𝚔𝚖𝚒? 𝚄𝚗𝚍𝚊 𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐! 👨‍💻 𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒: @IPythonProgrammer</b>",
'parse_mode'=>'html',
'reply_markup'=>$key4
]);
}
if($text=="🎅𝚈𝚊𝚗𝚐𝚒 𝚈𝚒𝚕🎄"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://uzagent92.myxvest1.ru/Apilarim/Yangiyil/Kun/yangiyil.php?text=dddbczdstttjl",
'caption'=>"<b> 👨‍💻 𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒: @IPythonProgrammer</b>",
'parse_mode'=>'html',
'reply_markup'=>$key5
]);
}
if($text=="🎥Ismga Video"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Botlarimnikanali/17",
'caption'=>"<b>Doniyor ismiga video tayyor 

Sizga ham wunday video kerakmi unda 👉  @Ismlargavideolargr  ga 50 odam quwing. Odam quwib bulganingizdan so‘ng  👉 @UzAloqachirobot  ga murojaat qiling</b>",
'parse_mode'=>'html',
'reply_markup'=>$key6
]);
}
if($text=="🎥Ismga Video"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Botlarimnikanali/18",
'caption'=>"<b>Feruzabonu ismiga video tayyor 

Sizga ham wunday video kerakmi unda 👉  @Ismlargavideolargr  ga 50 odam quwing. Odam quwib bulganingizdan so‘ng  👉 @UzAloqachirobot  ga murojaat qiling</b>",
'parse_mode'=>'html',
'reply_markup'=>$key6
]);
}
//Sarvarxon06
if($type=="private"){
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>𝙰𝚜𝚜𝚊𝚕𝚘𝚖𝚞 𝙰𝚕𝚊𝚢𝚔𝚞𝚖 $name</b>\n\n🤖 @TgRasmBot 𝚘𝚛𝚚𝚊𝚕𝚒 𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚊𝚓𝚘𝚢𝚒𝚋 𝚛𝚊𝚜𝚖𝚕𝚊𝚛𝚐𝚊 𝚢𝚘𝚣𝚒𝚋 𝚘𝚕𝚒𝚜𝚑𝚒𝚗𝚐𝚒𝚣 𝚖𝚞𝚖𝚔𝚒𝚗.

𝙾'𝚣𝚒𝚗𝚐𝚒𝚣𝚐𝚊 𝚔𝚎𝚛𝚊𝚔𝚕𝚒 𝚖𝚎𝚗𝚞𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐 ☟︎︎︎

🤖 𝙱𝚘𝚝 @$botiym V 9.1.0",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
}}
//Sarvar06
if($tx == "🔝𝙱𝚘𝚜𝚑 𝚖𝚎𝚗𝚞🔝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"<b>🏠𝙱𝚘𝚜𝚑 𝚖𝚎𝚗𝚞𝚐𝚊 𝚚𝚊𝚢𝚝𝚍𝚒𝚔

𝙾'𝚣𝚒𝚗𝚐𝚒𝚣𝚐𝚊 𝚔𝚎𝚛𝚊𝚔𝚕𝚒 𝚖𝚎𝚗𝚞𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐 ☟︎︎︎</b>",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
}
if($tx == "⬆️𝙾𝚛𝚚𝚊𝚐𝚊⬆️"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"✨𝚀𝚒𝚣𝚒𝚚𝚊𝚛𝚕𝚒 𝚋𝚘'𝚕𝚒𝚖𝚐𝚊 𝚖𝚞𝚟𝚘𝚏𝚊𝚚𝚒𝚢𝚊𝚝𝚕𝚒 𝚚𝚊𝚢𝚝𝚍𝚒𝚗𝚐𝚒𝚣 ✔😊

𝙾'𝚣𝚒𝚗𝚐𝚒𝚣𝚐𝚊 𝚔𝚎𝚛𝚊𝚔𝚕𝚒 𝚋𝚘'𝚕𝚒𝚖𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐☟︎︎︎",
'reply_markup'=>$fkey,
]);
}
//Yangilanish👇
if(mb_stripos($text,"🔃𝚈𝚊𝚗𝚐𝚒𝚕𝚊𝚜𝚑🔄") !== false){ 
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 <b>𝚈𝚞𝚔𝚕𝚊𝚗𝚖𝚘𝚚𝚍𝚊... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
    bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🌐𝙼𝚊'𝚕𝚞𝚖𝚘𝚝𝚕𝚊𝚛𝚒𝚗𝚐𝚒𝚣 |𝚘𝚘% 𝚈𝚊𝚗𝚐𝚒𝚕𝚊𝚗𝚍𝚒!✅",
       'parse_mode'=>'html',  
       'reply_markup'=>$key,
]);
}

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$cid) !==false){
   }else{
   $txt="\n$cid";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
//Admin Panel👇
if($tx == "/panel"){
if($cid == $admin){
bot('sendmessage', [
'chat_id'=>$admin,
'text'=>"✌︎𝙰𝚜𝚜𝚊𝚕𝚘𝚖𝚞 𝙰𝚕𝚊𝚢𝚔𝚘𝚘𝚘𝚘𝚖 
 
𝚇𝚘'𝚓𝚊𝚢𝚒𝚗 𝚙𝚊𝚗𝚎𝚕𝚒𝚗𝚐𝚒𝚣𝚐𝚊 𝚡𝚞𝚜𝚑 𝚔𝚎𝚕𝚒𝚋𝚜𝚒𝚣😀

𝙾'𝚣𝚒𝚗𝚐𝚒𝚣𝚐𝚊 𝚔𝚎𝚛𝚊𝚔𝚕𝚒 𝚝𝚞𝚐𝚖𝚊𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐☟︎︎︎",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*𝙿𝚊𝚗𝚎𝚕 𝚏𝚊𝚚𝚊𝚝 𝚊𝚍𝚖𝚒𝚗 𝚞𝚌𝚑𝚞𝚗 𝚘𝚌𝚑𝚒𝚕𝚊𝚍𝚒!*",
'parse_mode'=>'Markdown',
]);
}
}
if($tx == "❇ᴜsᴇʀʟᴀʀɢᴀ xᴀʙᴀʀ ᴊᴏ'ɴᴀᴛɪsʜ❇"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"✔ 𝚄𝚜𝚎𝚛𝚕𝚊𝚛𝚐𝚊 𝚡𝚊𝚋𝚊𝚛 𝚓𝚘'𝚗𝚊𝚝𝚒𝚜𝚑 𝚞𝚌𝚑𝚞𝚗
/sms 🆔️ 𝚡𝚊𝚋𝚊𝚛 
𝚜𝚑𝚞 𝚝𝚊𝚛𝚣𝚍𝚊 𝚢𝚞𝚋𝚘𝚛𝚒𝚗𝚐!

𝙰𝚍𝚖𝚒𝚗: @$userR",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*𝙱𝚞 𝚏𝚞𝚗𝚔𝚜𝚒𝚢𝚊𝚗𝚒 𝚏𝚊𝚚𝚊𝚝  @$userR 𝚒𝚜𝚑𝚕𝚊𝚝𝚊 𝚘𝚕𝚊𝚍𝚒.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨 𝙰𝚍𝚖𝚒𝚗𝚍𝚊𝚗 𝚢𝚊𝚗𝚐𝚒 𝚡𝚊𝚋𝚊𝚛

👤 [$ismi](tg://user?id=$uid)

💌Habar: $sms

📆 $vaqt 🔸  🕰 $time",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"👤[Foydalanuvchi]($egasi)ga 𝚇𝚊𝚋𝚊𝚛𝚒𝚗𝚐𝚒𝚣 𝚢𝚞𝚋𝚘𝚛𝚒𝚕𝚍𝚒📩",
'parse_mode'=>"markdown", 
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*𝙱𝚞 𝚏𝚞𝚗𝚔𝚜𝚒𝚢𝚊𝚗𝚒 𝚏𝚊𝚚𝚊𝚝 @$userR 𝚒𝚜𝚑𝚕𝚊𝚝𝚊 𝚘𝚕𝚊𝚍𝚒.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($tx,"📊sᴛᴀᴛɪsᴛɪᴋᴀ")!==false){
if($cid == $admin){
$time=date('H:i:s',strtotime('4 hour'));
$sana=date("d-F, Y-\y\i\l",strtotime("4 hour"));
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $txx = "
🌎 Hammasi: $all
├👤: $us
└👥: $gr

👤 - <b>Foydalanuvchilar</b>
👥 - <b>Guruhlar</b>

📆$sana ⏰$time";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'html',
   'text'=>$txx,
  ]);
}
}

$tex = $message->text;
$lichka = file_get_contents("azo.dat");
$xabar = file_get_contents("send.txt");

if($tex=="📄xᴀʙᴀʀ ᴊᴏ'ɴᴀᴛɪsʜ" and $cid==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"
👥ᴜsᴇᴇʀʟᴀʀɢᴀ ʏᴜʙᴏʀɪʟᴀᴅɪɢᴀɴ xᴀʙᴀʀ ᴍᴀᴛɴɪɴɪ ᴋɪʀɪᴛɪɴɢ! 
🚫ʙᴇᴋᴏʀ ǫɪʟɪsʜ ᴜᴄʜᴜɴ /cancel ɴɪ ʙᴏsɪɴɢ.",
    'parse_mode'=>"html",
]); file_put_contents("send.txt","user");
}
if($xabar=="user" and $cid==$admin){
if($tx=="/cancel"){
   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"ʙᴇᴋᴏʀ ǫɪʟɪɴᴅɪ!",
    'parse_mode'=>"html",
]);
  file_put_contents("send.txt","");
}else{
  $lich = file_get_contents("azo.dat");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("sendmessage",[
    'chat_id'=>$lichkalar,
    'text'=>$tex,
    'parse_mode'=>'html'
]);
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"
👨‍💻sɪᴢ ʏᴏᴢɢᴀ xᴀʙᴀʀ ʜᴀᴍᴍᴀɢᴀ ʏᴜʙᴏʀɪʟᴅɪ!",
    'parse_mode'=>'html',
]);
  file_put_contents("send.txt","");
}
}
}

if($tx == "🗳ʙᴏᴛ ᴋᴏᴅɪ🗳"){
if($cid == $admin){
bot('senddocument',[
'chat_id'=>$cid,
'document'=>new CURLfile(__FILE__),
]);
}
}
//Sarvarxon06

if($text=="🏠Bosh Menu🏠"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>𝙰𝚜𝚜𝚊𝚕𝚘𝚖𝚞 𝙰𝚕𝚊𝚢𝚔𝚞𝚖 $name</b>\n\n🤖 @TgRasmBot 𝚘𝚛𝚚𝚊𝚕𝚒 𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚊𝚓𝚘𝚢𝚒𝚋 𝚛𝚊𝚜𝚖𝚕𝚊𝚛𝚐𝚊 𝚢𝚘𝚣𝚒𝚋 𝚘𝚕𝚒𝚜𝚑𝚒𝚗𝚐𝚒𝚣 𝚖𝚞𝚖𝚔𝚒𝚗.

𝙾'𝚣𝚒𝚗𝚐𝚒𝚣𝚐𝚊 𝚔𝚎𝚛𝚊𝚔𝚕𝚒 𝚖𝚎𝚗𝚞𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐 ☟︎︎︎

🤖 𝙱𝚘𝚝 @$botiym V 9.1.0",
'parse_mode'=>'html',
'reply_markup'=>$key
]);
}
$lichka = file_get_contents("lichka.txt");
mkdir("data");
mkdir("data/$cid");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.txt","$lichka\n$cid");
}
}
$reply = $message->reply_to_message->text;
$rpl = json_encode([
'resize_keyboard'=>false,
'force_reply' => true,
'selective' => true
]);

//Foydali bo‘lim uchun
if($tx == "🎅𝚈𝚊𝚗𝚐𝚒 𝚈𝚒𝚕🎄") {   
$kun1 = date('z',strtotime('4 hour')); 
$c2 = 364-$kun1;
$d = date('L',strtotime('4 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H',strtotime('4 hour')); 
$b2 = 23-$kun2;
$kun3 = date('i',strtotime('4 hour')); 
$b3 = 59-$kun3;
$kun4 = date('s',strtotime('4 hour')); 
$b4 = 60-$kun4;
bot('sendmessage',[   
'chat_id'=>$cid,
'text'=>"
🎄𝚈𝚊𝚗𝚐𝚒 𝚢𝚒𝚕𝚐𝚊
├📆𝙺𝚞𝚗 *$b* 
├⏰𝚂𝚘𝚊𝚝 *$b2* 
├⌛𝙼𝚒𝚗𝚞𝚝 *$b3*  
└⏱𝚂𝚎𝚔𝚞𝚗𝚍 *$b4* 🎅𝚚𝚘𝚕𝚍𝚒
📆𝙷𝚘𝚣𝚒𝚛: $Sana ⏰$soat",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid, 
]);   
}
if ($tx == "📰𝚈𝚊𝚗𝚐𝚒𝚕𝚒𝚔𝚕𝚊𝚛 ⁿᵉʷˢ"){
$url = "https://daryo.uz/feed/";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"
🔔𝙴𝚗𝚐 𝚜𝚘'𝚗𝚐𝚐𝚒 📰𝚈𝚊𝚗𝚐𝚒𝚕𝚒𝚔𝚕𝚊𝚛

🆕️[$line]($link)

🍃𝙱𝚊𝚝𝚊𝚏𝚜𝚒𝚕 𝚘'𝚚𝚒𝚜𝚑 𝚞𝚌𝚑𝚞𝚗 𝚋𝚘𝚜𝚒𝚗𝚐",
'parse_mode' =>"markdown",
]);
}
$reply = $message->reply_to_message->text;
if (!file_exists($folder.'/test.fd3')) {
  mkdir($folder);
  file_put_contents($folder.'/test.fd3', 'by ');
}

if (!file_exists($folder2.'/test.fd3')) {
  mkdir($folder2);
  file_put_contents($folder2.'/test.fd3', 'by ');
}

if (file_exists($filee)) {
  $step = file_get_contents($filee);
}


$tx = $message->text;
$name = $message->chat->first_name;
$user = $message->from->username;
$kun1 = date('z', strtotime('4 hour'));

$rpl = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
        
$date = date('d-M Y',strtotime('4 hour'));
$time = date('H:i', strtotime('4 hour')); 

function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AED'){
               $response .= "Markaziy bank valyuta kursi:\n\n1 AED - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AFN'){
               $response .= "1 AFN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AMD'){
               $response .= "1 AMD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'ARS'){
               $response .= "1 ARS - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AUD'){
               $response .= "1 AUD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AZN'){
               $response .= "1 AZN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BDT'){
               $response .= "1 BDT - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BGN'){
               $response .= "1 BGN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BDH'){
               $response .= "1 BDH - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BND'){
               $response .= "1 BND - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BRL'){
               $response .= "1 BRL - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BYN'){
               $response .= "1 BYN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'ZAR'){
               $response .= "🔁Yangilandi: " . $val->date."\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY - " . $val->Rate . " som\n-----------------------------------------------\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
       }
      return $response;
   }
$soat = date('H:i:s',strtotime('4 hour'));
   if($text == '💱𝚅𝚊𝚕𝚢𝚞𝚝𝚊 𝚔𝚞𝚛𝚜𝚒💲'){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>kurs()."𝙷𝚘𝚣𝚒𝚛 𝚜𝚘𝚊𝚝⌚: $soat",
    'parse_mode'=>'html',
]);
    }
//Murojaat uchun👇
if($tx == "👨‍✈️ᴀᴅᴍɪɴsᴛʀᴀᴛᴏʀ👨‍💻"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"
*𝙰𝚍𝚖𝚒𝚗𝚐𝚊 𝚖𝚞𝚛𝚘𝚓𝚊𝚊𝚝 𝚞𝚌𝚑𝚞𝚗 𝚙𝚊𝚜𝚝𝚍𝚊𝚐𝚒 𝚔𝚗𝚘𝚙𝚔𝚊𝚗𝚒 𝚋𝚘𝚜𝚒𝚗𝚐!
Kanal: @Sarvarxon06*",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨‍✈️𝙰𝚍𝚖𝚒𝚗👨‍✈️","url"=>"https://t.me/$userR"],],
[['text'=>"👤𝚂𝚙𝚊𝚖𝚕𝚊𝚛✡","url"=>"https://t.me/UzAloqachirobot"],],
]
])
]);
}
if($text == "💬𝙵𝚒𝚔𝚛 𝚋𝚒𝚕𝚍𝚒𝚛𝚒𝚜𝚑"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"Taklifingizni kiriting!",
	'reply_markup'=>$rpl,
		]);
		}
		if($reply=="Taklifingizni kiriting!"){
			bot('sendmessage',[
			'chat_id'=>$admin,
			'text'=>"<b>Taklif keldi!</b>
      
🧒Yuboruvchi: $name

🔷Login: @$user

🔢Id raqami: <code>$cid</code>

🗒️Taklif: <i>$tx</i>

⌚Soat-<b>$time</b> Bugun-<b>$date</b>",
'parse_mode'=>"html",
]);
sleep(2);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Yaxshi adminga xabar yetkazildi!*\nTaklifingiz adminlarga yoqsa 24 soat ichida siz bilan bog'lanishadi.",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}

    
		if($text=="🤖𝙱𝚘𝚝𝚗𝚒 𝚋𝚊𝚑𝚘𝚕𝚊𝚜𝚑"){
	bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>𝙱𝚒𝚣𝚗𝚒𝚗𝚐 @$botiym  ☜︎︎︎ 𝚗𝚒 𝚋𝚊𝚑𝚘𝚕𝚊𝚗𝚐!</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
                        [['text'=>'⭐']],
                        [['text'=>'⭐⭐']],
                        [['text'=>'⭐⭐⭐']],
                        [['text'=>'⭐⭐⭐⭐']],
                        [['text'=>'⭐⭐⭐⭐⭐']]
]
]), 
]);
}
if($tx == "⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>$name @TgRasmBot  ☜︎︎︎ 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚐𝚊 𝚚𝚘'𝚢𝚐𝚊𝚗 𝚋𝚊𝚕𝚕𝚒𝚗𝚐𝚒𝚣 𝚞𝚌𝚑𝚞𝚗 𝚛𝚊𝚡𝚖𝚊𝚝!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚗𝚒 𝚋𝚊𝚑𝚘𝚕𝚊𝚍𝚒
𝚋𝚊𝚑𝚘𝚕𝚊𝚜𝚑𝚒 ⭐
𝚞𝚜𝚎𝚛𝚒 @$user
𝚒𝚍 𝚛𝚊𝚚𝚊𝚖𝚒: $cid",
]);
}
if($tx == "⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>$name @TgRasmBot  ☜︎︎︎ 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚐𝚊 𝚚𝚘'𝚢𝚐𝚊𝚗 𝚋𝚊𝚕𝚕𝚒𝚗𝚐𝚒𝚣 𝚞𝚌𝚑𝚞𝚗 𝚛𝚊𝚡𝚖𝚊𝚝!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚗𝚒 𝚋𝚊𝚑𝚘𝚕𝚊𝚍𝚒
𝚋𝚊𝚑𝚘𝚕𝚊𝚜𝚑𝚒 ⭐⭐
𝚞𝚜𝚎𝚛𝚒 @$user
𝚒𝚍 𝚛𝚊𝚚𝚊𝚖𝚒: $cid",
]);
}
if($tx == "⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>$name @TgRasmBot  ☜︎︎︎ 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚐𝚊 𝚚𝚘'𝚢𝚐𝚊𝚗 𝚋𝚊𝚕𝚕𝚒𝚗𝚐𝚒𝚣 𝚞𝚌𝚑𝚞𝚗 𝚛𝚊𝚡𝚖𝚊𝚝!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚗𝚒 𝚋𝚊𝚑𝚘𝚕𝚊𝚍𝚒
𝚋𝚊𝚑𝚘𝚕𝚊𝚜𝚑𝚒 ⭐⭐⭐
𝚞𝚜𝚎𝚛𝚒 @$user
𝚒𝚍 𝚛𝚊𝚚𝚊𝚖𝚒: $cid",
]);
}
if($tx == "⭐⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>$name @TgRasmBot  ☜︎︎︎ 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚐𝚊 𝚚𝚘'𝚢𝚐𝚊𝚗 𝚋𝚊𝚕𝚕𝚒𝚗𝚐𝚒𝚣 𝚞𝚌𝚑𝚞𝚗 𝚛𝚊𝚡𝚖𝚊𝚝!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚗𝚒 𝚋𝚊𝚑𝚘𝚕𝚊𝚍𝚒
𝚋𝚊𝚑𝚘𝚕𝚊𝚜𝚑𝚒 ⭐⭐⭐⭐
𝚞𝚜𝚎𝚛𝚒 @$user
𝚒𝚍 𝚛𝚊𝚚𝚊𝚖𝚒: $cid",
]);
}
if($tx == "⭐⭐⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>$name @TgRasmBot  ☜︎︎︎ 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚐𝚊 𝚚𝚘'𝚢𝚐𝚊𝚗 𝚋𝚊𝚕𝚕𝚒𝚗𝚐𝚒𝚣 𝚞𝚌𝚑𝚞𝚗 𝚛𝚊𝚡𝚖𝚊𝚝!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name 𝙱𝚘𝚝𝚒𝚖𝚒𝚣𝚗𝚒 𝚋𝚊𝚑𝚘𝚕𝚊𝚍𝚒
𝚋𝚊𝚑𝚘𝚕𝚊𝚜𝚑𝚒 ⭐⭐⭐⭐⭐
𝚞𝚜𝚎𝚛𝚒 @$user
𝚒𝚍 𝚛𝚊𝚚𝚊𝚖𝚒: $cid",
]);
}
//BOSHLANDI--------------------‐-----------BOSHLANDI-----------------BOSHLANDI
//Yigitlarga👇
//Sarvarxon06
if($text=="🎬𝙷𝚊𝚛𝚏𝚐𝚊 𝚟𝚒𝚍𝚎𝚘🎥"){
bot('sendMessage',[
   'chat_id'=>$cid,
'text'=>"✅ Marhamat, menga ismingizni bosh harfini yuboring!  (Katta Harfda)",
'parse_mode'=>'markdown',
  'reply_markup'=>$orqa,
]);
}
//a
if($text == "A"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/18",
'caption'=>"A harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//b
if($text == "B"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/19",
'caption'=>"B harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//d
if($text == "D"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/20",
'caption'=>"D harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//e
if($text == "E"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/21",
'caption'=>"E harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//f
if($text == "F"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/22",
'caption'=>"F harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//g
if($text == "G"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/23",
'caption'=>"G harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//h
if($text == "H"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/24",
'caption'=>"H harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//i
if($text == "I"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/25",
'caption'=>"I harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//j
if($text == "J"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/26",
'caption'=>"J harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//k
if($text == "K"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/27",
'caption'=>"K harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//l
if($text == "L"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/28",
'caption'=>"L harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//m
if($text == "M"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/29",
'caption'=>"M harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//n
if($text == "N"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/31",
'caption'=>"N harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//o
if($text == "O"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/30",
'caption'=>"O harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//p
if($text == "P"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/32",
'caption'=>"P harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//q
if($text == "Q"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/33",
'caption'=>"Q harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//r
if($text == "R"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/34",
'caption'=>"R harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//s
if($text == "S"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/35",
'caption'=>"S harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//t
if($text == "T"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/36",
'caption'=>"T harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//u
if($text == "U"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/37",
'caption'=>"U harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//v
if($text == "V"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/38",
'caption'=>"V harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//X
if($text == "X"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/39",
'caption'=>"X harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//y
if($text == "Y"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/40",
'caption'=>"Y harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
///z
if($text == "Z"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/41",
'caption'=>"Z harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//ch
if($text == "Ch"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/bjasuraza/42",
'caption'=>"Ch harfiga Video Tayyor 😉

➖➖➖➖➖
@TgRasmBot Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
----------------------------------------------",
'parse_mode'=>'html',
]);
}
//PsixologikTest
if($tx == "🎇𝙿𝚜𝚒𝚡𝚘𝚕𝚒𝚔 𝚝𝚎𝚜𝚝🎆"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"𝐴𝑠𝑠𝑎𝑙𝑜𝑚𝑢 𝑎𝑙𝑎𝑦𝑘𝑢𝑚 𝑈𝑠ℎ𝑏𝑢 𝑏𝑜'𝑙𝑖𝑚 𝑜𝑟𝑞𝑎𝑙𝑖 ℎ𝑎𝑟 𝑥𝑖𝑙 𝑝𝑠𝑖𝑥𝑎𝑙𝑜𝑔𝑖𝑘 𝑡𝑒𝑠𝑡𝑙𝑎𝑟𝑛𝑖 𝑠𝑖𝑛𝑎𝑏 𝑘𝑜'𝑟𝑖𝑠ℎ𝑖𝑛𝑔𝑖𝑧 𝑚𝑢𝑚𝑘𝑖𝑛!",
	'reply_markup'=>$menu
	]);
	}
	if($text=="⬅️𝙾𝚛𝚚𝚊𝚐𝚊"){
  bot('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"<b>𝙾𝚛𝚚𝚊𝚐𝚊 𝚚𝚊𝚢𝚝𝚍𝚒𝚔⬅️</b>",
  'parse_mode'=>'html',
  'reply_markup'=>$menu
  ]);
  }

if($tx == "📅 𝐊𝐮𝐧"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"𝚃𝚞𝚐'𝚒𝚕𝚐𝚊𝚗 𝚔𝚞𝚗𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐.",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"1"],['text'=>"2"],['text'=>"3"],['text'=>"4"]],
	[['text'=>"5"],['text'=>"6"],['text'=>"7"],['text'=>"8"]],
	[['text'=>"9"],['text'=>"10"],['text'=>"11"],['text'=>"12"]],
	[['text'=>"13"],['text'=>"14"],['text'=>"15"],['text'=>"16"]],
	[['text'=>"17"],['text'=>"18"],['text'=>"19"],['text'=>"20"]],
	[['text'=>"21"],['text'=>"22"],['text'=>"23"],['text'=>"24"]],
	[['text'=>"25"],['text'=>"26"],['text'=>"27"],['text'=>"28"]],
	[['text'=>"29"],['text'=>"30"],['text'=>"31"]],
	[['text'=>"⬅️𝙾𝚛𝚚𝚊𝚐𝚊"]],
	]
	]),
	]);
	}
if($tx == "1"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlarning xotirasi pastroq boʻlib, ayrim voqealarni unutib qoʻyadi. Turmush qurishda doimo baxti yurishavermaydi. Agar turmush oʻrtogi mahkam turmasa uyi buzilib ketsa ham parvo qilmaydi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "2"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar koʻngliga yaqin odami bilan ruhan yaqinlashishga moyil boladi. Sevgiga aql bilan yondoshadilar. Oʻziga ruhan yaqinlar bilan turmush qurishni xohlaydilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "3"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar oʻzlarining shiddatkorliklari bilan ajralib turadilar. Koʻngilxushlik jonu-dili. Nafsni qondirmaguncha tinchimaydilar. Doimo oʻzlarini boshqalardan bir pogʻona ustun qoʻyadilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "4"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar boshqalar bilan munosabatda qiynalishadi, shuningdek ular bilan ham oldi-berdi qilish qiyin. Intim munosabatda juda sust. Tushkunlikka beriluvchan, oʻziga sodiq odamni qoʻllab turishga doim muhtoj va qizgʻanchiq boʻlishadi. Unaqalar bilan yashash uchun sabr-bardoshli boʻlish kerak.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "5"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar pulni juda yaxshi koʻrishadi. Oʻzlariga bino qoʻygan boʻladilar. Oʻzlariga uncha qaramasalarda, pul topib boyish payida boʻladilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "6"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar hissiyotli, xayolparast, oʻz eʼtiqodlariga sodiq boʻladilar. Koʻpincha oʻz hissiyotlarini uygʻunlashtirib yuboradilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "7"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar kuni tugʻilganlar bilan ehtiyotkorroq boʻlish zarur. Chunki ularning fikri tez-tez oʻzgarib turadi. Bir joyda turolmaydilar, doim yaxshi sherik axtarib yuradilar, shuning uchun ham ikkinchi bor yostiqdoshlarini almashtirishga toʻgʻri keladi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "8"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar hissiyotli, oʻz doʻstlariga sodiq boʻladilar. Lekin ularni koʻpincha eng ishonganlari ham sotadi. Ularni tushunish va sevish murakkab boʻlib, agar ular sevsalar qattiq sevadilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "9"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar odamlar xohishni bayon qilishga ojiz boʻladilar. Toʻqqizinchida tugʻilganlar kamdan-kam sevib qoladilar, ammo sevsalar bir umrga vafodor boʻladilar. Ular bir marta xato qiladilar. Oʻzlariga mos kishilar bilan tez kirishib ketadilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "10"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar juda yaxshi va baxtli kun. Shu kuni tugʻilganlar ham oʻziga oʻxshagan qobiliyatli sherik izlaydilar. Ular bilan kelishish oson.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "11"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlarning koʻngli ochiq va sadoqatli boʻladilar. Sotqinlik va magʻlubiyatni koʻtara olmaydilar. Ular mustaqillikka intiladilar, lekin mustaqil yashashga qodir emaslar. Ularning hayoti doimo kurashdan iborat.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "12"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar bilan yashash oson, koʻngli ochiq, oʻzlariga oʻxshaganlarni izlab yuradilar, yumshoq xarakterli, ularga qattiq gapirib ish bitkazib boʻlmaydi. Ularga muhabbat,yumshoq soʻzlar bilan muomila qilib kop narsaga erishish mumkin.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "13"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar hissiyotida qiyinchiliklar bor. Bunaqa odamlar ichki tomondan doimo birortasini qoʻllashga muhtoj. Ular bilan doim birga yashash qiyin.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "14"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlarga sherik boʻlish uchun boy odam boʻlish kerak. Munosabati sovuq. Ularni sevib qolish ham mushkul, lekin oʻziga tortadigan ohangrabosi bor.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "15"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar oyning 15-da tugʻilganlar xayolparast, sal narsaga lovullab yonadi, shuncha tez oʻchadi. Yaxshi taʼminlangan puldor odamlar bilan tez chiqishib ketadi. Agar uni yostiqdoshi tushunsa oilasi mustahkam boʻladi</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "16"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar kimgadir qattiq boglanib qolish xususiyatiga ega. Lekin koʻp kishi bilan koʻproq boʻlish ham joniga tegadi. Turmushni turli tomonlarini totib koʻrishga ishqiboz. Ishqiy munosabatda ehtirosga ega,lekin koʻngli boʻsh.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "17"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar hissiyoti kayfiyatiga qarab oʻzgarib turadi. Agar sherigi pand bersa, aloqani butunlay uzadi. Turmushi kamdan-kam buziladi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "18"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar juda ehtirosli boʻlsalarda, oʻzlaridagi moyillikni aytishga uyaladi. Buning uchun oʻzlarini koyib yuradilar. Yumshoq muomilali, juda kam janjallashadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "19"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar oʻzimniki toʻgʻri deydigan, choʻrtkesar, boshqalar uning uchun xizmat qilishni xohlaydigan feʼlga ega. Biror masalani koʻpchilik bilan hal etishni istamaydi, yolgiz oʻzi hal qilishni xohlaydi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "20"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar ruhlar dunyosi bilan yashaydi. Shuning uchun ham sevgan kishisi shunday boʻlishini xohlaydi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "21"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar ham ruhan yaqinlikka moyil boladi. Ular juda beriluvchan boʻlishadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "22"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlarning hissiyotlari kuchli emas. Agar sevib qolsalar bir umr vafodor boʻladilar. Qizgʻanchiq, koʻngli yarim kishilar. Arazchan, ularni doim qoʻllab turishi kerak.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "23"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar sherigiga oʻz tazyiqini oʻtkazishni yoqtiradigan, ehtirosli va unga boʻysunuvchan sherik topmoqchi. Agar shunday sherik topsa turmushi yaxshi boʻladi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "24"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar jismonan zaif, orzular dunyosida yashaydi. Ehtiros bilan sevadi, har xil ish bajarishni yaxshi koʻradi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "25"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar koʻproq moddiy tomondan taʼminlangan odamlar bilan birga birga boʻlishni yoqtiradilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "26"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar juda sezgir boʻladilar, ruhan yaqinlikka muhtoj, sevgan kishilari uchun qurbon boʻlishga ham tayyor koʻngilchangligidan foydalanib turishadi. Lekin qaʼtiyatli</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "27"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar o‘zgaruvchan, pulga yoki narsaga och boʻlganligi uchun ham ogʻmachi, oʻziga oʻxshaganlarni yaxshi koʻradi, koʻp kishi bilan kelishib ketadi, aqlli, kuchli xarakterga ega.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "28"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar chin yurakdan sherigiga sadoqatli, kamtar, ruhan yaqinlikka moyil, yumshoq, sherigi bilan kelishmasa voz kechishi oson. Ular bilan turmush qursa baxtli bola oladilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "29"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tugʻilganlar oʻziga yoqqanlarni maqtanishni xush koʻradilar. Uni baʼzida kimdir yoʻnaltirib turish kerak. Bu kuni tugʻilganlar oʻzgaruvchan boʻladilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "30"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar oʻz hukmini oʻtkazishni yaxshi koʻradilar. Shuning uchun ularga yumshoq soʻz, yon beruvchi sherik zarur boladi. Oʻziga yoqqan narsani orqasidan quvib yuradi va unga erishmaguncha qoʻymaydi, sherigi uning yoʻliga qanday yurganini ham sezmay qoladi. Oʻziga boʻysunuvchilar bilan aloqada boʻlishni koʻproq yoqtiradilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "31"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Bu kunda tug‘ilganlar sadoqatli va koʻngli toza, sevgiga sodiq boʻladilar. Ular juda jahldor va injiq boʻlishlari ham mumkin. Xarakterlari juda ogʻir, bunaqa odamlarni koʻnliga qarab yashaydigan odamlargina baxtli qila oladilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🧾 𝐎𝐲"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"𝚃𝚞𝚐'𝚒𝚕𝚐𝚊𝚗 𝚘𝚢𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐.",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"Yanvar"],['text'=>"Fevral"],['text'=>"Mart"]],
	[['text'=>"Aprel"],['text'=>"May"],['text'=>"Iyun"]],
	[['text'=>"Iyul"],['text'=>"Avgust"],['text'=>"Sentabr"]],
	[['text'=>"Oktabr"],['text'=>"Noyabr"],['text'=>"Dekabr"]],
	[['text'=>"⬅️𝙾𝚛𝚚𝚊𝚐𝚊"]],
	]
	]),
	]);
	}
if($tx == "Yanvar"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Yanvar.Ushbu oy vakillari shu oyda tugʻilgan boʻlsangiz, demak u muloyim va juda taʼsirchan. Doʻst-birodalardan yordamini ayashmaydi. Koʻngilsizliklardan toʻgʻri xulosa chiqarishga harakat qilishsa, omad qushi ularni tark etmaydi. Biroz sabrsizliklari sabab munosabatlarda tushunmovchilik kuzatilishi mumkin.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Fevral"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Fevral.Ushbu oy vakillari o'ziga ishongan, uyim-joyim deydigan, zakovatli erkaklar aynan shu oyda tugʻilarkan. Ayriliqdan qoʻrqishadi. Doim oila davrasiga shoshishadi. Ular uchun eng muhimi, oilaviy baxt. Bitta kamchiliklari kurashuvchanmas. Maqsadlari yoʻlida kichik muammo sabab ham hammasiga qoʻl siltab ketishadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Mart"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Mart.Ushbu oy vakillari bahorning ilk oyida tugʻilgan erkaklar sogʻlom fikrlaydigan boʻlisharkan. Shu bilan birga, juda tejamkor ham. Pullarini tiyin-tiyinlab yiqqanlari uchun ham katta rejalarni bemalol amalga oshirishadi. Salbiy tomonlari – muammoli vaziyat tugʻilganda quyon boʻlishga usta.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Aprel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Aprel.Ushbu oy vakillari katta boʻlsa-da, bolaligini qoʻymagan erkaklar tadbirkor va gapga toʻn kiydiradiganlardan. Aynan shu xususiyatlari sabab ular atrofdagilarni oʻz soʻziga ishontira olishadi va pul borasida omadlari chopadi. Maʼsuliyatli boʻlishsa, hayotda koʻp narsaga erisha olishardi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "May"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#May.Ushbu oy vakillari vahimakashligini hisobga olmasak, aqlli va topqirligi taxsinga loyiq. Xotirjamlik ular uchun juda muhim. Shuning uchun shovqin-suronga yoqlar. Hayotlari bir maromda kechishini istashadi. Oʻzgarishlardan choʻchishadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Iyun"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Iyun.Ushbu oy vakillari mazkur oyda tavallud topgan erkaklar barchaga birdek yaxshilik istashadi, qoʻldan kelgancha atrofdagilarga yordam qilishadi. Bu oyda tugʻilganlar bilan taqdiringizni bogʻlasangiz, hayotingiz farovon kechadi. Chunki ular har qanday vaziyatda ham oltin ortalikni topa olishadi. Salbiy jihatlari, salomataliklariga befarqligi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Iyul"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Iyul.Ushbu oy vakillari favqulodda iqtidor egalari ayni shu oyda dunyoga kelishar ekan. Biroz xayolparatsliklari ham shundan. Ular mashhurlikka va boylikka intilishadi. Agar maqsadlari sari tinmay harakat qilishsa, erishishadi ham. Faqat uni doim olgʻa undab turishingiz kerak.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Avgust"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Avgust.Ushbu oy vakillari erkinlikni xush koʻrishadi. Oʻziga xon – koʻlankasi maydon, boʻlib yurishni istaydi doim. Shu sabab oʻsmirligi ota-onalar bilan muammolar kuzatiladi. Omadlari chopishi yanada oʻziga boʻlgan ishonchni oshiradi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Sentabr"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Sentabr.Ushbu oy vakillari kuzning ilk oyida tugʻilgan erkaklarning ham taʼqiqlarga xushi yoʻq.Xolis va ezgulik istovchi boʻlishadi. Manfaat koʻzlamaydigan doʻstdir ular. Faqat birovlarning fikri bilan ish tutishi yaxshimas.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Oktabr"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Oktabr.Ushbu oy vakillari oilasining, yaqinlarining tashvishi bilan yonib-kuyadiganlar. Ishonuvchanliklar baʼzida pand berib qoladi. Tuygʻulariga quloq tutishadi. Vafodorliklari esa taxsinga loyiq.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Noyabr"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>#Noyabr.Ushbu oy vakillari dono, hajviyaga usta va ishning koʻzini biladigan boʻlishadi. Karyera pogonalarining choʻqqisini zabt etishadi. Chunki ular maʼsuliyatli va mehnatkash. Birovlarning manfaatini deb, oʻzining imkoniyatlarini cheklashlari zarariga ishlaydi</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "Dekabr"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"#Dekabr.Ushbu oy vakillari kezi kelganda, juda qattiqqoʻl. Ilm qilishga moyil boʻlishadi. Notanishlar bilan tez til topishishadi. Karyera borasida ham oshigʻi olchi, faqat shuhratga berilib, manmanlik qilishmasa, bas. Jahli chiqqanda, olovga yogʻ sepmay, jim turishingiz shart",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
	
if($tx == "🌅 𝐅𝐚𝐬𝐥"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"𝚀𝚊𝚢𝚜𝚒 𝚏𝚊𝚜𝚕𝚍𝚊 𝚝𝚞𝚐'𝚒𝚕𝚐𝚊𝚗𝚜𝚒𝚣?",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"🌄 Bahor"],['text'=>"☀Yoz"]],
	[['text'=>"☔ Kuz"],['text'=>"🌨️ Qish"]],
	[['text'=>"⬅️𝙾𝚛𝚚𝚊𝚐𝚊"]],
	]
	]),
	]);
	}
if($tx == "🌄 Bahor"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>BAHOR 🌸
Bahor oshuftalari juda quvnoq va hayotga chanqoq insonlardir. Xushchaqchaqligi va hazilkashligi sabab doʻstlarining hamisha ardogʻida yuradilar. Hayotiy shiorlari: buncha goʻzal bu olam, bir qara! Jamoaning joni boʻlish bilan birga, turli hiyla-nayranglarni uyushtirishga ham usta. Bir joyda oʻtirishlari qiyin, sayohat jonu dili. Tez oshiq boʻlib qoladilar, ammo ayriliqlarni hech qanday gʻazabu-nafratsiz, yengil oʻtkazadilar. Ularni sodiq doʻst sifatida qabul qilmaslik kerak, chunki munosabatlari vaziyat taqozosiga koʻra oʻzgarib turadi. Istalgan daqiqada umuman koʻzdan gʻoyib boʻlib, sizni unutib yuborishlari mumkin. Birovga bogʻlanib qolish ular uchun qadriyat emas. Vujudida bir vaqtning oʻzida extiros, xudbinlik, romantika, talabchanlik va begʻamlik joʻsh urgan bu insonlar vaʼda berishga, ayniqsa, uni bajarmaslikka usta. Lekin ular bilan zerikmaysiz.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx ==  "☔ Kuz"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"KUZ 🍁
Kuzni sevadiganlar tinchlik, yolgʻizlik va osoyishtalikni xush koʻradi. Koʻpchilikni sevmaganlari holda odamlar orasida oʻzlarini noqulay his etmaydilar ham. Shunchaki jamoaning ular uchun ahamiyati yoq. Hayotiy shiori: meni tinch qoʻying! Kayfiyatlari juda beqaror: bir qarasangiz, xandon otib yuradi, bir qarasangiz, hech qanday sababsiz xomrayib oladi. Xuddi kuz havosiga oʻxshab. Begonalarning nekbinligiyu zafarlari koʻpincha gʻashlariga tegadi. Biroq kuzni yaxshi koʻradigan odamlar juda istedodli boʻlishadi. Tasviriy sanʼat, sheʼriyat va nasrda katta muvaffaqiyatlarga erishishlari mumkin. Fikrlashlari ham boshqalardan farq qiladi. Muhabbatda juda vafodor: faqat bir insonni sevib oʻtadilar. Bir bora va butun umrga! Agar muhabbatiga yetisha olmasa oʻlguncha azoblanadi va bu azob ularga ilhom manbai boʻlib qoladi. Ular tabiat va jonzotlar bilan muloqot chogʻidagina oʻzlarini topadilar. Biroq muhabbatiga javob berib, sevib ardoqlaydigan insonni uchratsalar, haqiqiy oilaparvarga aylanadi.",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🌨️ Qish"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"QISH ❄️
Bu faslni sevadiganlar, odatda, oʻziga ishongan va mustaqil insonlardir. Hayotiy shiorlari: faqat oʻzingga ishon! Katta davralarni xush koʻrishmaydi. Doʻstu tanishlari juda oz. Ammo shu ozgina odamlarga qattiq ishonishadi. Ishonmasa, ularni yaqin yoʻlatmagan boʻlishardi. Juda qatʼiyatli bu kimsalar oʻz rejalarini birovga oshkor qilmay, yolgʻiz amalga oshirish yoki hayot oqimini maqsadlariga boʻysundirishni biladilar. Qishni yaxshi koʻradigan insonlar kamgap boʻlishadi. Soʻrasangiz, javob beradilar, ammo oʻzlari hech qachon birinchi boʻlib gap otmaydilar. Pul ishlab topishni bilishadi, qulaylik va farovonlikni qadrlashadi. Oʻzlariga qadrli insonlar uchun koʻp narsadan voz kechishlari mumkin. Kamchiliklari: xasislik va pismiqlik. Shuningdek, bunday insonlar kechirishni bilmaydi.",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "☀Yoz"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"YOZ ☀
Bu faslni yaxshi koʻradiganlar yetakchilik, ilgʻorlik sifatlariga ega. Oʻzlari yonib, atrofdagilarni ham yondirib yurishadi. Ular bilan muloqot juda qiziqarli kechadi. Hech qachon tushkunlikka tushmaydilar va hamisha nekbin kayfiyatda yuradilar. Bunday kimsalar har doim yangidan-yangi gʻoyalar oʻylab topib, amalga oshiradi. Yoz fasli ishtiyoqmandlarining ishdagi oʻsishi ham tez suratda boʻlib, yuqori martabalarga erishadilar, yaxshi rahbarlik sifatlari bilan ajralib turishadi. Hayotiy shiorlari: qaʼtiyat va mehnat. Ayni paytda yetarli darajada murosasoz boʻlib, zarur oʻrinda yon berishni ham bilishadi. Ularning shaxsiy hayotlari ham havas qilsa arzigulik. Chunki aqlni yoʻqotar darajada sevish va juftlariga bir umr sodiq qolishni biladilar. Atrofdagilarning kamchiliklariga nisbatan anchayin sabrli va oʻzlariga nisbatan talabchan bolgan bunday insonlardan yaxshi doʻst chiqadi. Chunki doʻstlarini shodlikda ham, gʻamda ham yolgʻiz qoldirmaydilar. Birgina kamchiliklari bor: haddan ortiq arazchi boʻlganlari holda kechimli emas.",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}

if($tx == "💫𝐌𝐮𝐜𝐡𝐚𝐥𝐥𝐚𝐫"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"𝙾'𝚣 𝚖𝚞𝚌𝚑𝚊𝚕𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐.",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"🐁Sichqon"],['text'=>"🐄Sigir"],['text'=>"🐅Yo‘lbars"]],
	[['text'=>"🐇Quyon"],['text'=>"🐟Baliq"],['text'=>"🐍Ilon"]],
	[['text'=>"🐎Ot"],['text'=>"🐑Qo‘y"],['text'=>"🐒Maymun"]],
	[['text'=>"🐔Tovuq"],['text'=>"🐕It"],['text'=>"🐖To‘ng‘iz"]],
	[['text'=>"⬅️𝙾𝚛𝚚𝚊𝚐𝚊"]],
	]
	]),
	]);
	}
if($tx == "🐁Sichqon"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐁Sichqon muchali — 1924, 1936, 1948, 1960, 1972, 1984, 1996, 2008, 2020, 2032, 2044 yil

Ushbu muchalda tug‘ilganlar tashqi qiyofasidan yoqimli, jozibador, sobitqadam, mehnatsevardirlar. Bir qarashda xotirjam va bosiq ko‘rinsalarda, unga ishonmaslik kerak. Chunki ular asabiyligi va tajovuzkorliklarini yashirib turishadi. Bu yilda tug‘ilganlar tejamkor, boylik yig‘ishga ixlosmand kishilardir. O‘zlari yoqtirgan odamlargagina qo‘llari ochiq. Chaqmachaqarlikni xush ko‘rishadi, fisqu-fujurdan hazar qilishmaydi, shu bois haqiqiy do‘stlaridan ko‘ra tanish-bilishlari ko‘p. Hech qachon hech kimga ishonishmaydi, g‘am-tashvishlarini tanholikda o‘zlari tortadilar. Ular kelajaklaridan tashvishlanib, keksayganda birovga qaram bo‘lmaslik uchun, tejab-tergashni hamisha orzu qilishadi. Jismoniy ishlardan ko‘ra aqliy mehnat bilan bog‘liq ishlarni bajonidil bajarishadi. Baxtga qarshi yig‘gan pullarini orqa-oldiga qaramay shu zahoti sarf qilishadi. Ular keksayganda tinch hayot kechirishadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐄Sigir"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐄Sigir muchali — 1925, 1937, 1949, 1961, 1973, 1985, 1997, 2009, 2021, 2033, 2045 yil

Ushbu muchalda tug‘ilganlar sabr-toqatli kamgap, ishonchga loyiq, vazmin, imillagan, yaxshi feʼl-atvorli kishilardir. Aksar hollarda sodda qiyofada bo‘lishsada, aql-zakovat sohibi hamda chuqur mulohaza yurita olish qobiliyatiga ega shaxslardir. Odatda kamgap, biroq ilhom kelganda gapdon bo‘lib ketishadi. Ular jismoniy jihatdan baquvvat, hayotning achchiq-chuchugini totishga bardoshlidir. Turmushlarida oila katta ahamiyat kasb etadi. Bolalarini yaxshi ko‘rib, ular bilan faxrlanishadi. Biroq buyruq berishga o‘rganganliklari sababli ularga ham tez-tez qo‘pollik qilib turishadi. Ho‘kiz yilida tug‘ilganlar o‘z oilasiga baxt-saodat keltiruvchi, haqiqiy mehnatkash kishilardir. Ushbu muchal ayollari xonanishin bo‘lib, o‘z oilalari uchun juda jon kuydirishadi. Oila ravnaqi uchun uni qattiqqo‘llik bilan boshqarib borishadi. Erlarini ko‘pincha o‘z izmlariga tushirishadi. Ushbu yilda tug‘ilgan aksariyat er-xotinlar xushmuomala, sadoqatli va hissiyotli bo‘lishi mumkin. Lekin xayolparast ham bo‘lishi mumkin. Keksayganlarida mushkul ahvolga tushib qolishlari mumkin, ammo buni bartaraf eta olishsa qarilik gashtini xotirjam suraveradilar.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐅Yo‘lbars"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐅Yo‘lbars muchali — 1926, 1938, 1950, 1962, 1974, 1986, 1998, 2010, 2022, 2034, 2046 yil

Ushbu muchalda tug‘ilganlar hissiyotga beriluvchan, jahli tez va tartib-intizomga rioya qilmaydigan kishilardir. Ular katta yoshdagilar yoki rahbarlar bilan tez-tez janjallashib turishadi, hatto o‘zlarining haq emasliklarini fahmlasalarda, baribir bahslashishga tayyordirlar. Ulardan ko‘pincha inqilobchilar, rahnamolar chiqadi. Itoat etishni yoqtirishmaydi, ammo boshqalarga aytganini qildirishadi. Shu bilan birga, ko‘pincha, yaxshi o‘ylab ko‘rmasdan qaror qabul qilishadi yoki to‘g‘ri xulosani juda kech chiqarishadi. Agar biror ishni boshlashdan oldin yaxshilab o‘ylab ko‘rish va dono maslahatlarga quloq solishni uddasidan chiqa olishsa, katta-katta muvaffaqiyatlarga erishishi mumkin. Tabiatan kurashuvchang, qo‘rs va jizzaki bo‘lib, ko‘zlagan ishlari uchun o‘zlarini qurbon qilishga ham qodir. Ulardan yaxshi lashkarboshilar yoki korxonalarning rahbarlari chiqadi. Lekin xavfli jinoyatchi ham bo‘lishi mumkin, chunki tavakkalchilik bilan qilinadigan har qanday faoliyatni yaxshi ko‘rishadi. Ular juda ham jo‘shqin va kuchli sevgi sohibidirlar. Ammo ehtirosli bo‘la turib, kamdan-kamlari ishq-muhabbat bobida baxtga erishadi. Dastlabki hayotlari osuda va halovatli o‘tadi, biroq keyinchalik kuchli va shiddatli kechinmalarni boshdan kechirishadi. Shunga qaramay, keksayguncha yashay olsalar, qolgan umrlarini tinch va xotirjamlik bilan o‘tkazishadi. Bular odatda omadli odamlardir.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐇Quyon"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐇Quyon muchali — 1927, 1939, 1951, 1963, 1975, 1987, 1999, 2011, 2023, 2035, 2047 yil

Ushbu muchalda tug‘ilganlar o‘ziga xos xislatlarga ega bo‘lib, qobiliyatli, izzattalab, kamtarin, bosiq va saxovatli kishilardir. Benuqson didlari bilan ajralib turadilar, hammaning tahsiniga va ishonchiga sazovor bo‘ladilar. Biroq jiddiy kamchiligi yengiltaklik bo‘lib, hatto eng yaxshi xislatlari ham yuzakidir. Bundan tashqari, g‘iybat qilishni, gap tashishni yaxshi ko‘rishadi, lekin buni kishi bilmas holda, xushmuomalalik va ehtiyotlik bilan amalga oshirishadi. Odatda, vazmin va tepsa-tebranmas bo‘lganligidan, ular tinchini buzish qiyin. Ularda haqiqiy hissiyotdan ko‘ra, tantiqlik kuchli. Arzimas bahona bilan yig‘lashlari mumkin, lekin shu zahoti ovunib qolishadi. Odatda, ularning hammasi mutaassib bo‘lib, hayot tarzlariga putur yetkazadigan, uni qiyinlashtiradigan har qanday yangilikka toqatlari yo‘q. Eng avval badastir xavf-xatarsiz yashashga intiladi. Oldindan yaxshi va yomon tomonlarini jamlab ko‘rmaguncha, hech bir ishga qo‘l urishmaydi. Ajoyib ishchanlik qobiliyatiga ega kishilardir. Garchi, baʼzan o‘taketgan rasmiyatchi bo‘lishsada, halol va o‘z so‘zlarining ustidan chiqishadi. Iqtisodiy jihatdan hamisha omadlari yurishadi, o‘ylagan ishlarini amalga oshirishda epchillik ko‘rsatishadi. Ulardan ajoyib ishbilarmon kishilar yetishib chiqadi. Hayotlari tahlika ostida qolmasa, isteʼdodli huquqshunos yoki diplomat ham bo‘lishlari mumkin. Bu muchalda tug‘ilgan ayollar did, mehmondo‘stlik va yaxshi vakillik talab qilinadigan har qanday sohada o‘zini ko‘rsatishi mumkin. Umuman, ushbu yilda tavallud topganlar o‘zlari yoqtirgan odamlarga nisbatan juda xushmuomala va xizmatiga shaydirlar, lekin do‘stlar manfaatiga xizmat qilaman deb, eng yaqin kishilaridan judo bo‘lishlari oson. Agar ular favqulodda hodisalarga, fojiali voqealarga, yengib o‘tib bo‘lmas to‘siqlarga duch kelishmasa, butun umr osoyishta yashashadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐟Baliq"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐟Baliq muchali — 1928, 1940, 1952, 1964, 1976, 1988, 2000, 2012, 2024, 2036, 2048 yil

Ushbu muchalda tug‘ilganlar juda yaxshi sihat-salomatlikka ega bo‘lib, serg‘ayrat va beg‘ubordir. Pastkashlik, tilyog‘lamalik va g‘iybat ularga begona. Ular ishonuvchan va rostgo‘ylar. Ko‘pincha yolg‘on-yashiq gaplar tufayli o‘z tinchligini yo‘qotadi. Barkamollikka intilish ularni o‘ziga ham, boshqalarga ham talabchan qilib qo‘yadi. Ular ko‘p narsani talab qilishadi, lekin talablaridan ko‘ra ko‘proq ishni o‘zlari amalga oshirishadi. Vijdonli, taʼsirchan va dovyurak kishilar bo‘lib, ularga bemalol ishonish mumkin. Samimiy kishi bo‘lib, odatda bildirgan fikr mulohazalari hamisha asosli bo‘ladi. Soddalarcha ishonuvchanliklari tufayli, ularni hamisha aldash mumkin. Shu bilan birga, ular serzarda bo‘lib, baʼzan tillariga erk berib yuborishadi. Biroq ularni fikr-mulohazasi bilan hisoblashish kerak, chunki yaxshi maslahat berishadi. Qiziqib, darrov ishga berilib ketishadi. Isteʼdodli, o‘qimishli va irodali kishilardir. Butun umr hech narsadan zoriqishmaydi, har qanaqangi ishda ham muvaffaqiyat qozonishlari mumkin. Qaysi kasbni tanlashmasin, doimo g‘alaba qozonishadi. Ular ko‘pincha, hamma uchun sevimlidirlar, biroq o‘zlari boshqalarni kamdan-kam hollardagina yoqtirishadi. Hech qachon muhabbat umidsizligi yoki dog‘u-alam ularning boshidan kechmaydi. Ammo o‘zlari muhabbat mojarosiga sababchi bo‘lishi mumkin. Bu muchalda tug‘ilganlar kamdan-kam hollardagina yoshligida oila qurishadi, baʼzilari hatto umr bo‘yi tanho yashashadi, biroq bu ular ko‘nglini cho‘ktirmaydi, aksincha, yolg‘iz yashaganidan ko‘proq baxtiyor sezishadi. Qarz olishni va uzundan-uzun gapirishni yoqtirmaydi. Rahmdillikka moyil bo‘lib baʼzan qisqa muddatga bo‘lsada, bundan boshqalarning foydalanib qo‘yishga yo‘l qo‘yishadi. Ularni ko‘pchiligining muammosi og‘ir, jinsiy qoniqmaslikdan qiynalib yurishadi. Shoirtabiat jo‘shqinliklari tufayli butun umr ko‘plab muammolarga sababchi bo‘lishadi. Biroq keksayganida baxt-saodatga va barcha istaklarini amalga oshirishga erishadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐍Ilon"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐍 Ilon muchali — 1929, 1941, 1953, 1965, 1977, 1989, 2001, 2013, 2025, 2037, 2049 yil

Ushbu muchalda tug‘ilganlar donolik va ziyraklik ato etilgan. Ular vaysaqi emas. Ko‘p va xo‘p fikr-mulohaza yuritishadi. Boshlagan ishni qatʼiyat bilan oxirigacha yetkazishadi, muvaffaqiyatsizlikni juda yomon ko‘rishadi. Tabiatan xotirjam bo‘lsalar ham, ishning ko‘zini bilib, tez xulosa chiqarishadi. Juda ham omadli kishilardir, lekin ko‘pincha ziqnalik qilishadi. Gohida xudbin va maqtanchoq bo‘lishadi. Qarz berishni yomon ko‘rishadi. Ammo xushlariga kelib qolsa, yordam berishdan bo‘yin tovlamaydigan paytlari ham bo‘lib turadi. Bo‘rttirishga moyillik ularga xos xususiyat, mabodo birovga yordam berguday bo‘lishsa, jonlarini berishga ham tayyor, ayni paytda tortinchoq bo‘lib qolishadi, natijada zarar ko‘rishi mumkin. Bunday odamlardan yordam so‘rashdan oldin o‘ylab ko‘rish kerak. Aks holda, pushaymon bo‘lasiz. Yostiqdoshlarini o‘zlari tanlashadi, rashkchi va injiqdirlar. Agar ular o‘zlarining eng yaxshi his-tuyg‘ularini oilasiga bag‘ishlay olsalar edi, umrlari g‘am-tashvishsiz o‘tar edi. Hayotlarining dastlabki davri tinch o‘tadi. Umrlarining ikkinchi yarimida esa ortiqcha sertakallufligi, ehtiroslarning kuchliligi, sarguzashtlarga ishtiyoqmandligi mushkulliklarga duchor etishi mumkin.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐎Ot"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐎Ot muchali — 1930, 1942, 1954, 1966, 1978, 1990, 2002, 2014, 2026, 2038, 2050 yil

Ushbu muchalda tug‘ilganlar dongdor, moʻtabar, xushfeʼl va pulni tejab-tergab ishlatuvchi kishilardir. Yaxshi kiyinishadi, ommaviy yig‘inlarni yoqtirishadi. Ko‘p gapirsalar ham, aqlli va sezgirdirlar. Ko‘pincha yaxshi natijalarga erishuv-chi ajoyib sportchi bo‘lib yetishadi. Hamma sohada ishlari yurishadi, ko‘zga tashlanib turishadi, boshqalar fikrini tez uqib olishadi. Tabiatan mustaqil feʼl-atvorga ega bo‘lib, maslahatlarga quloq solishmaydi. O‘zlariga ishonishadi, qadrlarini bilishadi. Shu yilda tug‘ilgan erkaklar ayollarga befarq bo‘lishmaydi. Muhabbat onlarida hamma narsani unutishadi. Xizmat vazifalarini ado etganda, boshqa hamma sohada bor kuch va ehtiroslarini kuchga solishga harakat qilishadi. Ishq-muhabbat yo‘lida hamma narsadan voz kechishlari mumkin. Shu bois boshlab qo‘ygan ishlarida muvaffaqiyatsizlikka uchraydi, agar bularni yengsa baxtli bo‘lishi mumkin. Oila qurgach, uyda doimo diqqat markazida bo‘lishadi. Ular ko‘zdan g‘oyib bo‘lishlari bilanoq, oilaning baxt-saodati puchga chiqadi. Baʼzilari oilani yoshlikdan tashlab ketishlari mumkin. His-tuyg‘ular sohasida ularning hayoti jo‘shqindir. Keksaygan chog‘larida tinch-xotirjam kun kechirishadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐑Qo‘y"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐑Qo‘y muchali — 1931, 1943, 1955, 1967, 1979, 1991, 2003, 2015, 2027,2039, 2051 yil

Ushbu muchalda tug‘ilganlar nafis sanʼat sohibidirlar. Ularning qaddi-qomati kelishgan, istarasi issiq va tabiat shaydolaridir. Xulq-atvori yoqimli, gap-so‘zi, o‘zini tutishi oqilona, shunday bo‘lsada tabiatan injiq, hardamxayol bo‘lib, hamisha nimadandir zorlanib yashashadi. Odatda xudojo‘y bo‘lib, turli xayoliy va o‘ta tabiiy narsalarga qiziqishadi. Bular rahmdil va muhtojlarga yordam beruvchi yaxshi kishilardir. Ammo baham ko‘rmoqchi bo‘lgan narsalari o‘zlariga tegishli bo‘lmaydi. Ularda xususiy mol-mulkka hech qanday havas yo‘q. Hayot kechirishlari ko‘pincha omadlariga bog‘liq bo‘ladi. Javobgarlik hissi ularga begona, tashabbus ko‘rsatishni yomon ko‘rishadi. Ularda did va isteʼdod bor. Ammo rahbarlikni eplay olishmaydi. Bir paytning o‘zida texnik va artistlik mahorati qo‘shib borib olinadigan ishlarni qoyil qilib bajarishadi. Lekin hech qachon asosiy vazifani bajarishmaydi. Gaplari ko‘pincha poyma-poy bo‘lib, o‘z fikrlarini qiynalib tushuntirishadi, goh tez, goh sekin baʼzan duduqlanib gapirishadi. Hayotlari davomida ko‘plab ishq-muhabbat muammolariga duch kelishadi. Ulardan biri fojia bilan tugashi mumkin. Yetuklik davri yoshlik va keksayganlariga qaraganda yaxshi kechadi. Shuni esda tutish kerakki, moddiy jihatdan g‘am-tashvishi yo‘q, maslahatgo‘ylari bor bo‘lgan quling o‘rgilsin o‘tloqda. Qo‘yning omadi yurishadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐒Maymun"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐒Maymun muchali — 1932, 1944, 1956, 1968, 1980, 1992, 2004, 2016, 2028, 2040, 2052 yil

Ushbu muchalda tug‘ilganlar ko‘ngilga kelgan ishni qiluvchi, ishonchga sazovor bo‘lmagan va ters odamlardir. Biroq ular epchil, aqlli, topqir bo‘lib, eng qiyin muammolarni ham osonlik bilan hal etishadi. Ayni paytlarda ular quv va makkordir, shu bois ular bilan doim hushyor bo‘lib muomala qilish kerak. Ularning kirishimliklari va hatto har qanday xizmatga bel bog‘lab turishlari ham munofiqonadir, aslida esa o‘z manfaatini o‘ylab shunday qilishadi. Shuningdek, ular xushchaqchaq va iltifotli bo‘lib, boshqalar to‘g‘risidagi yurakni ezadigan fikr-mulohazalarini soxta xushmuomalaliklari bilan yashiradilar. Ular o‘z faoliyatlarini avj oldira olmaydigan deyarli birorta soha yo‘q. Bo‘layotgan voqealardan hamisha xabardor. Xotiralari juda ham kuchli bo‘lib, ko‘rgan yoki eshitgan narsalarining mayda-chuydasigacha unutishmaydi. Barcha ishlari betartibligi uchun ularga xotira zarur. Ular juda hovliqma bo‘lib, hamma ishni shu zahoti amalga oshirib qo‘ya qolishni xohlashadi. Arzimas to‘siq ham ularning dilini xira qilib, rejalarini buzib yuborishi mumkin. Biror ishni boshlamasdan turib, shu zahoti uning bahridan o‘tishlari mumkin, ko‘pchiligi qatʼiyatsizligi va hatto qo‘rqoqligi bilan ajralib turishadi. Ularning har qanday mushkul ahvolga tushib qolganlarida ham, unga chap berib qutilib ketishlarini munosib baholash darkor. Ular o‘z xohishlarini amalga oshiradilar. Amalparastlik qonlarida bor. Hech ikkilanmay, hatto vijdonsizlik bilan bo‘lsada, o‘z niyatlariga erishishga qodirlar. O‘z hafsalalariga qarab ish qilishsa, ko‘pincha nom chiqarishadi. Faqat ular odamlarga malol kelishi mumkin bo‘lgan mahmadonagarchiliklardan o‘zini tiyishi lozim. Garchi baʼzi qiyinchiliklar bo‘lib yursa, umuman olganda, iqtisodiy jihatdan yaxshi yashashadi. Ishq-muhabbat bobida baxtga erishishlari qiyin. Chunki ular ehtirosli bo‘lib, juda tez oshiq bo‘lib, ko‘p maʼshuqalaridan ko‘ngillari sovib, boshqasini qidirishga tushishi mumkin.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐔Tovuq"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐔Tovuq muchali — 1933, 1945, 1957, 1969, 1981, 1993, 2005, 2017, 2029, 2041, 2053 yil

Ushbu muchalda tug‘ilganlar odamlarga jurʼat, dovyuraklik xos. Bular chuqur fikrlovchi va isteʼdodli shaxslardir. Mehnatsevar va o‘z ishlariga jon dillari bilan berilishadi. Qurblari yetmasa ham, har qanday majburiyatni bajarishga kirishadi. mabodo muvaffaqiyatsizlikka uchrashsa, dillari juda ham siyoh bo‘ladi. Nima o‘ylasalar, shuni ro‘y-rost gapiradilar. Bu esa, ko‘pincha, ularning haddan tashqari to‘g‘ri so‘zligidan o‘zini chetga tortuvchilar bilan to‘qnashuvga olib boradi. Savlat to‘kib yurishni yaxshi ko‘rishadi, yon-atrofdagilar eʼtibor berishi uchun did bilan kiyinadilar. Ammo, aslini olganda, ular o‘zlariga zarar yetkazishlariga qaramay, mutaassibdirlar. Odatda, o‘zlarini mutlaqo laqma, deb o‘ylashadi, ayni paytda qilayotgan ishlarining mohiyatini yaxshi bilishadi. O‘zlariga bino qo‘yishlarining sababi ham shunda. Haqiqatdan ham, ko‘pincha haq bo‘lib chiqishadi. Aql-zakovatlari tevarak-atrofdagi odamlarda ularga nisbatan qiziqish uyg‘otadi. Biroq ularning ko‘pchiligi maqtanchoqligi bilan darrov ixlosni qaytaradi. Qo‘lidan keladigan ishdan ko‘ra ko‘proq gapiradilar. Aksariyat hollarda, ishqiy dilkashliklariga nisbatan, ko‘proq yoqimli qiyofalari bilan ko‘zga tashlanishadi. Baʼzan dangasalikka moyillik bildirishadi. Lekin aslida, ularning faol bo‘lishi uchun hamma asos bor. Pul ularga o‘z-o‘zidan kelavermaydi, o‘zini taʼminlashi uchun ishlashi lozim. Agar ular qatʼiyat ko‘rsatib, o‘z dangasaliklarini yenga olsalar, mol-dunyo bilan taʼminlanishadi. Ammo ular mabodo dangasalik va orzu-xayollariga berilishni o‘zlariga ep ko‘rsalar, bu ularning xonavayron bo‘lishlariga, obro‘-eʼtiborlarini yo‘qotishlariga, boshlagan hamma ishlarini puchga chiqishiga olib keladi. Ishq-muhabbat bobida hayotlari ancha mashaqqatli kechadi, sevgan kishilarini qo‘lga olmoq va qo‘ldan chiqarmaslik uchun ko‘pdan-ko‘p kuch-g‘ayrat sarflashadi. Ular kambag‘allikdan boylikgacha, yuksak muhabbatdan tubanlikgacha bo‘lgan yo‘lni bosib o‘tishadi. Keksayganlarida baxtli yashashadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐕It"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🐕It muchali — 1934, 1946, 1958, 1970, 1982, 1994, 2006, 2018, 2030, 2042, 2054 yil

Ushbu muchalda tug‘ilganlar odamlarga eng yaxshi insoniy xislatlar xos. Ular sodiq va sofdilligi, sir saqlay olishi bilan o‘zlariga nisbatan ishonch uyg‘otishadi. Bundan tashqari ular hazil-mutoyiba tuyg‘usiga ega, mayda gaplardan uzoq. Haddan tashqari o‘jar va tez-tez surbetlik darajasigacha borishadi. Ularning sovuq gaplar bilan fikr bildirishga, o‘rinli va o‘rinsiz tanqid qilishga, hamma narsadan kamchilik topishi sezilib turadi. Har qanday nohaqlik ularda norozilik uyg‘otadi va to uni bartaraf etmaguncha tinchishmaydi. Boshqalar uchun qo‘llaridan kelgan ezgu ishni qilishadi. Atrofidagi kishilar ularni munosib ravishda hurmat qilishadi. Ular faqirlikda yashaydilarmi, farovon hayot kechirishadimi, bundan qatʼiy nazar, aqlga qarab ish tutadilar. Moddiy jihatdan to‘kin yashamasalar ham qanoatlidirlar. Biroq ularga pul zarur bo‘lib qolsa, uni osongina topisha oladi. Odatda, ulardan ajoyib rahbarlar va faol jamoat arboblari yetishib chiqadi. Ular ko‘pincha gapga no‘noq, baʼzan o‘z fikr-mulohazalarini qiynalib bayon etishadi. Lekin aqllari raso, ziyraklik bilan gapga quloq solib turadilar. Sevgi-muhabbat bobida pok va farosatlidir. Ularni adolat uchun kurashda katta sarguzasht va qizg‘in olishuvlar kutadi.</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
if($tx == "🐖To‘ng‘iz"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"🐖To‘ng‘iz muchali — 1935, 1947, 1959, 1971, 1983, 1995, 2007, 2019, 2031, 2043, 2055 yil

Ushbu muchalda tug‘ilganlar mardonavor feʼl-atvori, odob-nazokat, xizmatga shaylik, nozik tabiatlilik xulqlari bor. Ularga hech ikkilanmay ishonish mumkin. Ular faqat to‘g‘ri yo‘lni tanlashadi. Ular vijdonli va mard kishilardir. Boshqa kishilar bilan til topishishi qiyin. Lekin do‘stlarini hurmat qiladi. To‘ng‘iz yilida tug‘ilganlar kundalik xarajatlari uchun kerakli mablag‘ni topa olishadi. Ammo beg‘amliklari tufayli ishlari yomon tus olishi mumkin. Ular beg‘am ko‘rinsalarda, aslida irodali va o‘jardirlar. O‘ylagan niyatlariga erishish uchun bor kuchini ishga solishadi. Tabiatan baquvvatlar, ularning kuchiga hech kim bas kela olmaydi. Biroq biror qarorga kelishdan oldin uning yaxshi va yomon tomonlarini uzoq qiyoslashadi, shunday kezlarda yon-beridagi kishilar nazarida ular nima qilishni bilmayotgandek tuyulishadi. Haqiqatda esa bunday emas, ular o‘z ishini juda yaxshi bilishadi, faqat ishni murakkablashtirmaslik, gohida unga zarar yetkazmaslik uchun uzoq vaqt mulohaza yuritishadi. Ushbu yilda tug‘ilgan ayollar sovg‘a-salom qilishni, shod-xursandchilikni xush ko‘rishadi. Ular yaxshi ona va oqilona uy bekasidirlar.",
	'parse_mode'=>'html',
	'reply_markup'=>$psix,
	]);
	}
//SevgiTest
if($text=="❤️𝚂𝚎𝚟𝚐𝚒 𝚝𝚎𝚜𝚝"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"❤️ *𝚂𝚎𝚟𝚐𝚒 ˡᵒᵛᵉ 𝚝𝚎𝚜𝚝 😍

❤️ 𝙾'𝚣 𝚜𝚎𝚟𝚐𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚋𝚒𝚣𝚗𝚒𝚗𝚐 𝚋𝚘𝚝𝚍𝚊 𝚝𝚎𝚜𝚝 𝚚𝚒𝚕𝚒𝚋 𝚔𝚘'𝚛𝚒𝚗𝚐 🤩

📝 𝙸𝚜𝚑𝚕𝚊𝚝𝚒𝚜𝚑: ( 𝙼𝚊𝚜𝚊𝚕𝚊𝚗 ☟︎︎︎)*

☞︎︎︎  `/test 𝙰𝚣𝚒𝚣 𝙰𝚣𝚒𝚣𝚊`  ☜︎︎︎

😁 *𝚂𝚑𝚞 𝚞𝚜𝚞𝚕𝚍𝚊* 😊",
'parse_mode'=>'markdown',
'reply_markup'=>$off,
]);
}

if(mb_stripos($text,"/test") !== false){
$loop = explode(" ", $text); 
$suz = $loop[1]; 
$javob = $loop[2]; 
$input = array("%25","%83","%41","%82","%62","%52","%95","%23","%77","%27","%32","%75","%36","%11","%41","%97","%99","%100","%53","%29","%88","%37","%64","%90","%72","%33","%81","%7","%60","%62","%71","%23","%93","%95","%71","%98","%31");
$rand=rand(0,7);
$soz="$input[$rand]";
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🤵 - *$suz*
?? - *$javob*

😍 𝙾𝚛𝚊𝚗𝚐𝚒𝚣𝚍𝚊𝚐𝚒 𝚂𝚎𝚟𝚐𝚒 *$soz* 😊",
'parse_mode'=>'markdown',
'reply_markup'=>$fkey,
]);
}
//Tgtillar
if($text == "📚 𝚃𝚎𝚕𝚎𝚐𝚛𝚊𝚖 𝚝𝚒𝚕𝚕𝚊𝚛𝚒 ☑️"){
bot("sendPhoto",[
   "chat_id"=>$cid,
'photo' => "https://t.me/GlavniyDasturchi/48",
'caption'=>"<b>
𝚃𝚎𝚕𝚎𝚐𝚛𝚊𝚖𝚒𝚗𝚐𝚒𝚣 𝚝𝚒𝚕𝚒𝚗𝚒 𝚘𝚜𝚘𝚗𝚐𝚒𝚗𝚊 𝚘'𝚣𝚐𝚊𝚛𝚝𝚒𝚛𝚒𝚜𝚑 
𝚞𝚌𝚑𝚞𝚗 𝚚𝚞𝚢𝚒𝚍𝚊𝚐𝚒 𝚝𝚒𝚕𝚕𝚊𝚛𝚍𝚊𝚗 𝚋𝚒𝚛𝚒𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐!☟︎︎︎
🔎 $botiym ☑</b>",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🇺🇿Узбек тили",'url'=>"tg://setlanguage?lang=uzbekcyr"]],
[['text'=>"🇺🇿O'zbek tili",'url'=>"tg://setlanguage?lang=uz-beta"]],
[['text'=>"🇷🇺Руский язик",'url'=>"tg://setlanguage?lang=ru"]],
[['text'=>"🇩🇪Germaniya tili",'url'=>"tg://setlanguage?lang=de"]],
[['text'=>"🇺🇸English",'url'=>"tg://setlanguage?lang=en"]],
[['text'=>"🇸🇦Arab tili",'url'=>"tg://setlanguage?lang=ar"]],
[['text'=>"🇹🇷Turkiya tili",'url'=>"tg://setlanguage?lang=tr"]],
[['text'=>"🇫🇷 Fransuz tili",'url'=>"tg://setlanguage?lang=fr"]],
]
]),
]);
}
//TgFonlar
if($text == "📲𝚃𝚎𝚕𝚎𝚐𝚛𝚊𝚖 𝚏𝚘𝚗𝚕𝚊𝚛𝚒🎴"){
bot("sendPhoto",[
   "chat_id"=>$cid,
'photo' => "https://t.me/EPhoto_uzb/469",
'caption'=>"<b>
♕ ☞︎︎︎ 𝙱𝚞 𝚜𝚜𝚒𝚕𝚔𝚊𝚕𝚊𝚛 𝚘𝚛𝚚𝚊𝚕𝚒 𝚃𝚎𝚕𝚎𝚐𝚛𝚊𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚏𝚘𝚗𝚒𝚗𝚒 𝚘𝚜𝚘𝚗𝚐𝚒𝚗𝚊 𝚘'𝚣𝚐𝚊𝚛𝚝𝚒𝚛𝚊 𝚘𝚕𝚊𝚜𝚒𝚣! 
⤵️ 𝚂𝚑𝚞𝚗𝚌𝚑𝚊𝚔𝚒 𝚘'𝚛𝚗𝚊𝚝𝚖𝚘𝚚𝚌𝚑𝚒 𝚋𝚘'𝚕𝚐𝚊𝚗 𝚏𝚘𝚗 𝚛𝚊𝚚𝚊𝚖𝚒𝚗𝚒 𝚝𝚊𝚗𝚕𝚊𝚗𝚐

➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/7HqL5bBEyUoEAAAAXYaZUZh14YE'>🌉Telegram 1️⃣ - fon       ✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/aLBLuMfyCUsEAAAA9n3N0xRCuwo'>🌉Telegram 2️⃣ - fon       ✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/FZla3e-CyEkBAAAAMwmoy6WarGY'>🌉Telegram 3️⃣ - fon       ✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/XorADb5a2EkBAAAAINKBVJtUxqo'>🌉Telegram 4️⃣ - fon       ✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/jBen_AFVwUpJAAAA3Ybd3Z-qCSQ'>🌉Telegram 5️⃣ - fon       ✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ'>🌉Telegram 6️⃣ - fon       ✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/Z4wGEfQLmUmYAAAARaGmMPqVJaY'>🌉Telegram 7️⃣ - fon       ✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
👨‍💻 𝙳𝚊𝚜𝚝𝚞𝚛𝚌𝚑𝚒: @IPythonProgrammer</b>",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"🎗Yangiliklar 🍎","url"=>"https://t.me/YangiYilTabriklari"],],
]
]),
]);
}
//yigitlar
if($text=="🤴𝚈𝚒𝚐𝚒𝚝𝚕𝚊𝚛"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐", 
]); 
file_put_contents("Bot/$cid.step","yigitlar"); 
} 
if($step=="yigitlar"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yigitlar/1/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yigitlar/2/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yigitlar/3/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yigitlar/4/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yigitlar/5/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yigitlar/6/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yigitlar/7/2.php?text=$text"], 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yigitlar/8/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//Qizlar
if($text=="👸𝚀𝚒𝚣𝚕𝚊𝚛"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐", 
]); 
file_put_contents("Bot/$cid.step","qizlar"); 
} 
if($step=="qizlar"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Qizlar/1/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Qizlar/2/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Qizlar/3/2.php?text=$text"], 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Qizlar/4/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//Yuzgaism
if($text=="👀𝙺𝚘'𝚣𝚐𝚊"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐", 
]); 
file_put_contents("Bot/$cid.step","kozga"); 
} 
if($step=="kozga"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yuzgaism/1/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yuzgaism/2/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yuzgaism/3/2.php?text=$text"], 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Yuzgaism/4/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//Haj
if($text=="🕋𝙷𝚊𝚓 ᵏᵃᵇᵃ🕋"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐", 
]); 
file_put_contents("Bot/$cid.step","haj"); 
} 
if($step=="haj"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Hajga/1/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Hajga/2/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Hajga/3/2.php?text=$text"], 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - ??𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Hajga/4/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//Buyumlar
if($text=="➰𝙱𝚞𝚢𝚞𝚖𝚕𝚊𝚛𝚐𝚊"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐", 
]); 
file_put_contents("Bot/$cid.step","buyumlar"); 
} 
if($step=="buyumlar"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Buyumlar/1/2.php?text=$text"], 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Buyumlar/2/2.php?text=$text"], 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Buyumlar/3/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//HUMANS
if($text=="🟡𝙷𝚄𝙼𝙰𝙽𝚂🟡"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐 (𝙵𝙰𝚀𝙰𝚃 𝙺𝙰𝚃𝚃𝙰 𝙷𝙰𝚁𝙵𝙻𝙰𝚁𝙳𝙰! )", 
]); 
file_put_contents("Bot/$cid.step","humans"); 
} 
if($step=="humans"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Humans/2/2.php?text=$text"], 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Humans/1/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//QonliIsm
if($text=="🩸𝚀𝚘𝚗𝚕𝚒"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐", 
]); 
file_put_contents("Bot/$cid.step","qonli"); 
} 
if($step=="qonli"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "http://uzagent92.myxvest1.ru/Apilarim/Qonliyozuv/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//𝚒𝚜𝚖𝚖𝚊𝚗𝚘
if($text=="📿𝙸𝚜𝚖𝚕𝚊𝚛 𝚖𝚊'𝚗𝚘𝚜𝚒"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐 (⚠️𝙴𝚂𝙻𝙰𝚃𝙼𝙰: 𝙰𝚐𝚊𝚛 𝚜𝚒𝚣 𝚢𝚘𝚣𝚐𝚊𝚗 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒𝚗𝚐 𝚖𝚊'𝚗𝚘𝚜𝚒 𝚌𝚑𝚒𝚚𝚖𝚊𝚜𝚊, 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚍𝚊𝚐𝚒 𝚡𝚘𝚗, 𝚓𝚘𝚗, 𝚋𝚎𝚔, 𝚘𝚢 𝚟𝚊 𝚋𝚘𝚜𝚑𝚚𝚊 𝚚𝚘'𝚜𝚑𝚒𝚖𝚌𝚑𝚊𝚕𝚊𝚛𝚗𝚒 𝚘'𝚌𝚑𝚒𝚛𝚒𝚋 𝚚𝚊𝚢𝚝𝚊 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚖𝚊'𝚗𝚘𝚜𝚒𝚗𝚒 𝚚𝚒𝚍𝚒𝚛𝚒𝚋 𝚔𝚘'𝚛𝚒𝚗𝚐!", 
]); 
file_put_contents("Bot/$cid.step","𝚒𝚜𝚖𝚖𝚊𝚗𝚘"); 
} 
if($step=="𝚒𝚜𝚖𝚖𝚊𝚗𝚘"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚖𝚊'𝚗𝚘𝚜𝚒 𝚛𝚊𝚜𝚖𝚍𝚊!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Ismlarmanosi/mano.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//love
if($text=="🤵𝚂𝚎𝚟𝚒𝚜𝚑𝚐𝚊𝚗𝚕𝚊𝚛👰"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐", 
]); 
file_put_contents("Bot/$cid.step","loveism"); 
} 
if($step=="loveism"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Love/1/2.php?text=$text"], 
["type"=>"photo", 
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Love/2/2.php?text=$text"], 
["type"=>"photo", 
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Love/3/2.php?text=$text"], 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Love/4/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//YangiYilTabriklar
if($text=="☃️𝚈𝚊𝚗𝚐𝚒 𝚈𝚒𝚕 𝚃𝚊𝚋𝚛𝚒𝚔𝚕𝚊𝚛𝚒🎄"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"𝙸𝚜𝚖𝚒𝚗𝚐𝚒𝚣𝚗𝚒 𝚢𝚘𝚣𝚒𝚗𝚐", 
]); 
file_put_contents("Bot/$cid.step","yangiyiltabrik"); 
} 
if($step=="yangiyiltabrik"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Yangiyil/1/2.php?text=$text"], 
["type"=>"photo", 
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Yangiyil/2/2.php?text=$text"], 
["type"=>"photo", 
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Yangiyil/3/2.php?text=$text"], 
["type"=>"photo", 
'caption'=>"✔ $text  𝚒𝚜𝚖𝚒𝚐𝚊 𝚛𝚊𝚜𝚖𝚕𝚊𝚛 𝚝𝚊𝚢𝚢𝚘𝚛 𝚋𝚘'𝚕𝚍𝚒!

🤖 @TgRasmBot  –  𝚈𝚊𝚡𝚜𝚑𝚒 𝚔𝚞𝚗𝚕𝚊𝚛 𝚞𝚌𝚑𝚞𝚗 𝚝𝚊𝚢𝚢𝚘𝚛 𝚒𝚜𝚖𝚒𝚗𝚐𝚒𝚣 𝚢𝚘𝚣𝚒𝚕𝚐𝚊𝚗 𝚛𝚊𝚜𝚖𝚕𝚊𝚛!

📲 @YangiYilTabriklari - 𝚔𝚊𝚗𝚊𝚕𝚒𝚖𝚒𝚣𝚗𝚒 𝚔𝚞𝚣𝚊𝚝𝚒𝚋 𝚋𝚘𝚛𝚒𝚗𝚐!",
"media" => "https://uzagent92.myxvest1.ru/Apilarim/Yangiyil/4/2.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}