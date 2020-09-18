<?php include('header.php')?>
<!-- new food form -->
<main>
    <form action="./includes/new.inc.php" method="POST">
        <h1>ADD NEW FOOD</h1>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" />
        </div>
        <div>
            <label for="image">image url</label>
            <input type="text" id="image" name="image" />
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" />
        </div>
        <div>
            <label for="description">description</label>
            <textarea name="description" id="description" maxlength="255"></textarea>
        </div>
        <div>
            <label for="category">category</label>
            <input type="text" id="category" name="category" />
        </div>
        <button type="submit" name="submit_food">add food</button>
    </form>
</main>
<!--  -->
<?php include('footer.php')?>
