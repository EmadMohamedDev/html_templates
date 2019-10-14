<?php include 'header.php';?>
<body>
    <!-- Start main content -->
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <section class="inner-img text-center">
                        <h5 class="inner-img-title">الخاتمة 232</h5>

                        <div class="video-item">
                            <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered rounded" controls
                                poster="img/16500.jpg" data-setup="{}" onended="myFunction()">
                                <source src="img/232.mp4" type='video/mp4' />
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading
                                    to a web browser that <a href="http://videojs.com/html5-video-support/"
                                        target="_blank">supports HTML5 video</a></p>
                            </video>
                        </div>

                        <div class="btn-more text-center rounded">
                            <a href="list_video.php" class="btn border-0">الرجوع</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <?php include 'modals.php' ;?>
    <?php include 'footer.php';?>

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