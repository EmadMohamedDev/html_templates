<?php include 'header.php'; ?>
<style>
    .main .btn-more,
    .main .btn-more,
    .main .btn-download {
        width: 80%;
        margin: 0 auto;
        display: block;
        margin-bottom: 4%;
    }
</style>

<body>
    <!-- Start main content -->
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <section class="inner-img text-center">
                        <h5 class="inner-img-title">اللهم أبسط على والدي من بركاتك</h5>

                        <div class="audio-player">
                            <audio id="player" src="img/اللهم ارزقنا رزقاً يزيدنا لك شكرا.mp3" onended="myFunction()"></audio>

                            <div class="time-holder cf">
                                <div class="duration">00:00</div>
                                <div>/</div>
                                <div class="current-time">00:00</div>
                            </div>

                            <div class="audio-controls flex-container">
                                <div class="play-btn flex-col-1">
                                    <span class="fa fa-play"></span>
                                </div>
                            </div>

                            <div class="seek-bar">
                                <div class="seek-bar-track"></div>
                                <div class="seek-bar-thumb"></div>
                            </div>
                        </div>
                    </section>

                    <div class="btn-more text-center rounded">
                        <a href="list_audio.php" class="btn border-0">الرجوع</a>
                    </div>

                    <div class="btn-more text-center rounded">
                        <a href="sms:1600?body=81964" class="btn border-0">اجعلها دعاء الانتظار</a>
                    </div>

                    <div class="btn-download text-center rounded">
                        <a href="img/اللهم ارزقنا رزقاً يزيدنا لك شكرا.mp3" class="btn border-0" download="اللهم أبسط على والدي من بركاتك">تحميل</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'modals.php'; ?>
    <?php include 'footer.php'; ?>

    <script>
        function myFunction() {
            $('#first_modal').addClass('fade_modal');
        }
        // click on close btn in first modal مواقيت الصلاة  >> hide modal
        $('#first_modal .header-close').click(function() {
            $('#first_modal').removeClass('fade_modal');
        });


        // click on close btn in second modal اقرب مسجد >> hide modal
        // click on link  مواقيت الصلاة which in second modal >> show the first modal
        $('#second_modal .header-close , #second_modal .footer-link').click(function() {
            $('#second_modal').removeClass('fade_modal');
        });


        // click on link اقرب مسجد which in first modal >> show the second modal
        $('#first_modal .footer-link').click(function() {
            $('#second_modal').addClass('fade_modal');
        });
    </script>