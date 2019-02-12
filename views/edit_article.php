<form method="post">
    <p>Name</p><input type="text" name="name" value="<?php echo $article['name'] ?>">
    <p>Description</p><input type="text" name="description" value="<?php echo $article['description'] ?>">
    <p>Created_at</p><input type="date" name="created_at" value="<?php echo $article['created_at'] ?>">
    <button type="submit">Submit</button>
</form>