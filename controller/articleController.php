<?php
include "../db/dbconn.php";
if (isset($_POST['edit_article'])) {
    $article_id = $_GET['id'];
    $article_title = htmlentities($_POST['article_title']);
    $article_content = htmlentities($_POST['article_content']);
    if (!$article_title) {
        header("location:../view/article.php?message=empty_title");
    } else if (!$article_content) {
        header("location:../view/article.php?message=empty_content");
    } else {
        $data = [$article_title, $article_content, $article_id];
        updateRecord($data);
        header("location:../index.php?message=success_updating");
    }
} else if (isset($_POST['submit_article'])) {
    $article_title = htmlentities($_POST['article_title']);
    $article_content = htmlentities($_POST['article_content']);
    if (!$article_title) {
        header("location:../view/article.php?message=empty_title");
    } else if (!$article_content) {
        header("location:../view/article.php?message=empty_content");
    } else {
        $data = [$article_title, $article_content];
        addRecord($data);
        header("location:../index.php?message=success_adding");
    }
} else if (isset($_POST['delete_article'])) {
    $article_id = htmlentities($_GET['id']);
    deleteRecord([$article_id]);
    header("location:../index.php?message=success_deleting");
}
