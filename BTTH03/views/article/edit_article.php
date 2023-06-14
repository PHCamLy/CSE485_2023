
<?php include('views/include/header.php')?>
<link rel="stylesheet" href="assets/css/style.css">
<main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa bài viết</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Title</span>
                        <input type="text" class="form-control" name="txtTitle" value="<?= $article->getTitle() ?>">
                        
                    </div>
                    
                    
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Name</span>
                        <input type="text" class="form-control" name="txtName" value="<?= $article->getName() ?>">
                    </div>
                    
                   
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Category</span>
                        <input type="text" class="form-control" name="txtCategory" value="<?= $article->getCategory() ?>">
                    </div>


                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Summary</span>
                        <input type="text" class="form-control" name="txtSummary" value="<?= $article->getSummary() ?>">
                    </div>
                    
                    
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Content</span>
                        <input type="text" class="form-control" name="txtContent" value="<?= $article->getContent() ?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Author</span>
                        <input type="text" class="form-control" name="txtAuthor" value="<?= $article->getAuthor() ?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Date_post</span>
                        <input type="text" class="form-control" name="txtDatetime" placeholder="<?= date('Y-m-d H:i:s') ?>" disabled>
                    </div>
                    
                    <div>
                        <label for="">Ảnh hiện tại</label>
                        <img src="assets/images/songs/<?= $article->getImage()?>" alt="" srcset="" style="width: 150px; 
                        height: 180px; object-fit: contain; margin: -2em 0 -2em 0.5em;">
                    </div>
                      
                    <div style="margin: 15px 0">
                        <label for="image" class="drop-container">
                            <span class="drop-title" style="width: 200px">Drop files here</span>
                                        or
                            <input type="file" name="image" id="image" class="input-file" accept="image/*">
                        </label>
                        
                    </div>
                    
                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu" class="btn btn-success" name="update">
                        <a href="?controller=article" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
