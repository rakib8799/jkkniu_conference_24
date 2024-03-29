<?php include("admin_header.php") ?>
<?php include_once("../validate_server_side.php") ?>

<?php
if (isset($_POST['edit_profile_pass'])) {
    $data = $_POST;

    $loginArr = validateAdminLoginPassData($conn, $data);
    extract($loginArr);

    if (isset($_POST["profile_pass_id"])) {
        $profile_pass_id = $_POST["profile_pass_id"];

        $sql = "SELECT * FROM admin_information where admin_id = $profile_pass_id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $password = $row['admin_password'];
                if (password_verify($previous_password, $password)) {
                    if ($new_password === $retype_new_password) {
                        $enc_new_password = password_hash($new_password, PASSWORD_DEFAULT);
                        $sql1 = "UPDATE admin_information SET admin_password = '$enc_new_password' WHERE admin_id = $profile_pass_id";
                        $result1 = mysqli_query($conn, $sql1);
                        if ($result1) {
                            echo "<p class='text-success text-center fs-5 mt-3'>Password is Changed successfully. You can now logged in with this new password</p>";
                        } else {
                            echo "<p class='text-danger fw-bold text-center fs-5 mt-3'>Password change failed...!</p>";
                        }
                    } else {
                        echo "<p class='text-danger fw-bold text-center fs-5 mt-3'>New Password and Retype password do not match!</p>";
                    }
                } else {
                    echo "<p class='text-danger fw-bold text-center fs-5 mt-3'>Previous Password is wrong. Please try again!</p>";
                }
            }
        }
    }
}
?>

<?php
if (isset($_GET['profile_pass_id'])) {
    $id = $_GET['profile_pass_id'];

    $select_from_new_paper = "SELECT * FROM admin_information WHERE admin_id=$id";
    $run_select_from_new_paper = mysqli_query($conn, $select_from_new_paper);
    if (mysqli_num_rows($run_select_from_new_paper) > 0) {
        $row = mysqli_fetch_assoc($run_select_from_new_paper);
        extract($row);
?>
        <div class="container-fluid mt-5 d-flex justify-content-center">
            <div class="col-md-8 col-12">
                <h2 class="text-capitalize text-center mt-5">Update/Change Password</h2>
                <form action="" method="post">
                    <input type="hidden" name="profile_pass_id" value="<?php echo $id; ?>" />
                    <div class="mt-3">
                        <label for="previous_password">Current Password</label>
                        <input type="password" name="previous_password" id="previous_password" class="form-control" placeholder="Please enter your current password" required>
                        <span id="previous_password_err" class="text-danger"></span>
                    </div>
                    <div class="mt-3">
                        <label for="new_password">New Password</label>
                        <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Please set your new password" required>
                        <span id="new_password_err" class="text-danger"></span>
                    </div>
                    <div class="mt-3">
                        <label for="retype_new_password">Confirm New Password</label>
                        <input type="password" name="retype_new_password" id="retype_new_password" class="form-control" placeholder="Please retype your new password for confirmation" required>
                        <span id="retype_new_password_err" class="text-danger"></span>
                    </div>
                    <div class="mt-3">
                        <input type="submit" name="edit_profile_pass" value="Update" class="btn btn-primary">
                    </div>
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
<?php include_once("admin_footer.php") ?>