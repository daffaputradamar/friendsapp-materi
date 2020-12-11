<?php
include_once('./layouts/header.php');
include_once('./layouts/navbar.php');
?>
<div class="container">
    <h4 class="text-center mt-3">My FriendsApp</h4>
    <div class="text-center">
        <img src="assets/friends.jpg" alt="friends img">
    </div>
    <div class="mt-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <?php
                if (isset($_SESSION['name'])) {
                ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p>Selamat Datang, <?= $_SESSION['name'] ?></p>
                                <a href="actions/auth_logout.php" class="btn btn-secondary">
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <form action="actions/auth_login.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Invalid Name
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
                    </form>
                <?php } ?>
            </div>
            <div class="col"></div>
        </div>


    </div>

</div>
<?php
include_once('./layouts/footer.php');
?>