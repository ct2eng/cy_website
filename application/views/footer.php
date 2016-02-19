</div>

</div>
</div>
</div>
</header>

<!-- About Section -->

<hr>
<!-- Footer -->
<footer>

    <div class="container text-center">
        No. Anlin Rd., Xitun Dist., Taichung City, 407 Taiwan(R.O.C.) <br>
        TEL : 886-4-24630062 FAX : 886-4-24632892 <br>
        E-mail : cheng.yaow@msa.hinet.net
    </div>
</footer>


<!-- jQuery -->
<script src='<?php echo base_url("assets/js/jquery.js"); ?>'></script>

<!-- Bootstrap Core JavaScript -->
<script src='<?php echo base_url("assets/js/bootstrap.min.js"); ?>'></script>

<!-- Plugin JavaScript -->
<script src='<?php echo base_url("assets/js/jquery.easing.min.js"); ?>'></script>


<!-- Custom Theme JavaScript -->
<script src='<?php echo base_url("assets/js/grayscale.js"); ?>'></script>

<script src='<?php echo base_url("assets/js/main.js"); ?>'></script> <!-- side menu -->
<script src='<?php echo base_url("assets/js/carousel/owl.carousel.js"); ?>'></script>

<!-- ==================手機板清單=================== -->
<script>
    $(document).ready(function(){
        $("button#menu").click(function(){
            $(".animated").toggle(200);
        });
    });

</script>

<!-- ==========================輪播================================= -->
<script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 3,
        itemsDesktop : [1200,3],
        itemsDesktopSmall : [1170,2],
        itemsTablet : [960,2],
        itemsMobile : [700,1],
        lazyLoad : true,
        navigation : false,
        baseClass : "owl-carousel",
        theme : "owl-theme"
    });

  });

    (function() {
  
    $('dd').filter(':nth-child(n+4)').hide();
    
    $('dl').on("mouseenter", 'dt', function() {
        $(this)
            .next()
              .slideDown(100)
              .siblings('dd')
                .slideUp(100);
    });    
})();



</script>

</body>

</html>
