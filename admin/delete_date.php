<?php include("admin_header.php") ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteData = "DELETE FROM important_dates WHERE id = $id";
    $result = mysqli_query($conn, $deleteData);
    if ($result) {
        echo "<p class='text-danger text-bold text-center fs-5 mt-3'>Deleted successfully</p>";
        header("Location: view_date.php");
        ob_end_flush();
    } else {
        echo "<p class='text-danger text-bold text-center fs-5 mt-3'>Not Deleted</p>";
    }
}
?>
<?php include("admin_footer.php") ?>