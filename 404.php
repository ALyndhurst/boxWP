<div class="error-container">
	<div class="error">
		<h3>Oh dear... You've reached a 404!</h3>
		<img src="<?php bloginfo('template_url')?>/assets/images/login-logo.png" alt="">
		<button onclick="goBack()">BACK</button>
	</div>
</div>

<style>

	@import url('https://fonts.googleapis.com/css?family=Baloo+Bhaina');

	body{
		margin:  0;
	}

	.error-container{
		display: table;
		text-align: center;
		width: 100%;
		min-height: 100%;
	}
	.error-container .error{
		display: table-cell;
		vertical-align: middle;
		text-transform: uppercase;
		font-family: 'Baloo Bhaina', cursive;
	}
	.h3, button, img{
		display: block;
		margin:  30px auto;
	}
	button{
		padding: 12px 25px;
		background: #3F9CFF;
		color: #fff;
		border: none;
		font-size: 12px;
		outline: none;
		width: 100%;
	}
	button:hover{
		cursor: pointer;
	}
</style>

<script>
function goBack() {
    window.history.back();
}
</script>