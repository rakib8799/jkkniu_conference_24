<?php include("admin_header.php") ?>

<?php
if (isset($_GET['id'], $_GET['image'])) {
    $id = $_GET['id'];
    $image = $_GET['image'];
    $deleteData = "DELETE FROM speakers WHERE speaker_id = $id";
    $result = mysqli_query($conn, $deleteData);
    if ($result) {
        echo "<p class='text-danger text-bold text-center fs-5 mt-3'>Deleted successfully</p>";
        unlink('../Images/speaker_images/' . $image);
        header("Location: view_speaker_details.php");
        ob_end_flush();
    } else {
        echo "<p class='text-danger text-bold text-center fs-5 mt-3'>Not Deleted</p>";
    }
}
?>
<?php include("admin_footer.php") ?>