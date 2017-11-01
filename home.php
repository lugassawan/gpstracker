<?php
    session_start();
    include('main/header.php');
    include('inc/koneksi.php');
?>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                GTrack
            </div>

            <div class="links">
                Welcome to GTrack base...
            </div>
        </div>
    </div>
    <div class="col-md-12" style="height:500px;">
        <div id="map"></div>
    </div>
    <div class="col-md-12" style="height:50px;"></div>
<?php
    include('main/footer.php');
?>      