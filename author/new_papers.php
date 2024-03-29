<?php include('author_header.php') ?>
<div class="container-fluid mt-5">
    <h3 class="text-center text-secondary fw-bold">Paper Details</h3>
    <div class="col">
        <div class="card pt-5 pb-4 shadow mb-5 px-md-5 px-3 bg-body rounded">
            <div class="table-responsive">
                <table id="table" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <!-- <th>Paper ID</th> -->
                            <th>Paper Title</th>
                            <th>Paper Keywords</th>
                            <th>Track</th>
                            <th>Authors Name</th>
                            <th>Authors Email</th>
                            <th>Authors Affiliation</th>
                            <th>File</th>
                            <th>Submission Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_from_new_paper = "SELECT * FROM `new_paper` WHERE `author_id` = '$_SESSION[author_id]'";
                        $run_select_from_new_paper = mysqli_query($conn, $select_from_new_paper);
                        $serial_no = 1;
                        if (mysqli_num_rows($run_select_from_new_paper) > 0) {
                            while ($row = mysqli_fetch_assoc($run_select_from_new_paper)) {
                                extract($row);
                        ?>
                                <tr>
                                    <td><?php echo $serial_no; ?></td>
                                    <td><?php echo $paper_title ?></td>
                                    <td><?php echo $paper_keywords ?></td>
                                    <td><?php echo $track ?></td>
                                    <td><?php echo $authors_name ?></td>
                                    <td><?php echo $authors_email ?></td>
                                    <td><?php echo $authors_affiliation ?></td>
                                    <td><a href="../Files/document_for_manuscript/<?php echo $manuscript_pdf ?>"><?php echo $manuscript_pdf ?></a></td>
                                    <td><?php echo date('d-M-Y', strtotime($timestamps)) ?></td>

                                    <td class="text-secondary fw-bold"><?php echo "New Submission" ?></td>

                                </tr>
                        <?php
                                $serial_no++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('author_footer.php') ?>