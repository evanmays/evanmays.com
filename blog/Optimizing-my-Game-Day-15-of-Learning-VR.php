<?php
$title = "I'm Learning VR Day 15: Optimizing my Game";
$description = "Today is day 15 of my challenge to learn virtual reality development in 21 days. I'm two-thirds done! My game was running slow, so I optimized it today.";
$ogType = "article";
$img = "https://evanmays.com/assets/img/optimization-header-img.png";
$url = "https://evanmays.com/blog/Optimizing-my-Game-Day-15-of-Learning-VR";
$blog = true;

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; ?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<?php headline($title, 3, "Jan 19th, 2018"); ?>
		        		<img class="large-blog-img" src="//evanmays.com/assets/img/optimization-header-img.png" />
		                <p>
		                	Today is day 15 of my challenge to learn virtual reality development in 21 days. I'm two-thirds done! My game was running slow, so I optimized it today.
		                </p>
		                <p>
		                	My game looks choppy because it has a low frames per second (FPS) rate.
		                </p>
		                <h2>
		                	What are Frames per Second?
		                </h2>
		                <p>
		                	Videos are just a bunch of images with slight variation in movement; all played in quick succession. 30 FPS means that 30 images are being played every second. The higher the FPS, the more smooth a video will look. Usually, anything below 24 FPS seems choppy.
		                </p>
		                <p>
		                	Our eyes can see up to 1000 FPS. High-end virtual reality systems aim for 90 FPS. Film and TV are in the range of 30 FPS. My game runs at 15 FPS. So, it looks choppy. I turned on stats mode to see if I could find any issues. Here’s an image of the stats:
		                </p>
		                <img class="medium-blog-img" src="//evanmays.com/assets/img/White-Void-a-frame-stats-before-optimizing.png" />
		                <p>
		                	You can see there’s a lot of red around the frames per second (FPS) and Faces. I’m not sure what most of the stats are aside from FPS. But, according to the A-Frame website, I want the FPS number to go up and every other number to go down.
		                </p>
		                <h2>
		                	A Crash Course in Optimizing A-Frame for Graphics
		                </h2>
		                <p>
		                	The first step is to fix how I’m loading in images of the characters. Currently, the game loads each character’s image from the hard drive in every frame. So, I'm loading the pictures more than 15 times each second. I can change that, so the game loads the character images once when the game starts.
		                </p>
		                <p>
		                	I also learned that A-Frame likes the images to be sized correctly. The width and height of my character images have to be in powers of two. So the width can be 2, or 4, or 8, or 16, or 32, etc. And the same thing for the height. When it isn’t in powers of two, A-Frame has to resize the images, which can decrease performance.
		                </p>
		                <p>
		                	The real magic came when I realized that the a-sky element was killing my face count. a-sky was my original method of creating the white background of the game. I found a better technique though. I just created a white box that surrounds the player. It's easier for the game to build a small white box than an enormous sky.  So, my number of faces went from 4,000 to 200. That’s a significant improvement.
		                </p>
		                <p>
		                	Now I just need to fix the FPS which hasn't budged. To my surprise, the frame rate jumped to 60 FPS when I opened the game on my iPhone instead of my laptop. I thought this was because the phone was only running the game, while the computer had lots of programs open at once.
		                </p>
		                <p>
		                	It turns out that the framerate gets bad when the screen is too big. I tried shrinking my browser on my computer, and the frame rate quickly improved. So, it just takes more processing power for a larger screen.
		                </p>
		                <p>
		                	So, I finished optimizing. I could optimize more, but the game’s graphics are good enough for now.
		                </p>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	      		<?php include "../assets/phpfunctions/blogfooter.php"; ?>
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>