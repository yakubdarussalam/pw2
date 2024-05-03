<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Article</title>
</head>
<body>
    <h1>List Artikel</h1>
<ul>
<?php foreach($articles as $article): ?>
<li>
<a href=""><?=$article['title']?></a>
</li>

<?php endforeach ?>

</ul>
</body>
</html>