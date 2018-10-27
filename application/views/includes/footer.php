
</div>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min" crossorigin="anonymous"></script>
<style>
	#footer{
		width:100%;
	    /* position:absolute; */
		bottom:0;
	}
</style>
<!-- Footer -->
<footer class="w3-container w3-padding-16" style="background-color:#0086b3" id="footer">
  <center><p class="me-text-white">Powered by <a href="#" target="_blank">ILLUMINATI SE#7</a> <br>
  Contact information: cluster.se7@gmail.com</center>
</footer>


 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 