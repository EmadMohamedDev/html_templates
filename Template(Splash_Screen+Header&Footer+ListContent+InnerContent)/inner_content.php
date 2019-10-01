<?php include 'header.php';?>
    <!-- Start main content -->
    <section class="main-listContent">
        <div class="container">
            <div class="list-status">
                <div class="btn-back">
                    <a href="#" class="link_href">
                        <span>Test</span>
                        <i style="font-size:20px;" class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="statu_item">
                            <a href="#" class="link_href rounded">
                                <video class="inner-video rounded border-0 mx-auto d-block" poster="img/test.jpg"
                                    width="75%" height="400" controls>
                                    <source type="video/mp4" src="img/v_2.mp4" />
                                </video>

                                <div class="player mx-auto rounded">
                                    <div class="like waves-effect waves-light">
                                        <i class="icon-heart fas fa-heart"></i>
                                    </div>
                                    <div class="mask"></div>
                                    <ul class="player-info info-one">
                                        <li>Hafeyaa</li> <!-- Song Name -->
                                        <li>Masra7 Massr</li> <!-- Artist Name -->
                                        <li>1:01</li>
                                    </ul>
                                    <ul class="player-info info-two">
                                        <li>Hafeyaa</li> <!-- Song Name -->
                                        <li>Masra7 Massr</li> <!-- Artist Name -->
                                        <li><span id="duration"></span><i> / </i>1:01</li>
                                    </ul>
                                    <div id="play-button" class="unchecked rounded-circle border-0">
                                        <i class="icon fas fa-play"></i>
                                    </div>
                                    <div class="control-row">
                                        <div class="waves-animation-one rounded-circle"></div>
                                        <div class="waves-animation-two rounded-circle"></div>
                                        <div id="pause-button" class="rounded-circle border-0">
                                            <i class="icon"></i>
                                        </div>
                                        <div class="seek-field">
                                            <input id="audioSeekBar" min="0" max="334" step="1" value="0" type="range"
                                                oninput="audioSeekBar()" onchange="this.oninput()">
                                        </div>
                                        <div class="volume-icon rounded-circle">
                                            <i class="fas fa-volume-up"></i>
                                        </div>
                                        <div class="volume-field">
                                            <input type="range" min="0" max="100" value="100" step="1"
                                                oninput="audio.volume = this.value/100" onchange="this.oninput()">
                                        </div>
                                    </div>
                                </div>

                                <audio id="audio-player" ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()"
                                    preload="auto" loop>
                                    <!-- <source src="/img/Hafeyaa.mp3" type="audio/ogg"> -->
                                    <source src="img/Hafeyaa.mp3" type="audio/mpeg">
                                </audio>

                                <img src="img/test.jpg" class="inner-img img-fluid rounded mx-auto d-block" alt="Test">
                            </a>
                            <div class="icons">
                                <a href="#"><i class="fas fa-share-alt"></i></a>
                                <a href="#" download><i class="fas fa-download"></i></a>
                                <a href="#"><i class="fas fa-heart heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>