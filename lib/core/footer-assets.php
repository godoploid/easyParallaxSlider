<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="js/easyParralaxSlider.1.2.min.js"></script>
<script src="js/jquery.maskedinput-1.3.min.js"></script>

<script>

$('.slide').easyParralaxSlider({
	ditStyle : 'image',
	ditImage : 'img/dits.png'	  
});

$('#contactBtn').on('click', function( e ) {
	e.preventDefault();
	$('form').submit();
	console.log('clicked');
});

$('input[name="phone"]').mask("999-999-9999");
</script>



<!-- scripts concatenated and minified via ant build script-->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts-->

<?php unset($_SESSION['msg']); ?>