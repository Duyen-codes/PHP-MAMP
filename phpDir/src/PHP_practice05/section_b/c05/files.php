<?php
$path = 'img/logo.png';
?>
<?php include 'includes/header.php'; ?>

<?php 
// Write you PHP code here
echo "filename is: " . basename("./img/logo.png") . "<br>";
echo "file size is: " . filesize("./img/logo.png") . "<br>";

echo "file type is: " . mime_content_type("./img/logo.png") . "<br>";
echo "file real path: " . realpath("./img/logo.png");
?>



<?php include 'includes/footer.php'; ?>