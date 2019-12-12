<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TECHCEFACOS GROUP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> 
		
        <!-- master CSS
        ============================================ -->            
        <link rel="stylesheet" href="master.css">
		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- Color Css Files Start -->
        <link rel="alternate stylesheet" type="text/css" href="switcher/color-one.css" title="color-one" media="screen" />
        <!-- Color Css Files End -->

    </head>
    <body>
    @include('layouts.header')

    

    @yield('content')


   




        </div>
        <!-- End main area -->


        @include('layouts.footer')


		<!-- jquery-1.12.0.min js
		============================================ -->  
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		
		<!-- bootstrap js
		============================================ -->         
        <script src="js/bootstrap.min.js"></script>
		
		<!-- owl.carousel.min js
		============================================ -->       
        <script src="js/owl.carousel.min.js"></script>

        <!-- jquery.nivo.slider.pack js
		============================================ -->       
        <script src="js/jquery.nivo.slider.pack.js"></script>

        <!-- jquery.mixitup.min js
        ============================================ -->       
        <script src="js/jquery.mixitup.min.js"></script>

        <!-- jquery.magnific-popup.min js
        ============================================ -->       
        <script src="js/jquery.magnific-popup.min.js"></script>

        <!-- jquery.meanmenu js
        ============================================ -->       
        <script src="js/jquery.meanmenu.js"></script>

        <!-- jquery.syotimer.min js
        ============================================ -->       
        <script src="js/jquery.syotimer.min.js"></script>
		
		<!-- wow js
		============================================ -->       
        <script src="js/wow.js"></script>
		
        <!-- jquery.scrollUp.min js
        ============================================ -->       
        <script src="js/jquery.scrollUp.min.js"></script>

        <!-- ajax-mail js
        ============================================ -->       
        <script src="js/ajax-mail.js"></script>

        <!-- jquery.ajaxchimp.min js
        ============================================ -->       
        <script src="js/jquery.ajaxchimp.min.js"></script>
      
        <!-- plugins js
		============================================ -->         
        <script src="js/plugins.js"></script>

        <script>
        	new WOW().init();
        </script>
        
        <!-- styleswitch js
        ============================================ -->       
        <script src="js/styleswitch.js  "></script>
        
   		<!-- main js
		============================================ -->           
        <script src="js/main.js"></script>

        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(40.663293, -73.956351)
              };

              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);


              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
              });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </body>
    </html>
