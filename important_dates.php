<div class="container">
    <h2 class="text-uppercase fw-bold text-center mb-3" data-aos="fade-up">
        Important <span class="secondary_color">Dates</span>
    </h2>
    <?php
    $select_from_new_paper = "SELECT * FROM `important_dates` ";
    $run_select_from_new_paper = mysqli_query($conn, $select_from_new_paper);
    if (mysqli_num_rows($run_select_from_new_paper) > 0) {
    ?>
        <div class="card-group rounded shadow text-center" data-aos="fade-up-right">
            <?php
            while ($row = mysqli_fetch_assoc($run_select_from_new_paper)) {
                extract($row);
            ?>
                <div class="card" style="min-height: 20vh;">

                    <div class="card-body">
                        <h5 class="card-title primary_color fw-bold fs-4" style="min-height: 10vh;">
                            <?php
                            // echo $topic;
                            if (strlen($topic) < 20 && str_word_count($topic) > 1) {
                                $arr = explode(" ", $topic);
                                $lines = array_chunk($arr, 1);
                                foreach ($lines as $line)
                                    echo implode(" ", $line) . "<br/>";
                            } else {
                                echo $topic;
                            }
                            ?>
                        </h5>
                        <p class="card-text fw-bold fs-5"><?php echo $date; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
    }
        ?>
        </div>
</div>