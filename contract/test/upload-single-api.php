<?php

$folder = __DIR__ . '/';

$output = [
    'success' => false,
    'error' => '',
    'filename' => '',
];

// 篩選檔案
$extMap = [
    'image/png' => '.png',
    'image/jpeg' => '.jpg',
];

// 有上傳才做後續
if (empty($_FILES['myfile'])) {
    $output['error'] = '沒有上傳檔案';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

/*
error: 0
name: "GH20182.png"
size: 96725
tmp_name: "C:\\xampp\\tmp\\php862F.tmp"
type: "image/png"
*/

// 判斷檔案格式正不正確
$ext = $extMap[$_FILES['myfile']['type']];
if (empty($ext)) {
    $output['error'] = '檔案格式錯誤';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
$fname = md5($_FILES['myfile']['name'] . rand()) . $ext;
$output['filename'] = $fname;

if (!move_uploaded_file($_FILES['myfile']['tmp_name'], $folder . $fname)) {
    $output['error'] = '無法儲存上傳的檔案';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$output['success'] = true;
echo json_encode($output);