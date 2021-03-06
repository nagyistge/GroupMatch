<!-- 
    account/create.php
    
    This webpage php script depicts the page that was linked from the user's homepage to create new polls.
    In this page, the user can specify different options for this poll, including the options users will have
    to choose from, as well as other details like specific option group limit.
-->

<?php
    $createPage = $GLOBALS["registry"]->utils->makeLink("Account", "create");
?>
<section>
	<header>
		<div>
			<h1>Title / Question</h1>
			<p>What do you want to ask everyone?</p>
		</div>
		<a class="nav_link inline_colorbox" href="#confirm_submit"><button form="create_poll" type="submit" class="green">Create</button></a>
		<input form="create_poll" name="title" type="text" placeholder="Tile or Question" required="required"/>
		<div style="display:none">
			<div id="confirm_submit">
				<div>
					Are you sure all the information is correct?
				</div>
				<button class="red">Edit</button>
				<button form="create_poll" type="submit" class="green">Create</button>
			</div>
		</div>
	</header>
	 <?php
			if (count($this->Errors) > 0) {
		?>
			<section class="form_error">
				<ul>
				<?php
					 foreach($this->Errors as $error) {
						 ?>
							  <li><?php echo $error; ?></li>
						 <?php
					 }
				?>
				</ul>
			</section>
    <?php   
        }
    ?>
	<form action="<?php echo $createPage; ?>" method="post" name="create_poll" class="indent" id="create_poll">
		<section>
			<h1>Description</h1>
			<p>Is there any additional information that people need to answer this poll accurately?</p>
			<footer>
				<textarea name="description" rows="3" cols="50" maxlength="300" placeholder="Type a description here"></textarea>
			</footer>
		</section>
		<section>
			<!--
                Specify overall how many people can use the poll before it is closed,
                based on the amount of answers you give them.
            -->
			<h1>Universal Participant Limit</h1>
			<p>Is there a maximum amount of people that you want to place with <b>each</b> of the answers of a poll?</p>
			<footer>
				<input name="option_all_limit" type="checkbox" /> Participant limit per answer <input name="option_all_limit_amount" type="number" placeholder="10" min="1" disabled="disabled">
			</footer>
		</section>
		<section>
			<!--Specify how users of the poll will give his or her answers to your options.-->
			<h1>Answer type</h1>
			<p>How do you want people to answer the poll?</p>
			<footer>
				<div><input name="answer_type" type="radio" value="unique" required="required"/><div>Uniquely rate each option (Each option has a rating, but no ratings may be duplicated.)</div></div>
				<div><input name="answer_type" type="radio" value="scale" required="required"/><div>Rate on scale between 1 and 5</div></div>
			</footer>
		</section>
		<section>
			<!-- The options that the user will create will be displayed here.-->
			<h1>Options / Unique Participant Limit</h1>
			<p>
				What are the possible answers to this poll?  Do you want to create a maximum amount of people that can be fit
				with this answer (This will overwrite the 'Universal Participant Limit'.)?  If so, how many?
			</p>
			<p>All blank answers will be ignored.</p>
			<footer>
				<ul id="option_list">
					<li>
						<input name="option_1" type="text" placeholder="Option" required="required"/>
						<input name="option_limit_1" type="checkbox" />
						<input name="option_limit_amount_1" type="number" placeholder="10" min="1" disabled="disabled" />
					</li>
					<li>
						<input name="option_2" type="text" placeholder="Option" required="required"/>
						<input name="option_limit_2" type="checkbox" />
						<input name="option_limit_amount_2" type="number" placeholder="10" min="1" disabled="disabled" />
					</li>
					<li>
						<input name="option_3" type="text" placeholder="Option"/>
						<input name="option_limit_3" type="checkbox" />
						<input name="option_limit_amount_3" type="number" placeholder="10" min="1" disabled="disabled" />
					</li>
					<li>
						<input name="option_4" type="text" placeholder="Option"/>
						<input name="option_limit_4" type="checkbox" />
						<input name="option_limit_amount_4" type="number" placeholder="10" min="1" disabled="disabled" />
					</li>
					<li>
						<input name="option_5" type="text" placeholder="Option"/>
						<input name="option_limit_5" type="checkbox" />
						<input name="option_limit_amount_5" type="number" placeholder="10" min="1" disabled="disabled" />
					</li>
				</ul>
				<button name="add_more_options" class="green">Add Answers</button><!--This button allows the user to add additional options to the poll-->
			</footer>
		</section>
	</form>
</section>