<!--
	Poll/participate.php
	
	This php webpage will pop up when the user navigates to it from a specific poll. 
	This page allows a user to interact with the poll by entering their preferences.
 -->
<?php
    $content = $this->registry->config->siteUrl.$this->getThemeLocation()."Images/";
?>
<div id="page_container">
	<div id="page_content">
		<section>
			<header>
				<h1>Poll title here</h1>
			</header>
			<section class="form_error">
				This is an error message
			</section>
			<form name="participate_form" class="indent">
				<section>
					<h1>Description</h1>
					<footer>
						Poll description here
					</footer>
				</section>
				<section>
					<h1>Directions go here</h1>
					<footer>
						<ul>
							<li>
								<header>
									<div>(Yes / No) example</div>
								</header>
								<input name="answer_1" type="radio" value="1" required="required" /> Yes <input name="answer_1" type="radio" value="-1"/> No 
							</li>
							<li>
								<header>
									<div>(Yes / Neutral / No) example</div>
								</header>
								<input name="answer_2" type="radio" value="1" required="required"/> Yes / <input name="answer_2" type="radio" value="0"/> Neutral / <input name="answer_2" type="radio" value="-1"/> No
							</li>
							<li>
								<header>
									<div>(Uniquely rate each) example</div>
								</header>
								<!-- max would be the polls number of options -->
								<input name="answer_3" type="number" min="1" max="4" required="required" />
							</li>
							<li>
								<header>
									<div>(Rate on scale) example</div>
								</header>
								<!-- max would be the polls scale value -->
								<input name="answer_3" type="number" min="1" max="5" required="required" />
							</li>
						</ul>
					</footer>
				</section>
				<a href="<?php echo $registry->config->siteUrl; ?>/poll/index"><button class="green">submit</button></a>
			</form>
		</section>
	</div>
	<footer>
		
	</footer>
</div>