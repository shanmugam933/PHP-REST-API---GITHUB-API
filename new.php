<?php require "header.html" ?>

<h1>New Repository</h1>

<form method="POST" action="create.php">

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="description"></label>
    <textarea name="description" id="description"></textarea>

    <button>Submit</button>

</form> 

<?php require "footer.html" ?>