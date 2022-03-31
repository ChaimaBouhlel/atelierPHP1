<?php
session_start();
$pageTitle='login';
include_once'header.php' ;
?>
<div class="container">
    <?php
    if (isset($_SESSION['errorMessage'])){
        ?>
    <div class="alert alert-danger">
        <?= $_SESSION['errorMessage'] ?>
    </div>

    <?php
            unset($_SESSION['errorMessage']);
    }
    ?>
<form action="processLogin.php" method="post">
    <div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password"
                   name="password"
                   class="form-control"
                   id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>