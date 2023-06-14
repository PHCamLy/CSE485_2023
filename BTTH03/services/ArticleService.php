<?php
include_once 'configs/Dbconnection.php';
include_once 'models/Article.php';

class ArticleService{
    public function getAllArticles(){
        $dbconn = new Dbconnection();
        $conn = $dbconn->getConnection();

        $select = "SELECT * FROM articles";

        $statment = $conn->query($select);

        $articles = [];

        while($row = $statment->fetch()){
            $article = new Article($row['id'], $row['title'], $row['name'], 
            $row['category'], $row['summary'], $row['content'], $row['author'], $row['date_post'], $row['image']);

            array_push($articles, $article);
        }
        $conn = null;
        return $articles;
    }

    public function getArticleById($id){
        $dbconn = new Dbconnection();
        $conn = $dbconn->getConnection();
        $select_Id = "SELECT * FROM articles WHERE id = $id";
        $statment = $conn->query($select_Id);
        $row = $statment->fetch();
        $article = new Article($row['id'], $row['title'], $row['name'], 
        $row['category'], $row['summary'], $row['content'], $row['author'], $row['date_post'], $row['image']);
        $conn = null;
        return $article;
    }

    public function insert(array $arguments){
        $dbconn = new Dbconnection();
        $conn = $dbconn->getConnection();

        $sql = "INSERT INTO `articles` (`id`, `title`, `name`, `category`, `summary`, `content`, `author`, `date_post`, `image`) 
        VALUES (null, :title, :nameArticle, :category, :summary, :content, :author, :date_post, :imageArticle)";
        $statment = $conn->prepare($sql);
        $statment->execute($arguments);
        $conn = null;
    }

    public function update(array $arguments){
        $dbconn = new Dbconnection();
        $conn = $dbconn->getConnection();
        
        $sql = "UPDATE articles SET `title` = :title, `name` = :nameArticle, `category` = :category,
        `summary` = :summary, `content` = :content, `author` = :author, `image` = :imageArticle WHERE `id` = :id";
        $statment = $conn->prepare($sql);
        $statment->execute($arguments);
        $conn = null;
        
    }

    public function delete($id){
        $dbconn = new Dbconnection();
        $conn = $dbconn->getConnection();
        
        $sql = "DELETE FROM articles WHERE id = $id";
        $statment = $conn->prepare($sql);
        $statment->execute();
        $conn = null;
    }
}