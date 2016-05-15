<footer class="ui vertical footer">
	<img class="footer-logo" src="{{ asset('logo.png') }}" alt="Logo">
	<div class="ui horizontal link list">
		<div class="item"><a href="#" target="_blank"><i class="icon large twitter"></i></a></div>
		<div class="item"><a href="#" target="_blank"><i class="icon large dribbble"></i></a></div>
		<div class="item"><a href="#" target="_blank"><i class="icon large facebook"></i></a></div>
		<div class="item"><a href="#" target="_blank"><i class="icon large suitcase"></i></a></div>
	</div>
	<p class="copyright">Copyright @ mangatitan.</p>
</footer>

<style>
	.footer {
		text-align: center;
		background: #343b44;
		padding: 55px 0;
	}
	.footer .footer-logo {
		height:17px;
		margin-bottom: 30px;
		vertical-align: middle;
	}
	.footer .ui.list {
		width:100%;
		margin-bottom: 20px;
	}
	.footer .ui.list .item {
		margin-left: 0.5em;
	}
	.footer .ui.list .item a .icon {
		color: #647183;
	}
	.footer .copyright {
		font-size: 15px;
		color: #647183;
	}
</style>