<?php require("partials/header.php") ?>

<section id="form">
    <h1>Create new grocery</h1>

    <form method="POST" action="/groceries/add-grocery">
        <label for="name">Product name:</label><br>
        <input type="text" id="name" name="name" minlength="1"><br>
        <label for="number">Amount:</label><br>
        <input type="number" id="number" name="number" min="0"><br>
        <label for="price">Price:</label><br>
        <input type="number" step="0.01" id="price" name="price" min="0"><br>
        <input type="submit" value="Submit">
    </form>
</section>

<?php require("partials/footer.php") ?>