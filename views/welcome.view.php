
		<?php if (isset($_SESSION['choice']) && $_SESSION['choice'] == 'dark') { ?>

		<div class="contentContainerAll">

				<h1>A Darker Outlook</h1>
				<p>You have chosen to side with the dark for your traditional mood, thoughts, and activities. Darkness is not constrained to good and evil, it is just a different way of looking at the world.
					Often this means siding with more relaxing activities with more mellow thoughts. You may enjoy quiet over the hustle and bustle of daily life, or you may enjoy solitude over being in a crowded room.
					This is what it looks like to side with the dark. </p> <br />

			<div class = "contentContainer clearfix">
				<h2>Sample Activities:</h2>
				<div class="containerRight width35">
					<img class = "imgMain" src="img/camping.png" alt="Camping" height="250em" width="335em">
					<!-- image source: http://www.photosforclass.com/search?text=camping+night -->
				</div>

				<div class="containerLeft width65">
				<p> Enjoying the darkness can be relaxing. It can mean: </p>

				 	<ul>
				 		<li>Taking a night stroll</li>
				 		<li>Going stargazing</li>
				 		<li>Tent camping on a clear night</li>
					</ul>

				</div>
			</div>
			<div class = "contentContainer clearfix"><br/>
				<h2>Next Step: Test Your Choice!</h2>
				<div class="containerLeft width35">
					<img class = "imgMain" src="img/stargazing.png" alt="stargazing" height="250em" width="335em">
					<!-- image source: http://www.photosforclass.com/search?text=camping+night -->
				</div>
				<div class="containerRight width65">
					<p>See how well your initial decision beween light and dark matches up to our survey by clicking on the <a href='index.php?page=survey'>survey</a> link.</p><br/>
					<ul>
						<li>Survey questions will touch on your own preferred activities</li>
						<li>Choices will touch on your mood, how is your outlook on life?</li>
					</ul>
				</div>
			</div><br/>
			<p>Remember to answer honestly and compare your results to others who have visited this site after submission.</p>
			<br/><br/>
			<br/>
		</div>
		<br/>
		<form id = 'resetChoice' method='post'>
			<strong>Changed your mind on light vs dark?</strong>
			<input type='submit' class='buttonSubmit' id="unsetChoiceSession" name='unsetChoiceSession' value='Reset Choice'>
		</form>
		<br/>
	</body>

	<?php } elseif(isset($_SESSION['choice']) && $_SESSION['choice'] == 'light') { ?>

		<div class="contentContainerAll ">

				<h1>A Brighter Outlook</h1>
				<p>You have chosen to side with the light for your mood, thoughts, and activities. Light is not constrained to being good and evil, it is just a different way of looking at, and reacting to the world.
					Often this means choosing more active activities while having a more outgoing, positive attitude. The more enjoyment that can fit into a day, the better. Going biking, hanging out with friends, or meeting new people
					are all enjoyable activities when choosing the light.</p>

			<div class = "contentContainer clearfix">
				<h2>Sample Activities:</h2>
				<div class="containerRight width35">
					<img class = "imgMain" src="img/swimming.jpg" alt="swimming" height="250em" width="335em">
					<!-- By ESO/M. Alexander (http://www.eso.org/public/images/potw1404a/) [CC BY 4.0 (http://creativecommons.org/licenses/by/4.0)], via Wikimedia Commons -->
				</div>

				<div class="containerLeft width65">
				<p> Enjoying the light can be entertaining and fulfilling. It can mean: </p>
					<br/>
					<ul>
						<li>Taking an afternoon run</li>
						<li>Walking around the county fair with friends</li>
						<li>Going swimming at the pool</li>
					</ul>

				</div>
			</div>

			<div class = "contentContainer clearfix"><br/>
				<h2>Next Step: Test Your Choice!</h2>
				<div class="containerLeft width35">
					<img class = "imgMain" src="img/biking.jpg" alt="biking" height="250em" width="335em">
				</div>

				<div class="containerRight width65">
					<p>See how well your initial decision beween light and dark matches up to our survey by clicking on the <a href='index.php?page=survey'>survey</a> link.</p><br/>
					<ul>
						<li>Survey questions will touch on your own preferred activities</li>
						<li>Choices will touch on your mood, how is your outlook on life?</li>
					</ul>
				</div>
			</div>
      <br/>
			<p>Remember to answer honestly and compare your results to others who have
				 visited this site after submission.</p>
			
		</div>
		<br/>
		<form id = 'resetChoice' method='post'>
			<strong>Changed your mind on light vs dark?</strong>
			<input type='submit' class='buttonSubmit' id="unsetChoiceSession" name='unsetChoiceSession' value='Reset Choice'>
		</form>
		<br/>
	</body>

	<?php } else { ?>
		<div class="contentContainerAll">

				<h1>Choose Your Side</h1>
				<p>When choosing sides  between dark and light, do not think of them as good and evil, but as a different way of preferring to live life.
					Think of how the there are differences between light and dark. What types of moods, activities, social situations, and energy levels
					exist between the two? What can you do on the beach at night compared to the beach during the day? What is your preference, etc </p>
				<p> After choosing a side, you will see a few more basic examples on the context of light and dark
					and you will be able to take a survey to compare your thoughts to other's thoughts in our brief survey. </p>
					<br />

			<div class = "contentContainer clearfix">

				<form method='post'>
					<div class="containerRight width50">
						<input type='submit' class='buttonSubmit submitDark' name='dark' id='darkButton' value = 'Dark Side'>
					</div>

					<div class="containerLeft width50 right">
						<input type='submit' class='buttonSubmit submitLight' name='light' id='lightButton' value = 'Light Side'>
					</div>
				</form>
			</div>
		</div>
	</body>

	<?php }
