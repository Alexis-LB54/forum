<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Article</title>
</head>
<body>
<form method="POST" action="/ArticleA">
        <label for="Title">Title:</label>
        <input name="Title" type="text" required />

        <label for="resume">resume:</label>
        <input name="resume" type="text" required />

        <label for="author">author:</label>
        <input name="author" type="text" required />

        <label for="editor">editor:</label>
        <input name="editor" type="text" required />

        <label for="ISBN">ISBN:</label>
        <input name="ISBN" type="number" required />

        <label for="note">note:</label>
        <input name="note" type="number" required />

        <label for="Comment">Comment:</label>
        <input name="Comment" type="textarea" required />

        <input type="submit" value="Add" />
</form>
</body>
</html>