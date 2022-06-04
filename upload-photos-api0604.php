<?php
require './part/connect-db.php';
header('Content-Type: application/json');


$path = 'imgs/items' . $_SESSION['item_c'];
if (!file_exists($path)) {
    mkdir($path);
}


// 用來篩選檔案, 用來決定副檔名
$extMap = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
    'image/gif' => '.gif',
];

$output = [
    'success' => false,
    'filenames' => [],
    'error' => '',
];

if (empty($_FILES['mainUpload'])) {
    $output['error'] = '沒有上傳檔案';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

if (!is_array($_FILES['mainUpload']['name'])) {
    $output['error'] = '沒有上傳檔案2';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
$i = 0;
foreach ($_FILES['mainUpload']['name'] as $k => $f) {

    $ext = $extMap[$_FILES['mainUpload']['type'][$k]]; // 副檔名
    $filename = "item" . $i . $ext;
    // $output['filenames'][] = $filename;
    $output['filenames'][] = $filename;

    //     // 把上傳的檔案搬移到指定的位置  先存才能秀
    move_uploaded_file($_FILES['mainUpload']['tmp_name'][$k], $path . "/" . $filename);
    $i += 1;
}
$output['success'] = true;
echo json_encode($output);