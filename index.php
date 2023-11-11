<?php require_once("database/connection.php") ?>

<?php include_once('linker.php') ?>

<body>
    <header>
        <?php include_once('header.php') ?>
    </header>
    <section class="HomepageSection m-0" id="NewsScroller">
        <?php include_once('news_scroller.php') ?>
    </section>
    <section class="HomepageSection" id="HomeBanner">
        <?php include_once('home_banner.php') ?>
    </section>
    <a style="cursor:pointer;" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"><img style="width: 2vw;" class="to-top position-fixed bottom-0 end-0" src="./Images/arrow-up.jpg"></a>

    <section class="HomepageSection mt-5" id="ChiefPatron">
        <?php include_once('chief_patron.php') ?>
    </section>
    <section class="HomepageSection mt-5" id="AboutEvent">
        <?php include_once('about_event.php') ?>
    </section>


    <section class="HomepageSection mt-5 text-center" id="Countdown">
        <?php include_once('count_down.php') ?>
    </section>

    <section class="HomepageSection mt-5" id="CallForPaper">
        <?php include_once('call_for_paper.php') ?>
    </section>
    <section class="HomepageSection mt-5" id="GuideLines">
        <?php include_once('guidelines.php') ?>
    </section>
    <section class="HomepageSection mt-5" id="ImportantDates">
        <?php include_once('important_dates.php') ?>
    </section>
    <section class="HomepageSection mt-5" id="PaymentDetails">
        <?php include_once('payment_table.php') ?>
    </section>
    <section class="HomepageSection mt-5" id="Schedule">
        <?php include_once('schedule.php') ?>
    </section>
    <section class="HomepageSection mt-5" id="EventVenue">
        <?php include_once('event_venue.php') ?>
    </section>


    <footer data-aos="fade-up">
        <?php include_once('footer.php') ?>
    </footer>
    <!-- Here we hook our AOS JS file  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script>
        var app = document.getElementById('app');

        var typewriter = new Typewriter(app, {
            loop: true,
            delay: 75,
        });

        typewriter
            // .pauseFor(2500)
            // .typeString('<strong>Our Objectives are: </strong>')
            // .pauseFor(300)
            // .deleteChars(10)
            .typeString('<strong><span class="secondary_color">Promoting Human Values</span>, </strong> ')
            .typeString('<strong><span class="secondary_color">Creativity</span>, </strong>')
            .typeString('<strong><span class="secondary_color">Innovations</span> and </strong>')
            .typeString('<strong><span class="secondary_color">Prosperity to build Smart Generation for Smart Bangladesh</span></strong>')
            .pauseFor(1000)
            .start();
    </script>
    <!-- Activate AOS Library -->
    <script>
        AOS.init();
    </script>
</body>
</body>

</html>