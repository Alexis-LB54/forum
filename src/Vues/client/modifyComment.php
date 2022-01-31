<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/CommentM/:id">
        <label for="Title">Title:</label>
        <input name="Title" type="text" value="<?php echo $Critic->getTitle() ?>" required />

        <label for="note">note:</label>
        <input name="note" type="number" value="<?php echo $Article->setNote() ?>" required />

        <label for="Comment">Comment:</label>
        <input name="Comment" type="textarea" value="<?php echo $Article->setComment() ?>" required />

        <input type="submit" value="Add" />
</form>
</body>
</html>