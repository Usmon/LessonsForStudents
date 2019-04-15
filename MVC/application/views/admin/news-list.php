<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?route=admin/index">Asosiy</a>
        </li>
        <li class="breadcrumb-item active">Yangiliklar ro'yhati</li>
    </ol>

    <!-- Page Content -->
    <h1>
        Ro'yhat
        <a href="index.php?route=admin/news-create" class="float-right btn btn-primary"><i class="fa fa-plus"></i> Yaratish</a>
    </h1>
    <hr>
    <table class="table table-bordered">
        <thead>
            <th width="80px">№</th>
            <th>Nomi</th>
            <th>Qisqacha</th>
            <th width="150px">Sanasi</th>
            <th width="200px">Harakatlar</th>
        </thead>
        <tbody>
        <?php foreach($data['items'] as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['title'] ?></td>
                <td><?= Format::cutText($item['body'], 100) ?></td>
                <td><?= Format::dateFormat($item['added_time']) ?></td>
                <td>
                    <a href="index.php?route=admin/news-edit&id=<?=$item['id']?>" class="btn btn-sm btn-warning">
                        O'zgartirish
                    </a>
                    <a onclick="return confirm('Tasdiqlang!')" href="index.php?route=admin/news-delete&id=<?=$item['id']?>" class="btn btn-sm btn-danger">
                        O'chirish
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

