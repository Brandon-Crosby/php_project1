// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

<?php

$quotes = array(

[
    'quote' =>  "Don't be sad it's over, be happy it happened "  ,
    'author' => ' - Dr. Seuss'  ,
    //'source' =>   ,
    'tags'=>  'Inspirational'     ,
],
[
      'quote' =>  'Be yourself, everyone is already taken'  ,
      'author' =>  ' - Oscar Wilde' ,
      //'source' =>   ,
      'tags'=>   'Inspirational'    ,
],
[
      'quote' =>  'Be the change that you wish to see in the world'  ,
      'author' =>  ' - Gandhi' ,
      //'source' =>   ,
      'tags'=>      'Inspirational' ,
],
[
      'quote' =>  'It is never to late to be what you might have been'  ,
      'author' => ' - George Eliot'  ,
      //'source' =>   ,
      'tags'=>      'Inspirational' ,
],
[
      'quote' =>   'Everything you can imagine is real' ,
      'author' =>   'Pablo Escobar',
      //'source' =>   ,
      'tags'=>     'Inspirational'  ,
],
[
      'quote' =>   'Talk is cheap. Show me the code' ,
      'author' =>   'Linus Torvalds',
      //'source' =>   ,
      'tags'=>     'Inspirational'  ,
],
);
// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($array) {

$quote = $array[rand (0,5)];
//all functions need to have a return

return $quote;

};



//var_dump (getRandomQuote($quotes));

//var_dump ($quote);




// Create the printQuote funtion and name it printQuote

function printQuote(){
global $quotes;





//};











?>
