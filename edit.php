<?php
//Header
include_once 'includes/header.php';
//Connection
include_once 'php_action/db_connect.php';

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM customers WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
endif;

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Edit customer</h3>
        <form action="php_action/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <div class="input-field col s12">
                <input type="text" name="name" id="name" value="<?php echo $data['name'] ?>">
                <label for="name">Name</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="surname" id="surname" value="<?php echo $data['surname'] ?>">
                <label for="surname">Surname</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php echo $data['email'] ?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="number" name="age" id="age" value="<?php echo $data['age'] ?>">
                <label for="age">Age</label>
            </div>
            <button type="submit" name="btn-edit" class="btn">Update</button>
            <a href="index.php" class="btn green">Customer list</a>
        </form>
    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>

