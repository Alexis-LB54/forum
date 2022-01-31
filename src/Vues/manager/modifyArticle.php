<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/ArticleM">
        <label for="Title">Title:</label>
        <input name="Title" type="text" value="<?php echo $Article->setTitle() ?>" required />

        <label for="resume">resume:</label>
        <input name="resume" type="text" value="<?php echo $Article->setResume() ?>" required />

        <label for="author">author:</label>
        <input name="author" type="text" value="<?php echo $Article->setAuthor() ?>" required />

        <label for="editor">editor:</label>
        <input name="editor" type="text" value="<?php echo $Article->setEditor() ?>" required />

        <label for="ISBN">ISBN:</label>
        <input name="ISBN" type="number" value="<?php echo $Article->setISBN() ?>" required />

        <label for="note">note:</label>
        <input name="note" type="number" value="<?php echo $Article->setNote() ?>" required />

        <label for="Comment">Comment:</label>
        <input name="Comment" type="textarea" value="<?php echo $Article->setComment() ?>" required />

        <input type="submit" value="Add" />
</body>
</html>