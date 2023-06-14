<?php include('views/include/header.php') ?>
<link rel="stylesheet" href="assets/css/style.css">
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm mới</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" name="txtTitle" placeholder="Title">
                </div>

                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" name="txtName" placeholder="Name">
                </div>
                
                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" name="txtCategory" placeholder="Category">
                </div>

                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" name="txtSummary" placeholder="Summary">
                </div>

                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" name="txtContent" placeholder="Content">
                </div>

                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" name="txtAuthor" placeholder="Author">
                </div>

                <div class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" name="txtDatetime" placeholder="<?= date('Y-m-d H:i:s') ?>" disabled>
                </div>


                <div style="margin: 15px 0">
                    <label for="image" class="drop-container">
                        <input type="file" name="image" id="image" class="input-file" accept="image/*">
                    </label>

                </div>

                <div class="form-group  float-end ">
                    <input type="submit" value="Thêm" class="btn btn-success" name="add">
                    <a href="?controller=article" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>