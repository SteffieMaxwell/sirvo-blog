<footer class="row" role="contentinfo">
	<div class="col-md-6">
			<img class="footer-img" src="<?php echo theme_url('/img/logowhite.svg'); ?>"/ a href="http://gosirvo.com">
			<p>&copy; Sirvo 2014</p>
	</div>
	<div class="col-md-2">
	<ul class="list-unstyled footer-list">
		<h4>About</h4>
		<li><a href="http://blog.gosirvo.com">Blog<a></li>
		<li><a href="http://gosirvo.com/about">Company<a></li>
		<li><a href="http://angel.co/sirvo">Investors<a></li>
	</ul>
	<div class="col-md-2">
	<ul class="list-unstyled footer-list">
		<h4>Support</h4>
		<li><a href="mailto:hello@gosirvo.com">Contact<a></li>
		<li><a href="http://sirvo.zendesk.com/hc/en-us">Knowledgebase<a></li>
		<li><a href="http://gosirvo.com/privacy-policy">Privacy Policy<a></li>
	</ul>
	<div class="col-md-2">
	<ul class="list-unstyled footer-list">
		<h4>Social</h4>
		<li><a href="http://twitter.com/gosirvo">Twitter<a></li>
		<li><a href="http://facebook.com/gosirvo">Facebook<a></li>
		<li><a href="https://plus.google.com/101459098184102308374/posts">Google+<a></li>
	</ul>
</center>
</footer>

<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
$(document).ready( function(){
	$("#subscribe-button").click(function(){
		var email = $( "#email" ).val();
		if( !IsEmail(email) ){
			alert('Please enter a valid email');
			return;
		}
		$("#subscribe-container").html('<h3 style="color:white;">Subscribing, please wait.</h3>')
		var request = $.ajax({
		url: "subscribe.php",
		type: "POST",
		data: { email : email },
		dataType: "json"
		});

		request.done(function( msg ) {
			if( msg.result == 'success'){
				$("#subscribe-container").html('<h2 style="color:white;">Thanks for subscribing!</h2>');
			}else{
				$("#subscribe-container").html('<h2 style="color:white;">You have already subscribed.</h2>');				
			}
		});

		request.fail(function( jqXHR, textStatus ) {
			console.log('Oh snap.');
		});
	});
});
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>
</body>
</html>