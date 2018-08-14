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
				'quote' => 'Frankly, my dear, I don\'t give a damn..',
				'by' => 'Rhett Butler',
				'movie' => 'Gone with the Wind',
				'year' => '1939',
			),
			array(
				'quote' => 'I\'m gonna make him an offer he can\'t refuse.',
				'by' => 'Vito Corleone',
				'movie' => 'The Godfather',
				'year' => '1972',
			),
			array(
				'quote' => 'You don\'t understand! I coulda had class. I coulda been a contender. I could\'ve been somebody, instead of a bum, which is what I am.',
				'by' => 'Terry Malloy',
				'movie' => 'On the Waterfront',
				'year' => '1954',
			),
			array(
				'quote' => 'Toto, I\'ve a feeling we\'re not in Kansas anymore.',
				'by' => 'Dorothy Gale',
				'movie' => 'The Wizard of Oz',
				'year' => '1939',
			),
			array(
				'quote' => 'May the Force be with you.',
				'by' => 'Han Solo',
				'movie' => 'Star Wars',
				'year' => '1977',
			),
			array(
				'quote' => 'I\'ll be back.',
				'by' => 'The Terminator',
				'movie' => 'The Terminator',
				'year' => '1984',
			),
			array(
				'quote' => 'Go ahead, make my day.',
				'by' => 'Harry Callahan',
				'movie' => 'Sudden Impact',
				'year' => '1983',
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
		$x = is_rtl() ? 'left' : 'right';

		echo "
			<style type='text/css'>
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
