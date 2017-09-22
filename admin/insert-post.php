<?php
  
    $result = false;
    if(!empty($_POST)) {

        $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'title' => $_POST['title'],
            'content' => $_POST['content']
        ]);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Post</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog Title</h1>            
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-8">
                <h2>New Posts</h2>
                <a class="btn btn-default" href="posts.php">Back</a>
                <?php
                    if ($result) {
                        echo '<div class="alert alert-success">Post Saved</div>';
                    }
                ?>
                <form action="insert-post.php" method="post">
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input type="text" name="title" id="inputTitle" class="form-control">
                    </div>
                    <textarea name="content" id="content" rows="5" class="form-control"></textarea>
                    <br>
                    <input class="btn btn-primary btn-full" type="submit">
                </form>
                    
            </div>
            <div class="col-md-4">
                sidebar
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    El footerrrr <br>
                    <a href="index.php">Admin Panel</a>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>