<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require "components/navbar.php" ?>
    <form>
  <input name='id'/>
  <button>Filter by ID</button>
</form>

<form>
  <input name='category' value='<?= ($_GET["category"] ?? '') ?>'/>
  <button>Filter by Category</button>
</form>


<h1>Posts</h1>

<ol>
<?php foreach($posts as $post) { ?>
  <li> <?= $post["title"] ?> </li>
<?php } ?>
</ol>
<?php require "components/footer.php" ?>


