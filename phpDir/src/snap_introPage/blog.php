<?php include 'header.php'; ?>
<?php
$dir = __DIR__ . '/files';
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['save-file']))) {
    $filename = isset($_POST['file']) ? $_POST['file'] : null;
    $content = isset($_POST['content']) ? $_POST['content'] : null;
    echo $filename;
    echo $content;
}
?>
<section>
    <h2>Blog</h2>
    <form action="" method="post">
        <input type="text" name="file">
        <textarea name="content" id="" cols="30" rows="10"></textarea><br>
        <button type="submit" name="save-file">Post</button>
    </form>
</section>