<?php include("author_header.php") ?>
<?php include_once("../validate_server_side.php") ?>
<?php
if (isset($_POST['edit_profile'])) {
    $data = $_POST;

    $loginArr = validateAdminLoginData($conn, $data);
    extract($loginArr);
    if (isset($_POST["profile_id"])) {
        $profile_id = $_POST["profile_id"];

        $update_sql = "UPDATE `author_information` SET `author_name`='$name',`author_email`='$email' WHERE author_id='$profile_id'";
        $run_insert_qry = mysqli_query($conn, $update_sql);
        if ($run_insert_qry) {
            echo "<p class='text-success text-bold text-center fs-5 mt-3'>Your Profile information is  successfully updated.</p>";
?>
            <script>
                location.href = location.href;
            </script>
<?php
        } else {
            echo "<p class='text-danger text-bold text-center fs-5 mt-3'>No data is updated</p>";
        }
    }
}
?>
<?php
if (isset($_GET['profile_id'])) {
    $id = $_GET['profile_id'];

    $select_from_new_paper = "SELECT * FROM author_information WHERE author_id=$id";
    $run_select_from_new_paper = mysqli_query($conn, $select_from_new_paper);
    if (mysqli_num_rows($run_select_from_new_paper) > 0) {
        $row = mysqli_fetch_assoc($run_select_from_new_paper);
        extract($row);
?>
        <div class="container-fluid mt-5 d-flex justify-content-center">
            <div class="col-md-8 col-12">
                <h2 class="text-capitalize text-center">Update your profile information</h2>
                <form action="" method="post" onsubmit="return adminFormData()">
                    <input type="hidden" name="profile_id" value="<?php echo $id; ?>" />
                    <div class="mt-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Please type your name" value="<?php echo $author_name; ?>" onkeyup="validateName()">
                        <span id="name_err" class="text-danger"></span>
                    </div>
                    <div class="mt-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Please type your email address" value="<?php echo $author_email; ?>" onkeyup="validateEmail()">
                        <span id="email_err" class="text-danger"></span>
                    </div>
                    <div class="mt-3">
                        <input type="submit" name="edit_profile" value="Update" class="btn btn-primary">
                    </div>
                    <p class="change-password text-right mt-3">
                        Do you want to change your password?
                        <a href="edit_profile_pass.php?profile_pass_id=<?php echo $id; ?>">Change Password</a>
                    </p>
                </form>
                <script src="../validate_client_side.js"></script>
            </div>
        </div>
<?php
    } else {
        echo "<p class='text-danger text-bold text-center fs-5 mt-3'>No data found</p>";
    }
}
?>
<?php include_once("author_footer.php") ?>