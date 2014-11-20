<?php 


class CommentViewFragment extends ViewFragment {

//CHANGED FROM post to comment (class)  TODO change CSS appropriately
	//still need to implement the changes in profile.php

	//This template takes input from the controller and plugs it into the template below.
	//After the values are passed, they're rendered (returns a string)
	private $template = '<div class="comment" data-comment-id="{{comment_id}}">
							<img src="/images/profile-brad.jpg">
							<div class="body">
								<div class="user_name">{{user_name}}</div>
								<div class="message">{{message}}</div>
								<form action="">
									<select name="" id="">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									<button>Add-NEEDED?</button>
								</form>
								<div class="display-points">{{SUM(points)}}</div>
							</div>
						</div>';

	//from the controller, put in values into this array by key/value pairs
	//be sure to use the same names used in the template above						
	private $values = [];


	public function __set($property_name, $value) {
		$this->values[$property_name] = $value;

	}

	//This returns a string.  For this to work, will have to have passed key/value pairs.
	public function render() {
		return parent::fill($this->values, $this->template);
	}
}




?>



















