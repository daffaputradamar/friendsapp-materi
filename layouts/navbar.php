<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">FriendsApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <?php
                if (isset($_SESSION['name'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="friend.php">Friends</a>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link active" href="contactus.php">Contact Me</a>
                </li>
                <?php
                if (isset($_SESSION['name'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="actions/auth_logout.php">Logout</a>
                    </li>
                <?php
                }
                ?>
        </div>
    </div>
</nav>