<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="lib.css">
    <title>DashBoard</title>
</head>
<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="title" name="title">
        <input type="text" placeholder="description" name="des">
        <input type="text" placeholder="media" name="price">
        <input type="text" placeholder="more" name="price1">
        <input type="file" name="image">
        <button type="submit">Add</button> <button type="sub">Update</button>
        
    </form>
    <form action="Delete.php" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="title" name="title">
        <button type="submit">Delete</button>
    </form>
</body>
</html>