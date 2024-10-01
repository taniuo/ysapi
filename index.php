<?php
// Check for mobile device
function mobile() {
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $list = array('Windows Phone', 'BlackBerry', 'SymbianOS', 'Android', 'Mobile', 'iPhone', 'iPod');
    foreach ($list as $device) {
        if (stripos($agent, $device) !== false) {
            return true;
        }
    }
    return false;
}

$base_url = mobile() ? 'https://tayssj.zeabur.app/' : 'https://taysdn.zeabur.app/';
$url = rand(1, 500) . ".webp";

$content = file_get_contents($base_url . $url);
header('Content-Type: image/webp');
echo $content;
exit;
?>