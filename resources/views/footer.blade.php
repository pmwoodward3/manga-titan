<!-- <div class="ui vertical footer">
	<div class="ui center aligned container">
		<div class="ui inverted section divider"></div>
		<div class="ui stackable inverted grid">
			<div class="sixteen wide column">
				<h4 class="ui gray header">Manga Titan</h4>
				<p>
					About me in my computer. This website created for manage manga in my computer.
				</p>
			</div>
		</div>
		<img src="{{ asset('logo.png') }}" class="ui centered tiny image" alt="">
	</div>
</div> -->
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
		padding: 60px 0;
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
	.footer .ui.list .item a .icon {
		color: #647183;
	}
	.footer .copyright {
		font-family: "Roboto",sans-serif;
		font-size: 15px;
		color: #647183;
	}
</style>