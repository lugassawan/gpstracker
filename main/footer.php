        </div>
        <!-- Script -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- G Maps Function -->
        <script>
            function initMap(){
            // Map options
            var options = {
                zoom:18,
                center :{lat:-6.975353,lng:107.629901},
            }

            // New map
            var map = new google.maps.Map(document.getElementById('map'), options);

            // Listen for click on map
            google.maps.event.addListener(map, 'click', function(event){
                // Add marker
                addMarker({coords:event.latLng});
            });

            // Array of markers
            var markers = [
                <?php
                    $id_user = $_SESSION['id_user'];
                    $track = mysqli_query($conn,"select * from lokasi where id_user='$id_user'");
                    while($rtr = mysqli_fetch_array($track)){
                ?>
                    {
                    coords:{lat:<?php echo $rtr['lat']; ?>,lng:<?php echo $rtr['lng']; ?>}
                    },
                <?php
                    }
                ?>
            ];

            // Loop through markers
            for(var i = 0;i < markers.length;i++){
                // Add marker
                addMarker(markers[i]);
            }

            // Add Marker Function
            function addMarker(props){
                var marker = new google.maps.Marker({
                position:props.coords,
                map:map,
                //icon:props.iconImage
                });

                // Check for customicon
                if(props.iconImage){
                // Set icon image
                marker.setIcon(props.iconImage);
                }

                // Check content
                if(props.content){
                var infoWindow = new google.maps.InfoWindow({
                    content:props.content
                });

                marker.addListener('click', function(){
                    infoWindow.open(map, marker);
                });
                }
            }
            }
        </script>
        <!-- G Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU-cTGx45vZgnKj_Hyj42bmdbq3wMLXcU&callback=initMap"
    async defer></script>
    </body>
</html>