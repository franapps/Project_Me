<?php 
$title = "Fran's blog";
include "includes/_header.php";
db_connect();

$sql = mysql_query("SELECT * FROM blogData ORDER BY id DESC");
while($row = mysql_fetch_array($sql)){
$title = $row['Title'];
$content = $row['Content'];
$date = $row['theDate'];
?>

<article class="blog">
	<h2><?php echo $title ?>, <?php echo $date ?></h2>
	<p><?php echo $content ?></p>
</article>

<?php }; ?>

<?php
include "includes/_footer.php";
?>
