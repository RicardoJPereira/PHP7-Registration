<?php
//Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">New customer</h3>
        <form action="php_action/create.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="name" id="name">
                <label for="name">Name</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="surname" id="surname">
                <label for="surname">Surname</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="number" name="age" id="age">
                <label for="age">Age</label>
            </div>
            <button type="submit" name="btn-register" class="btn">Register</button>
            <a href="index.php" class="btn green">Customer list</a>
        </form>
    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>
