<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="<?php echo base_url() ?>assets/admin/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url() ?>assets/admin/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo base_url() ?>assets/admin/js/bootstrap.js"> </script>
<!-- mother grid end here-->