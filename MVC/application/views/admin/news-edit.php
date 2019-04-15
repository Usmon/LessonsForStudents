<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php?route=admin/index">Asosiy</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?route=admin/news-list">Yangiliklar</a>
        </li>
        <li class="breadcrumb-item active">O'zgartirish: <?= $data['item']['title'] ?></li>
    </ol>
    <!-- Page Content -->
    <h1>
        O'zgartirish
    </h1>
    <hr>
    <form method="POST">
        <div class="form-group">
            <label>Sarlavha</label>
            <input type="text" value="<?= $data['item']['title'] ?>" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Maqola</label>
            <textarea name="body" class="form-control" rows="15"><?= $data['item']['body'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-warning">O'zgartirish</button>
    </form>
</div>
<!-- /.container-fluid -->

