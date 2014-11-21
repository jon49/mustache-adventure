<?php

class Controller extends AppController {
	protected function init() {

	}
}
$controller = new Controller();

extract($controller->view->vars);

?>

<div class="primary-content">
	<main>

		<div class="user">
			<div class="profile-info">
				<img src="/images/profile-brad.jpg" >
				<h3>Brad Flahive</h3>
				<p>Mustache Level: Pirate</p>
			</div>
			<div class="man-points">
				<p>MY MAN-POINTS: <span class="points">*18 Points*</span></p>
			</div>
		</div>

	</main>
	<aside>

		<div class="post">
			<!-- <input type="text" name="new_post" placeholder="Compose new comment..."> -->
			<textarea name="new_post" id="reptile" placeholder="Compose new post..."></textarea>
			<button>Post</button>			
		</div>
		<!-- <form class="compose">
			<input type="text" name="foo">
			<textarea name="new_post" id="reptile" placeholder="Compose new post...">eferfrf</textarea>
			<button>Post</button>
		</form> -->
				
		<div class="post">
			<img src="/images/profile-brad.jpg">
			<div class="body">
				<div class="user_name">Brad Flahive</div>
				<div class="message">Mustache finally reached 4 inches!</div>
				<div class="display-points">7</div>
			</div>
		</div>

		<div class="post">
			<img src="/images/nathan.jpg">
			<div class="body">
				<div class="user_name">Nathan Atkinson</div>
				<div class="message">Just rode a horse bareback...</div>
				<form action=""></form>
					<select name="" id="">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<!-- <button>Add</button> -->
				</form>
				<div class="display-points">6</div>
			</div>
		</div>

		<div class="post">
			<img src="/images/jon.jpg">
			<div class="body">
				<div class="user_name">Jon Nyman</div>
				<div class="message">Just bought a cowboy hat</div>
				<form action=""></form>
					<select name="" id="">
						<option value="0">0</option>
						<option value="1" selected>1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<!-- <button>Add</button> -->
				</form>
				<div class="display-points">9</div>
			</div>
		</div>

		<div class="post">
			<img src="/images/mark.jpg">
			<div class="body">
				<div class="user_name">Mark Ragno</div>
				<div class="message">High-Five'd Burt Reynolds today</div>
				<form action=""></form>
					<select name="" id="">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected>5</option>
					</select>
					<!-- <button>Add</button> -->
				</form>
				<div class="display-points">42</div>
			</div>
		</div>

		<div class="post">
			<img src="/images/profile-brad.jpg">
			<div class="body">
				<div class="user_name">Brad Flahive</div>
				<div class="message">Ate 2 NY strips last night</div>
				<div class="display-points">11</div>
			</div>
		</div>

	</aside>
</div>
<p class="copyright">&copy Mustache-Adventures Co.</p>
