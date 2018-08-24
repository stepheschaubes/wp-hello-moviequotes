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
				"quote" => "quote",
				"by" => "name",
				"movie" => "movie",
				"year" => "year",
			),
			array(
				"quote" => "quote",
				"by" => "name",
				"movie" => "movie",
				"year" => "year",
			),
			array(
				"quote" => "quote",
				"by" => "name",
				"movie" => "movie",
				"year" => "year",
			),
			array(
				"quote" => "quote",
				"by" => "name",
				"movie" => "movie",
				"year" => "year",
			),
			array(
				"quote" => "quote",
				"by" => "name",
				"movie" => "movie",
				"year" => "year",
			),
			array(
				"quote" => "quote",
				"by" => "name",
				"movie" => "movie",
				"year" => "year",
			),
			array(
				"quote" => "quote",
				"by" => "name",
				"movie" => "movie",
				"year" => "year",
			),
			array(
				"quote" => "I'll be back.",
				"by" => "The Terminator",
				"movie" => "The Terminator",
				"year" => "1984",
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
