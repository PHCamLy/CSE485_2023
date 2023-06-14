<?php
include_once 'views/include/header.php';
?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Id</th>
                        <th scope="col" style="text-align: center;">Title</th>
                        <th scope="col" style="text-align: center;">Name</th>
                        <th scope="col" style="text-align: center;">Category</th>
                        <th scope="col" style="text-align: center;">Summary</th>
                        <th scope="col" style="text-align: center;">Content</th>
                        <th scope="col" style="text-align: center;">Author</th>
                        <th scope="col" style="text-align: center;">Date</th>
                        <th scope="col" style="text-align: center;">Image</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($articles as $article) { ?>
                        <tr>
                            <th scope="row" style="text-align: center;">
                                <?= $article->getId() ?>
                            </th>
                            <td style="max-width: 100px;">
                                <?= $article->getTitle() ?>
                            </td>
                            <td style="max-width: 100px;">
                                <?= $article->getName() ?>
                            </td>
                            <td style="max-width: 100px;">
                                <?= $article->getCategory() ?>
                            </td>
                            <td style="max-width: 200px;">
                                <?= $article->getSummary() ?>
                            </td>
                            <td style="max-width: 200px;">
                                <?= $article->getContent() ?>
                            </td>
                            <td style="max-width: 100px;">
                                <?= $article->getAuthor() ?>
                            </td>
                            <td style="max-width: 100px;">
                                <?= $article->getDatetime() ?>
                            </td>
                            <td><img src="assets/images/<?= $article->getImage() ?>" alt=""
                                    style="height: 50px; width: 100%; object-fit: contain;"></td>
                            <td>
                                <a href="?controller=article&action=edit_article&id=<?= $article->getId() ?>"><button
                                        class="btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>
                            </td>
                            <td>
                                <a href="?controller=article&action=delete_article&id=<?= $article->getId() ?>"><button
                                        class="btn-danger"><i class="fa-solid fa-trash"></button></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
            <a style="display:table; margin:0 auto;" href="?controller=article&action=add_article" class="btn btn-success">Thêm mới</a>
        </div>
    </div>
</main>

