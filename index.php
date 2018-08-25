<?php

	/**
	* Plugin Name: Hello: Movie Quotes
	*	Plugin URI: https://github.com/stepheschaubes/wp-hello-moviequotes
	*	Description: Just some movie quotes for admins. Nothing more, nothing less.
	*	Version: 0.0.1
	*	Author: Stephan S.
	*	Author URI: http://stepheschaubes.com/
	*	License: GPL3
	*/

	defined( 'ABSPATH' ) or die( 'nope.' );

	add_action( 'admin_notices', 'hello_text' );
	add_action( 'admin_head', 'hello_css' );


	function hello_get_text() {

		$array = array(
			array(
				"quote" => "Frankly, my dear, I don't give a damn..",
				"by" => "Rhett Butler",
				"movie" => "Gone with the Wind",
				"year" => "1939",
			),
			array(
				"quote" => "I'm gonna make him an offer he can't refuse.",
				"by" => "Vito Corleone",
				"movie" => "The Godfather",
				"year" => "1972",
			),
			array(
				"quote" => "You don't understand! I coulda had class. I coulda been a contender. I could've been somebody, instead of a bum, which is what I am.",
				"by" => "Terry Malloy",
				"movie" => "On the Waterfront",
				"year" => "1954",
			),
			array(
				"quote" => "Toto, I've a feeling we're not in Kansas anymore.",
				"by" => "Dorothy Gale",
				"movie" => "The Wizard of Oz",
				"year" => "1939",
			),
			array(
				"quote" => "Here's looking at you, kid.",
				"by" => "Rick Blaine",
				"movie" => "Casablanca",
				"year" => "1942",
			),
			array(
				"quote" => "Go ahead, make my day.",
				"by" => "Harry Callahan",
				"movie" => "Sudden Impact",
				"year" => "1983",
			),
			array(
				"quote" => "All right, Mr. DeMille, I'm ready for my close-up.",
				"by" => "Norma Desmond",
				"movie" => "Sunset Boulevard",
				"year" => "1950",
			),
			array(
				"quote" => "May the Force be with you.",
				"by" => "Han Solo",
				"movie" => "Star Wars",
				"year" => "1977",
			),
			array(
				"quote" => "Fasten your seatbelts. It's going to be a bumpy night.",
				"by" => "Margo Channing",
				"movie" => "All About Eve",
				"year" => "1950",
			),
			array(
				"quote" => "You talkin' to me?",
				"by" => "Travis Bickle",
				"movie" => "Taxi Driver",
				"year" => "1976",
			),
			array(
				"quote" => "What we've got here is failure to communicate.",
				"by" => "Captain",
				"movie" => "Cool Hand Luke",
				"year" => "1967",
			),
			array(
				"quote" => "I love the smell of napalm in the morning.",
				"by" => "Lt. Col. Bill Kilgore",
				"movie" => "Apocalypse Now",
				"year" => "1979",
			),
			array(
				"quote" => "Love means never having to say you're sorry.",
				"by" => "Oliver Barrett IV",
				"movie" => "Love Story",
				"year" => "1970",
			),
			array(
				"quote" => "The stuff that dreams are made of.",
				"by" => "Sam Spade",
				"movie" => "The Maltese Falcon",
				"year" => "1941",
			),
			array(
				"quote" => "E.T. phone home.",
				"by" => "E.T.",
				"movie" => "E.T. the Extra-Terrestrial",
				"year" => "1982",
			),
			array(
				"quote" => "They call me Mister Tibbs!",
				"by" => "Virgil Tibbs",
				"movie" => "In the Heat of the Night",
				"year" => "1967",
			),
			array(
				"quote" => "Rosebud.",
				"by" => "Charles Foster Kane",
				"movie" => "Citizen Kane",
				"year" => "1941",
			),
			array(
				"quote" => "Made it, Ma! Top of the world!",
				"by" => "Arthur \"Cody\" Jarrett",
				"movie" => "White Heat",
				"year" => "1949",
			),
			array(
				"quote" => "I'm as mad as hell, and I'm not going to take this anymore!",
				"by" => "Howard Beale",
				"movie" => "Network",
				"year" => "1976",
			),
			array(
				"quote" => "Louis, I think this is the beginning of a beautiful friendship.",
				"by" => "Rick Blaine",
				"movie" => "Casablanca",
				"year" => "1942",
			),
			array(
				"quote" => "A census taker once tried to test me. I ate his liver with some fava beans and a nice Chianti.",
				"by" => "Dr. Hannibal Lecter",
				"movie" => "The Silence of the Lambs",
				"year" => "1991",
			),
			array(
				"quote" => "Bond. James Bond.",
				"by" => "James Bond",
				"movie" => "Dr. No",
				"year" => "1962",
			),
			array(
				"quote" => "There's no place like home.",
				"by" => "Dorothy Gale",
				"movie" => "The Wizard of Oz",
				"year" => "1939",
			),
			array(
				"quote" => "I am big! It's the pictures that got small.",
				"by" => "Norma Desmond",
				"movie" => "Sunset Boulevard",
				"year" => "1950",
			),
			array(
				"quote" => "Show me the money!",
				"by" => "Rod Tidwell",
				"movie" => "Jerry Maguire",
				"year" => "1996",
			),
			array(
				"quote" => "Why don't you come up sometime and see me?",
				"by" => "Lady Lou",
				"movie" => "She Done Him Wrong",
				"year" => "1933",
			),
			array(
				"quote" => "I'm walking here! I'm walking here!",
				"by" => "\"Ratso\" Rizzo",
				"movie" => "Midnight Cowboy",
				"year" => "1969",
			),
			array(
				"quote" => "Play it, Sam. Play 'As Time Goes By.'",
				"by" => "Ilsa Lund",
				"movie" => "Casablanca",
				"year" => "1942",
			),
			array(
				"quote" => "You can't handle the truth!",
				"by" => "Col. Nathan R. Jessup",
				"movie" => "A Few Good Men",
				"year" => "1992",
			),
			array(
				"quote" => "I want to be alone.",
				"by" => "Grusinskaya",
				"movie" => "Grand Hotel",
				"year" => "1932",
			),
			array(
				"quote" => "After all, tomorrow is another day!",
				"by" => "Scarlett O'Hara",
				"movie" => "Gone with the Wind",
				"year" => "1939",
			),
			array(
				"quote" => "Round up the usual suspects.",
				"by" => "Capt. Louis Renault",
				"movie" => "Casablanca",
				"year" => "1942",
			),
			array(
				"quote" => "I'll have what she's having.",
				"by" => "Customer",
				"movie" => "When Harry Met Sally...",
				"year" => "1989",
			),
			array(
				"quote" => "You know how to whistle, don't you, Steve? You just put your lips together and blow.",
				"by" => "Marie \"Slim\" Browning",
				"movie" => "To Have and Have Not",
				"year" => "1944",
			),
			array(
				"quote" => "You're gonna need a bigger boat.",
				"by" => "Martin Brody",
				"movie" => "Jaws",
				"year" => "1975",
			),
			array(
				"quote" => "Badges? We ain't got no badges! We don't need no badges! I don't have to show you any stinking badges!",
				"by" => "\"Gold Hat\"",
				"movie" => "The Treasure of the Sierra Madre",
				"year" => "1948",
			),
			array(
				"quote" => "I'll be back.",
				"by" => "The Terminator",
				"movie" => "The Terminator",
				"year" => "1984",
			),
			array(
				"quote" => "Today, I consider myself the luckiest man on the face of the Earth.",
				"by" => "Lou Gehrig",
				"movie" => "The Pride of the Yankees",
				"year" => "1942",
			),
			array(
				"quote" => "If you build it, he will come.",
				"by" => "Shoeless Joe Jackson",
				"movie" => "Field of Dreams",
				"year" => "1989",
			),
			array(
				"quote" => "Mama always said life was like a box of chocolates. You never know what you're gonna get.",
				"by" => "Forrest Gump",
				"movie" => "Forrest Gump",
				"year" => "1994",
			),
			array(
				"quote" => "We rob banks.",
				"by" => "Clyde Barrow",
				"movie" => "Bonnie and Clyde",
				"year" => "1967",
			),
			array(
				"quote" => "Plastics.",
				"by" => "Mr. Maguire",
				"movie" => "The Graduate",
				"year" => "1967",
			),
			array(
				"quote" => "We'll always have Paris.",
				"by" => "Rick Blaine",
				"movie" => "Casablanca",
				"year" => "1942",
			),
			array(
				"quote" => "I see dead people.",
				"by" => "Cole Sear",
				"movie" => "The Sixth Sense",
				"year" => "1999",
			),
			array(
				"quote" => "Stella! Hey, Stella!",
				"by" => "Stanley Kowalski",
				"movie" => "A Streetcar Named Desire",
				"year" => "1951",
			),
			array(
				"quote" => "Oh, Jerry, don't let's ask for the moon. We have the stars.",
				"by" => "Charlotte Vale",
				"movie" => "Now, Voyager",
				"year" => "1942",
			),
			array(
				"quote" => "Shane. Shane. Come back!",
				"by" => "Joey Starrett",
				"movie" => "Shane",
				"year" => "1953",
			),
			array(
				"quote" => "Well, nobody's perfect.",
				"by" => "Osgood Fielding III",
				"movie" => "Some Like It Hot",
				"year" => "1959",
			),
			array(
				"quote" => "It's alive! It's alive!",
				"by" => "Henry Frankenstein",
				"movie" => "Frankenstein",
				"year" => "1931",
			),
			array(
				"quote" => "Houston, we have a problem.",
				"by" => "Jim Lovell",
				"movie" => "Apollo 13",
				"year" => "1995",
			),
			array(
				"quote" => "You've got to ask yourself one question: 'Do I feel lucky?' Well, do ya, punk?",
				"by" => "Harry Callahan",
				"movie" => "Dirty Harry",
				"year" => "1971",
			),
			array(
				"quote" => "You had me at 'hello.'",
				"by" => "Dorothy Boyd",
				"movie" => "Jerry Maguire",
				"year" => "1996",
			),
			array(
				"quote" => "One morning I shot an elephant in my pajamas. How he got in my pajamas, I don't know.",
				"by" => "Capt. Geoffrey T. Spaulding",
				"movie" => "Animal Crackers",
				"year" => "1930",
			),
			array(
				"quote" => "There's no crying in baseball!",
				"by" => "Jimmy Dugan",
				"movie" => "A League of Their Own",
				"year" => "1992",
			),
			array(
				"quote" => "La-dee-da, la-dee-da.",
				"by" => "Annie Hall",
				"movie" => "Annie Hall",
				"year" => "1977",
			),
			array(
				"quote" => "A boy's best friend is his mother.",
				"by" => "Norman Bates",
				"movie" => "Psycho",
				"year" => "1960",
			),
			array(
				"quote" => "Greed, for lack of a better word, is good.",
				"by" => "Gordon Gekko",
				"movie" => "Wall Street",
				"year" => "1987",
			),
			array(
				"quote" => "Keep your friends close, but your enemies closer.",
				"by" => "Michael Corleone",
				"movie" => "The Godfather Part II",
				"year" => "1974",
			),
			array(
				"quote" => "As God is my witness, I'll never be hungry again.",
				"by" => "Scarlett O'Hara",
				"movie" => "Gone with the Wind",
				"year" => "1939",
			),
			array(
				"quote" => "Well, here's another nice mess you've gotten me into!",
				"by" => "Oliver",
				"movie" => "Sons of the Desert",
				"year" => "1933",
			),
			array(
				"quote" => "Say 'hello' to my little friend!",
				"by" => "Tony Montana",
				"movie" => "Scarface",
				"year" => "1983",
			),
			array(
				"quote" => "What a dump.",
				"by" => "Rosa Moline",
				"movie" => "Beyond the Forest ",
				"year" => "1949",
			),
			array(
				"quote" => "Mrs. Robinson, you're trying to seduce me. Aren't you?",
				"by" => "Benjamin Braddock",
				"movie" => "The Graduate",
				"year" => "1967",
			),
			array(
				"quote" => "Gentlemen, you can't fight in here! This is the War Room!",
				"by" => "President Merkin Muffley",
				"movie" => "Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb",
				"year" => "1964",
			),
			array(
				"quote" => "Elementary, my dear Watson.",
				"by" => "Sherlock Holmes",
				"movie" => "The Adventures of Sherlock Holmes",
				"year" => "1939",
			),
			array(
				"quote" => "Get your stinking paws off me, you damned dirty ape.",
				"by" => "George Taylor",
				"movie" => "Planet of the Apes",
				"year" => "1968",
			),
			array(
				"quote" => "Of all the gin joints in all the towns in all the world, she walks into mine.",
				"by" => "Rick Blaine",
				"movie" => "Casablanca",
				"year" => "1942",
			),
			array(
				"quote" => "Here's Johnny!",
				"by" => "Jack Torrance",
				"movie" => "The Shining",
				"year" => "1980",
			),
			array(
				"quote" => "They're here!",
				"by" => "Carol Anne Freeling",
				"movie" => "Poltergeist",
				"year" => "1982",
			),
			array(
				"quote" => "Is it safe?",
				"by" => "Dr. Christian Szell",
				"movie" => "Marathon Man",
				"year" => "1976",
			),
			array(
				"quote" => "Wait a minute, wait a minute. You ain't heard nothin' yet!",
				"by" => "Jakie Rabinowitz/Jack Robin",
				"movie" => "The Jazz Singer",
				"year" => "1927",
			),
			array(
				"quote" => "No wire hangers, ever!",
				"by" => "Joan Crawford",
				"movie" => "Mommie Dearest",
				"year" => "1981",
			),
			array(
				"quote" => "Mother of mercy, is this the end of Rico?",
				"by" => "Cesare Enrico \"Rico\" Bandello",
				"movie" => "Little Caesar",
				"year" => "1931",
			),
			array(
				"quote" => "Forget it, Jake, it's Chinatown.",
				"by" => "Lawrence Walsh",
				"movie" => "Chinatown",
				"year" => "1974",
			),
			array(
				"quote" => "I have always depended on the kindness of strangers.",
				"by" => "Blanche DuBois",
				"movie" => "A Streetcar Named Desire",
				"year" => "1951",
			),
			array(
				"quote" => "Hasta la vista, baby.",
				"by" => "The Terminator",
				"movie" => "Terminator 2: Judgment Day",
				"year" => "1991",
			),
			array(
				"quote" => "Soylent Green is people!",
				"by" => "Det. Robert Thorn",
				"movie" => "Soylent Green",
				"year" => "1973",
			),
			array(
				"quote" => "Open the pod bay doors, HAL.",
				"by" => "Dave Bowman",
				"movie" => "2001: A Space Odyssey",
				"year" => "1968",
			),
			array(
				"quote" => "Striker: \"Surely you can't be serious.\" - Rumack: \"I am serious … and don't call me Shirley.\"",
				"by" => "Ted Striker and Dr. Rumack ",
				"movie" => "Airplane!",
				"year" => "1980",
			),
			array(
				"quote" => "Yo, Adrian!",
				"by" => "Rocky Balboa",
				"movie" => "Rocky",
				"year" => "1976",
			),
			array(
				"quote" => "Hello, gorgeous.",
				"by" => "Fanny Brice",
				"movie" => "Funny Girl",
				"year" => "1968",
			),
			array(
				"quote" => "Toga! Toga!",
				"by" => "John \"Bluto\" Blutarsky ",
				"movie" => "National Lampoon's Animal House",
				"year" => "1978",
			),
			array(
				"quote" => "Listen to them. Children of the night. What music they make.",
				"by" => "Count Dracula",
				"movie" => "Dracula",
				"year" => "1931",
			),
			array(
				"quote" => "Oh, no, it wasn't the airplanes. It was Beauty killed the Beast.",
				"by" => "Carl Denham",
				"movie" => "King Kong",
				"year" => "1933",
			),
			array(
				"quote" => "My precious.",
				"by" => "Gollum",
				"movie" => "The Lord of the Rings: The Two Towers",
				"year" => "2002",
			),
			array(
				"quote" => "Attica! Attica!",
				"by" => "Sonny Wortzik",
				"movie" => "Dog Day Afternoon",
				"year" => "1975",
			),
			array(
				"quote" => "Sawyer, you're going out a youngster, but you've got to come back a star!",
				"by" => "Julian Marsh",
				"movie" => "42nd Street",
				"year" => "1933",
			),
			array(
				"quote" => "Listen to me, mister. You're my knight in shining armor. Don't you forget it. You're going to get back on that horse, and I'm going to be right behind you, holding on tight, and away we're gonna go, go, go!",
				"by" => "Ethel Thayer",
				"movie" => "On Golden Pond",
				"year" => "1981",
			),
			array(
				"quote" => "Tell 'em to go out there with all they got and win just one for the Gipper.",
				"by" => "Knute Rockne",
				"movie" => "Knute Rockne, All American",
				"year" => "1940",
			),
			array(
				"quote" => "A martini. Shaken, not stirred.",
				"by" => "James Bond",
				"movie" => "Goldfinger",
				"year" => "1964",
			),
			array(
				"quote" => "Who's on first?",
				"by" => "Dexter",
				"movie" => "The Naughty Nineties",
				"year" => "1945",
			),
			array(
				"quote" => "Cinderella story. Outta nowhere. A former greenskeeper, now, about to become the Masters champion. It looks like a mirac...It's in the hole! It's in the hole! It's in the hole!",
				"by" => "Carl Spackler",
				"movie" => "Caddyshack",
				"year" => "1980",
			),
			array(
				"quote" => "Life is a banquet, and most poor suckers are starving to death!",
				"by" => "Mame Dennis",
				"movie" => "Auntie Mame",
				"year" => "1958",
			),
			array(
				"quote" => "I feel the need—the need for speed!",
				"by" => "Lt. Pete \"Maverick\" Mitchell and Lt.jg Nick \"Goose\" Bradshaw",
				"movie" => "Top Gun",
				"year" => "1986",
			),
			array(
				"quote" => "Carpe diem. Seize the day, boys. Make your lives extraordinary.",
				"by" => "John Keating",
				"movie" => "Dead Poets Society",
				"year" => "1989",
			),
			array(
				"quote" => "Snap out of it!",
				"by" => "Loretta Castorini",
				"movie" => "Moonstruck",
				"year" => "1987",
			),
			array(
				"quote" => "My mother thanks you. My father thanks you. My sister thanks you. And I thank you.",
				"by" => "George M. Cohan",
				"movie" => "Yankee Doodle Dandy",
				"year" => "1942",
			),
			array(
				"quote" => "Nobody puts Baby in a corner.",
				"by" => "Johnny Castle",
				"movie" => "Dirty Dancing",
				"year" => "1987",
			),
			array(
				"quote" => "I'll get you, my pretty, and your little dog too!",
				"by" => "Wicked Witch of the West",
				"movie" => "The Wizard of Oz",
				"year" => "1939",
			),
			array(
				"quote" => "I'm the King of the World!",
				"by" => "Jack Dawson",
				"movie" => "Titanic",
				"year" => "1997",
			),
		);


		$rand = mt_rand( 0, count( $array ) - 1 );
		$text = "<p id=\"hello-text\">\"" . $array[$rand]['quote'] . "\"</p><span id=\"hello-tooltip\">" . $array[$rand]['by'] . " in <i>" . $array[$rand]['movie'] . " (" . $array[$rand]['year'] . ")</i></span>";
		return wptexturize( $text );
	}


	function hello_text() {
		$chosen = hello_get_text();
		echo "<div id=\"hello-mq\">$chosen</div>";
	}




	function hello_css() {
		$x = is_rtl() ? "left" : "right";

		echo "
			<style type=\"text/css\">
				#hello-mq {
					width: 20%;
					height: auto;
					margin: 0;
					text-align: $x;
					position: relative;
					display: inline-block;
					overflow: visible;
					float: $x;
					visibility: hidden;
				}
				#hello-mq #hello-text {
					max-height: 28px;
					margin: 0;
					margin-$x: 12px;
					padding-top: 7px;
					font-size: 11px;
					line-height: 14px;
					text-overflow: ellipsis;
					white-space: nowrap;
					overflow: hidden;
					/*float: $x;*/
				}
				#hello-mq #hello-tooltip {
					width: auto;
					max-width: 200%;
					margin: 3px 0 0 0;
					padding: 2px 7px 3px 7px;
					background: rgba(0, 0, 0, 0.7);
					border-radius: 2px;
					color: rgba(255, 255, 255, 0.9);
					font-size: 11px;
					line-height: 14px;

					user-select: none;
					-moz-user-select: none;
					-khtml-user-select: none;
					-webkit-user-select: none;
					-o-user-select: none;
					visibility: hidden;

					position: absolute;
					z-index: 9999;
					top: 100%;
					$x: 5px; // 12 - padding-right
				}
				#hello-mq #hello-text:hover + #hello-tooltip {
					visibility: visible;
				}
				@media only screen and (min-width: 784px) {
					#hello-mq {
						visibility: visible;
					}
				}
			</style>
		";
	}

?>
