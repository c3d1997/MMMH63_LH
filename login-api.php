<?php
require './part/connect-db.php';
//echo $_SERVER['HTTP_REFERER'];
//exit;

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
];

$MobileIn = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
$PasswordIn = isset($_POST['password']) ? trim($_POST['password']) : '';

if (empty($MobileIn)) {
    $output['error'] = '帳密錯誤'; //'沒有 Email';
    $output['code'] = 410;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
if (empty($PasswordIn)) {
    $output['error'] = '帳密錯誤'; //'沒有給密碼';
    $output['code'] = 420;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "SELECT `id`, `mobile`, `name` FROM members WHERE `mobile` =?";


$stmt = $pdo->prepare($sql);
$stmt->execute([$MobileIn]);

$row = $stmt->fetch();


if (!empty($row)) {
    $output['success'] = true;
    $output['code'] = 200;
    $_SESSION['admin'] = [
        'id' => $row['id'],
        'mobile' => $row['mobile'],
    ];
} else {
    $output['error'] = '帳密錯誤';
    $output['code'] = 430;
    $output['row'] = $row;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
