<?php
include_once('./layouts/header.php');
include_once('./layouts/navbar.php');

include_once('./config/db.php');

db();
global $link;
?>

<div class="container">
    <h4 class="text-center mt-3">Contact Me</h4>
    <hr>
    <form action="actions/contact_add.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">
                    Invalid Name
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <div class="input-group has-validation">
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Invalid Email
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <div class="input-group has-validation">
                <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                <div class="invalid-feedback">
                    Invalid Message
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <?php
    $query = "SELECT * FROM contacts";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3 class='mb-3'>Your Data</h3>";
        echo "<ul class='list-group'>";
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <li class="list-group-item">
                <p>Name: <?= $row['name'] ?></p>
                <p>Email: <?= $row['email'] ?></p>
                <p class="mb-0">Message: <?= $row['message'] ?></p>
            </li>
    <?php
        }
        echo "</ul>";
    }
    ?>
</div>

<?php
mysqli_close($link);
include_once('./layouts/footer.php');
?>