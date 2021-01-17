<!DOCTYPE html>

<html>
<head>
  <title><?php echo $title ?></title>
</head>
<body>
<nav>
<ul  style='display: flex; justify-content: space-between; list-style: none'>
<?php
 include_once('NavMenu.php');
 NavMenu();
?>
</ul>
  <div id="page">
    <?php echo $content ?>
  </div>
</body>
</html>