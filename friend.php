<?php
include_once('./layouts/header.php');
include_once('./layouts/navbar.php');

if (!isset($_SESSION['name'])) {
    header("Location: index.php");
}

include_once('./config/db.php');

db();
global $link;
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<div class="container">
    <h4 class="text-center mt-3">Add a New Friend</h4>
    <hr>
    <form action="actions/friend_add.php" method="POST">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="contact" class="col-sm-2 col-form-label">Contact No.</label>
            <div class="col-sm-10">
                <input type="text" name="contact" class="form-control" id="contact">
            </div>
        </div>
        <button type="submit" class="btn btn-success" name="friend">Add Friend</button>
    </form>
    <br>
    <?php $query = "SELECT * FROM friends";
    $result = mysqli_query($link, $query);
    $no = 1;
    if (mysqli_num_rows($result) > 0) {  ?>
        <h4 class="text-center mt-3">My Friends</h4>
        <table class="table" id="friend">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['contact_no'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php } ?>
</div>

<script>

</script>

<?php
mysqli_close($link);
include_once('./layouts/footer.php');

?>