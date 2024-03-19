<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Create new post</h1>

<form>
    <label>
        <span>Title:</span>
        <input name="title"/>
    </label>
    <label>
        <span>Category ID:</span>
        <select name="category_id">
        <option value="1">Sport</option>
        <option value="2">Food</option>
        <option value="3">Music</option>
        </select>
    </label>
    <button>Save</button>
</form>

<ul>
    <li>1 - sport</li>
    <li>2 - food</li>
    <li>3 - music</li>
</ul>

<?php require "components/footer.php" ?>