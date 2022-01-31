<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/CommentA/:id">
        <label for="Title">Title:</label>
        <input name="Title" type="text" value="<?php echo $Critic->getTitle() ?>" required />

        <label for="resume">resume:</label>
        <input name="resume" type="text" value="<?php echo $Article->getResume() ?>" required />

        <label for="author">author:</label>
        <input name="author" type="text" value="<?php echo $Article->getAuthor() ?>" required />

        <label for="editor">editor:</label>
        <input name="editor" type="text" value="<?php echo $Article->getEditor() ?>" required />

        <label for="ISBN">ISBN:</label>
        <input name="ISBN" type="number" value="<?php echo $Article->getISBN() ?>" required />

        <label for="note">note:</label>
        <input name="note" type="number" required />

        <label for="Comment">Comment:</label>
        <input name="Comment" type="textarea" required />

        <input type="submit" value="Add" />
</form>
</body>
</html>