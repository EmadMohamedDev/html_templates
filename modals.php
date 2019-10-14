<style>
    .timepray {
        text-align: center;
        width: 46%;
        margin: auto;
        background: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
        color: #3c3c3c;
        padding: 15px;
        overflow: hidden;
        margin-bottom: 8px;
    }

    .timepray span:first-of-type {
        float: right;
        font-weight: bold;
    }

    .timepray i {
        float: left;
    }

    @media (max-width: 575px) {
        .timepray {
            width: 90%;
        }
    }

    .content-header-title {
        width: 46%;
        margin: auto;
        text-align: center;
    }

    .content-header-title span {
        display: inline-block;
        background: #fff;
        padding: 10px 20px;
        font-size: 12px;
        margin-bottom: 10px;
        width: 46%;
    }

    @media (max-width: 575px) {
        .content-header-title {
            width: 90%;
        }

        .content-header-title span {
            width: 50%;
            float: left;
            border-left: 1px solid;
        }

        .content-header-title span:first-of-type {
            border: 0;
        }
    }

    #first_modal {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 999;
        transition: all 0.5s ease-in-out;
        transform: scale(0);
    }

    #second_modal {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 9999;
        transition: all 0.5s ease-in-out;
        transform: scale(0);
    }

    #second_modal #map {
        width: 100%;
        margin: 2px 0;
    }

    .fade_modal {
        transform: scale(1) !important;
    }

    .fade_modal .content {
        transition: all 0.5s ease-in-out 1s;
        visibility: visible !important;
    }

    #first_modal.fade_modal .content {
        top: 8px !important;
    }

    #second_modal.fade_modal .content {
        top: 100px !important;
    }

    @media (max-width: 768px) {
        #second_modal.fade_modal .content {
            top: 15px !important;
        }
    }

    #first_modal .content,
    #second_modal .content {
        position: absolute;
        width: 40%;
        background: #f3f3f3;
        left: 50%;
        transform: translateX(-50%);
        top: -300px;
        visibility: hidden;
        padding: 10px 20px;
        border: 2px solid #888;
        border-radius: 15px;
    }

    @media (max-width: 991px) {

        #first_modal .content,
        #second_modal .content {
            width: 90%;
        }
    }

    #first_modal .content .header,
    #second_modal .content .header {
        overflow: hidden;
        border-bottom: 1px solid #d2d2d2;
        padding-bottom: 5px;
    }

    #first_modal .content .header .header-title,
    #second_modal .content .header .header-title {
        float: right;
        margin: 0;
        padding: 0;
        font-size: 17px;
        font-weight: bold;
        letter-spacing: 0;
    }

    #first_modal .content .header .header-close,
    #second_modal .content .header .header-close {
        float: left;
        display: block;
        background: #FBAB7E;
        color: #fff;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 25px;
    }

    #first_modal .content .body,
    #second_modal .content .body {
        height: auto;
        padding: 6px 0;
        text-align: right;
        border-bottom: 1px solid #d2d2d2;
    }

    #first_modal .content .footer,
    #second_modal .content .footer {
        padding: 10px 0 5px 0;
        overflow: hidden;
    }

    #first_modal .content .footer .footer-link,
    #second_modal .content .footer .footer-link {
        display: block;
        width: 80%;
        background: #FBAB7E;
        color: #fff;
        padding: 12px 30px;
        font-size: 18px;
        font-weight: bold;
        margin: auto;
        border-radius: 7px;
        text-align: center;
    }

    #first_modal .content .footer .footer-link:hover,
    #second_modal .content .footer .footer-link:hover {
        background: -webkit-linear-gradient(left, -webkit-linear-gradient(left, #e2e42a, #bfc135) 15%, -webkit-linear-gradient(left, #e2e42a, #bfc135) 100%);
    }

    .header-textmap {
        margin-bottom: 0;
        padding: 0;
        margin: 8px;
        text-align: center;
        color: -webkit-linear-gradient(left, #e2e42a, #bfc135);
        font-size: 20px;
        font-weight: bold;
    }

    .vjs-default-skin .vjs-big-play-button {
        background: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%) !important;
    }
</style>

<!-- Modal مواقيت الصلاة -->
<div id="first_modal">
    <div class="content">
        <div class="header">
            <h2 class="header-title">مواقيت الصلاة</h2>
            <a href="#" class="header-close">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="body">
            <div class="content-header-title">

                <span class="malady"><?php echo date("d-m-Y") ?></span>

                <span class="hjrri" dir="rtl"> 14-<bdi>صفر</bdi>-1441</span>
            </div>

            <div class="timepray">
                <span>الفجر</span>
                <i>4:30 am</i>
            </div>

            <div class="timepray">
                <span>الظهر</span>
                <i>11:42 am</i>
            </div>

            <div class="timepray">
                <span>العصر</span>
                <i>3:00 pm</i>
            </div>

            <div class="timepray">
                <span>المغرب</span>
                <i>5:28 pm</i>
            </div>

            <div class="timepray">
                <span>العشاء</span>
                <i>6:45 pm</i>
            </div>
        </div>
        <div class="footer">
            <a href="#" class="footer-link">أقرب مسجد</a>
        </div>
    </div>

</div>

<!-- Modal اقرب مسجد -->
<div id="second_modal">

    <div class="content">
        <div class="header">
            <h2 class="header-title">أقرب مسجد</h2>
            <a href="#" class="header-close">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="body">
            <p class="header-textmap"></p>
            <iframe id="map" src="http://127.0.0.1/alafasy_web_app_v3/38/nearestMosqueMap" width="600" height="350" frameborder="0" style="" allowfullscreen></iframe>
        </div>
        <div class="footer">
            <a href="#" class="footer-link">مواقيت الصلاة</a>
        </div>
    </div>

</div>