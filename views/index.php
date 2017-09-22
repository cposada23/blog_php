<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
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
                <?php foreach($blogPosts as $blogPost): ?>
                    <div class="blog-post">
                        <h2><?php echo $blogPost['title'] ?></h2>
                        <p>Jane 11,12123 by <a href="">alex</a></p>
                        <div class="blog-post-image">
                            <img src="images/1.jpg" alt="">
                        </div>
                        <div class="blog-post-content">
                            <?php echo $blogPost['content'] ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-4">
                sidebar
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    El footerrrr <br>
                    <a href="admin/index.php">Admin Panel</a>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>