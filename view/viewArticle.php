<?php
include "../db/dbconn.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Bulletin Board</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Bulletin Board</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="../index.php">Home</a>
                    <a class=" btn btn-outline-primary" aria-current="page" href="view/article.php">Create Article</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="py-5 container">
        <?php
        if (isset($_GET['message']) == "empty_title" || isset($_GET['message']) == "empty_content") {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <?php
        if (isset($_GET['id'])) {
            $article = getRecord([$_GET['id']]);
        }
        ?>
        <form action="../controller/articleController.php" method="post">
            <div class="mb-3">
                <label for="article_title" class="form-label">Article Title</label>
                <input type="text" class="form-control" readonly id="article_title" name="article_title" placeholder="Atomic Habits" value="<?php echo $article["article_title"] ?>">
            </div>
            <div class="mb-3">
                <label for="article_content" class="form-label">Content</label>
                <textarea placeholder="Your content here" readonly class="form-control" id="article_content" name="article_content" rows="3"><?php echo $article["article_content"] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="article_created_at" class="form-label">Created Date</label>
                <input type="text" class="form-control" readonly id="article_created_at" name="article_created_at" placeholder="Atomic Habits" value="<?php echo $article["article_created_at"] ?>">
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>