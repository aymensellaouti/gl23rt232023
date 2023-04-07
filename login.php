<?php
$pageTitle = 'login';
require_once 'fragments/header.php';

?>

    <div class="container">
        <?php
            if(isset($_GET['error'])) {
        ?>
                <div class="alert alert-danger">
                    <?= $_GET['error'] ?>
                </div>
        <?php
            }
        ?>
        <form
              action="processLogin.php"
              method="POST"
        >
           username:
            <input type="text" name="username" class="form-control">
           password:
            <input type="password" name="password" class="form-control">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </form>
    </div>

<?php
require_once 'fragments/footer.php';
