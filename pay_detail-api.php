<?php
require './part/connect-db.php';
$pageName = 'ab-list';
$title='資訊列表';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$perPage = 5; // 每一頁有幾筆資料

$output = [
    'perPage' => $perPage, // 每頁筆數
    'totalRows' => 0,      // 總共幾筆
    'totalPages' => 0,     // 總共幾頁
    'page' => $page,       // 所在頁碼
    'rows' => [],  // 分頁的資料
];

// 若key頁碼小於1 回到第一頁
if ($page < 1) {
    header('Location: ab-list.php');
    exit;
}


$t_sql = "SELECT COUNT(1) FROM address_book";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$output['totalRows'] = $totalRows;

$totalPages = ceil($totalRows / $perPage);
$output['totalPages'] = $totalPages;


if ($totalPages > 0) {
    // 若輸入頁碼大於總頁數      回到最大頁碼
    if ($page > $totalPages) {
        header('Location: ab-list.php?page=' . $totalPages);
        exit;
    }

    // 讀取分頁的資料
    //                                              
    $sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);

    $output['rows'] = $pdo->query($sql)->fetchAll();
}

// header('Content-Type: application/json');  // 伺服器告訴用戶端文件的格式為 JSON
// echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>
<?php include __DIR__ . '/part/html-head.php'  ?>
<?php include __DIR__ . '/part/navbar.php'  ?>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=1">
                            <i class="fa-solid fa-angles-left"></i>
                        </a>
                    </li>
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                    </li>
                    <?php for ($i = $page - 3; $i <= $totalPages + 3; $i++) : ?>
                        <?php if ($i >= 1 and $i <= $totalPages) : ?>
                    <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                        <?php endif; ?>
                    <?php endfor; ?>
                    
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $totalPages ?>">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>  




    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">姓名</th>
                <th scope="col">電郵</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($output['rows'] as $r) : ?>
            <tr>
                <td><?= $r['sid'] ?></td>
                <td><?= $r['name'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script>
</script>
<?php include __DIR__ . '/part/script.php'  ?>
<?php include __DIR__ . '/part/html-foot.php'  ?>