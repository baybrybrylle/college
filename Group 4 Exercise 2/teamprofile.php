<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Team Profile </title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="background" style="background-image: url('<?php echo $background['bacgroundimage']; ?>');">
</div>


	<div class="container">

		<?php

		$team_members = [
			[
				"name" => "Brylle Chavez",
				"year" => "3rd Year College Pamantasang Lungsod ng Muntinlupa",
				"image" => "images/brylle-pic.jpg",
				"facebook" => "https://www.facebook.com/baybrybrylle",
				"github" => "https://github.com/baybrybrylle",
				"linkedin" => "https://www.linkedin.com/in/brylle-chavez-684a69103/"
			],
			[
				"name" => "Adrian Carlo Zarate",
				"year" => "3rd Year College - Pamantasang Lungsod ng Muntinlupa",
				"image" => "images/adrian-pic.jpg",
				"facebook" => "https://www.facebook.com/AidSaynoZarate",
				"github" => "https://github.com/Adriyanyan",
				"linkedin" => "https://www.linkedin.com/in/adrian-zarate-92148b322/"
			],
			[
				"name" => "Hershey Nicole Balasico",
				"year" => "3rd Year College - Pamantasang Lungsod ng Muntinlupa",
				"image" => "images/hershey-pic.jpg",
				"facebook" => "https://www.facebook.com/hersheeeeyyyy",
				"github" => "https://github.com/Hersheeey",
				"linkedin" => "https://www.linkedin.com/in/hershey-nicole-balasico-3706a3322/"
			],
			[
				"name" => "Mikaela Agus",
				"year" => "3rd Year College - Pamantasang Lungsod ng Muntinlupa",
				"image" => "images/mika-pic.jpg",
				"facebook" => "https://www.facebook.com/mikaela.agus",
				"github" => "https://github.com/mikaelaagus",
				"linkedin" => "https://www.linkedin.com/in/mikaela-agus-8b8b10322"
			],
			[
				"name" => "Michaela Delos Santos",
				"year" => "3rd Year College - Pamantasang Lungsod ng Muntinlupa",
				"image" => "images/micha-pic.jpg",
				"facebook" => "https://www.facebook.com/profile.php?id=100009020776604",
				"github" => "https://github.com/Micamica02",
				"linkedin" => "http://www.linkedin.com/in/michaela-rae-delos-santos-67551329b"
			]
		];


		foreach ($team_members as $member) {
			echo "
			<section>
				<div class='profile-box'>
					<img src='{$member['image']}' class='profile-pic'>
					<h3>{$member['name']}</h3>
					<p><i>{$member['year']}</i></p>
					<div class='social-media'>
						<a href='{$member['facebook']}' target='_blank'>
							<img src='images/facebook.png' alt='facebook link'>
						</a>
						<a href='{$member['github']}' target='_blank'>
							<img src='images/github.png' alt='github link'>
						</a>
						<a href='{$member['linkedin']}' target='_blank'>
							<img src='images/linkedin.png' alt='linkedin link'>
						</a>
					</div>
				</div>
			</section>";
		}
		?>

	</div>

	<script src="script.js"></script>

</body>
</html>
