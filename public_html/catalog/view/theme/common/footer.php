<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				Copyright © 2021 All rights reserved.
			</div>
		</div>
	</div>
</footer>
<script>
	$(function(){
	    $(window).scroll(function(){
	        if($(this).scrollTop() > 10){
	            $('.logo_header').css('width','60px');
	            $('.logo_header').css('top','21px');
	        }
	        else{
	            $('.logo_header').css('width','150px');
	            $('.logo_header').css('top','20px');
	        }
	    });
	});
</script>
</body>

</html>