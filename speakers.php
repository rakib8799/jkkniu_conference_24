<h2 class="text-uppercase fw-bold text-center" data-aos="fade-up"><span class="secondary_color">Honorable </span>Speakers</h2>
<!-- <p class="fw-bold text-center text-danger fs-3">Yet to be published</p> -->

<div class="container mt-3 " data-aos="fade-up-right">
    <?php
    $select_from_new_paper = "SELECT * FROM `speakers` ";
    $run_select_from_new_paper = mysqli_query($conn, $select_from_new_paper);
    if (mysqli_num_rows($run_select_from_new_paper) > 0) {
    ?>
        <div class="row d-flex justify-content-center" style="min-height:40vh;">
            <?php
            while ($row = mysqli_fetch_assoc($run_select_from_new_paper)) {
                extract($row);
            ?>

                <div class="col-md-4">
                    <div class="card speaker_hover our-team shadow p-3 rounded package-item" style="height:100%;">
                        <div class="picture">
                            <img src="Images/speaker_images/<?php echo $speaker_image ?>" class="card-img-top" alt="speaker" style="height:45vh;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $speaker_designation ?> <?php echo $speaker_name ?></h5>
                            <h6><?php echo $speaker_position; ?></h6>
                            <p class="card-text"><?php echo $speaker_university ?>, <?php echo $speaker_country ?> <br />
                                Keynote Speaker on <b class="secondary_color"><?php echo $speaker_topic ?></b></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    <?php
    }
    ?>
</div>