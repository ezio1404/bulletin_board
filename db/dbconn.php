<?php

function dbconn()
{
    try {
        return new PDO("mysql:hostname=localhost;dbname=bulletin_board_db", "root", "");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function destroy()
{
    return null;
}

function addRecord($data)
{
    $db = dbconn();
    $sql = "INSERT INTO tbl_article(article_title,article_content) values(?,?)";
    $stmt = $db->prepare($sql);
    $stmt->execute($data);
    $db = destroy();
} // end of addRecord

function updateRecord($data)
{
    $db = dbconn();
    $sql = "UPDATE tbl_article SET article_title = ? ,  article_content = ? WHERE article_id = ? ";
    $stmt = $db->prepare($sql);
    $stmt->execute($data);
    $db = destroy();
} // end of addRecord


function getAllRecord()
{
    $db = dbconn();
    $sql = "SELECT * FROM tbl_article";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $db = destroy();
    return $rows;
}


function getRecord($data)
{
    $db = dbconn();
    $sql = "SELECT * FROM tbl_article WHERE article_id=?";
    $stmt = $db->prepare($sql);
    $stmt->execute($data);
    $row = $stmt->fetch();
    $db = destroy();
    return $row;
} //end of getRecord


function deleteRecord($data)
{
    $db = dbconn();
    $sql = "DELETE FROM tbl_article WHERE article_id=?";
    $stmt = $db->prepare($sql);
    $stmt->execute($data);
    $db = destroy();
}//end of deleteRecord
