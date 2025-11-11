<?php
$phone = $_POST['phone'];
$phone = trim($phone);

if (!empty($phone)) {
// ذخیره در فایل
file_put_contents("numbers.txt", $phone . "\n", FILE_APPEND);

// ارسال به تلگرام
$botToken ="8516536189:AAEwLjaEb3Y4fyG4G8g_VVgg491qIVOWU-s"
$chatId = "6128463219"
$message = "شماره جدید ثبت شد: " . $phone;

$url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
file_get_contents($url);

echo ":white_check_mark: شماره شما با موفقیت ذخیره شد!";
} else {
echo ":warning: لطفاً شماره تماس را وارد کنید.";
}
?>
