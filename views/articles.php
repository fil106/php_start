	<?= require_once('header.php'); ?>
	<!-- CONTENT -->
	<div id="content">
		<div class="tail-middle1">
			<div class="row-1">
				<div class="indent1">
					<h3>Articles</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
					<p class="p0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam. </p>
				</div>
			</div>
		</div>
		<div class="tail-middle2">
			<div class="row-2">
				<div class="indent3">
					<div class="container">
						<div class="col-1">
							<h3>Latest News</h3>
							<ul class="news">
								<li><a href="#">May 21, 2010</a><p>Lorem ipsum dolor sit amet, con- sectetur adipisicing elit, sed do eiusmod tempor.</p></li>
								<li><a href="#">May 21, 2010</a><p>Ut enim ad minim veniam, quis<br />nostrud exercitation ullamco laboris nisiut aliquip.</p></li>
							</ul>
							<h3>Login Form</h3>
							<form action="" id="login-form">
								<fieldset>
									<div class="field"><label>Username:</label><input type="text" /></div>
									<div class="field"><label>Password:</label><input type="password" /></div>
									<div class="field1"><a href="#" onclick="document.getElementById('login-form').submit()"><em><b>Log In</b></em></a><label>Remember Me</label>&nbsp;<input type="checkbox" /></div>
									<ul>
										<li><a href="#">Forgot your password?</a></li>
										<li><a href="#">Register</a></li>
									</ul>
								</fieldset>
							</form>
						</div>
						<div class="col-2">
							<h3>Recent Articles</h3>
							<div class="indent2">
								<ul class="list">
									<li><img src="/template/images/3page-img1.jpg" alt="" /><p><a href="article.html">Article 1</a><br />Description is to be here. Since we have no idea what your article is about, we just put standart "Lorem Ipsum" text here. Lorem Ipsum is simply dummy text of the printing.</p></li>
								</ul>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row-3">
			<div class="indent">
				<div class="wrapper">
					<div class="col-1">
						<h4>Link to us</h4>
						<ul>
							<li class="twitter"><a href="#">Twitter</a></li>
							<li class="delicious"><a href="#">Delicious</a></li>
							<li class="stumbleupon"><a href="#">Stumbleupon</a></li>
							<li class="facebook"><a href="#">Facebook</a></li>
						</ul>
					</div>
					<div class="col-2">
						<h4>Home</h4>
						<ul>
							<li><a href="#">Today’s News</a></li>
							<li><a href="#">Newsletter</a></li>
							<li><a href="#">Blogs</a></li>
							<li><a href="#">RSS Feeds</a></li>
						</ul>
					</div>
					<div class="col-3">
						<h4>Room Inspiration</h4>
						<ul>
							<li><a href="#">Kitchen</a></li>
							<li><a href="#">Bathroom</a></li>
							<li><a href="#">Living</a></li>
							<li><a href="#">Bedroom</a></li>
						</ul>
					</div>
					<div class="col-4">
						<h4>Expert Advice</h4>
						<ul>
							<li><a href="#">Style Ideas</a></li>
							<li><a href="#">Buyers’ Guide</a></li>
							<li><a href="#">Most FAQ’s</a></li>
							<li><a href="#">Planning Tips</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?= require_once('footer.php'); ?>