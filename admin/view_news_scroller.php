<?php include("admin_header.php") ?>

<div class="container-fluid mt-5">
    <h3 class="text-center text-secondary fw-bold">All News Scroller Details</h3>
    <div class="col">
        <div class="card pt-5 pb-4 shadow mb-5 px-md-5 px-3 bg-body rounded">
            <div class="table-responsive">
                <table id="table" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_from_new_paper = "SELECT * FROM news_scroller";
                        $run_select_from_new_paper = mysqli_query($conn, $select_from_new_paper);
                        $serial_no = 1;
                        if (mysqli_num_rows($run_select_from_new_paper) > 0) {
                            while ($row = mysqli_fetch_assoc($run_select_from_new_paper)) {
                                extract($row);
                        ?>
                                <tr>
                                    <td><?php echo $serial_no; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $details; ?></td>
                                    <td><?php echo $created_at; ?></td>
                                    <td>
                                        <a href="edit_news_scroller.php?id=<?php echo $id ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="delete_news_scroller.php?id=<?php echo $id ?>" class="btn btn-primary" onclick="return confirmSubmission()">Delete</a>
                                    </td>
                                </tr>
                        <?php
                                $serial_no++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <script>
                function confirmSubmission() {
                    return confirm(" Are you sure you want to confirm your submission?");
                }
            </script>
        </div>
    </div>
</div>
<?php include("admin_footer.php") ?>