<?php

// Home page
Route::get('/', function() {
	return View::make('index');				
});

Route::get('/lipsum/{number}', function($number) {

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($number);
	echo implode('<p>', $paragraphs);
});

Route::get('/newuser/{newusers}', function($users) {

 	$faker = Faker\Factory::create();
 
	for( $x=0 ; $x<$users ; $x++ ) {
		printf( "%s <%s> from %s\n",
  		$faker->name,
  		$faker->email,
  		$faker->city );
  		echo '<br />';
	}
});