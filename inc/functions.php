// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

<?php

$quotes = array(

[
    'quote' =>  "Don't be sad it's over, be happy it happened "  ,
    'source' => ' - Dr. Seuss'  ,
    'year' =>   ,
    'tags'=>  'Inspirational'     ,
],
[
      'quote' =>  'Be yourself, everyone is already taken'  ,
      'source' =>  ' - Oscar Wilde' ,
      'year' =>   ,
      'tags'=>   'Inspirational'    ,
],
[
      'quote' =>  'Be the change that you wish to see in the world'  ,
      'source' =>  ' - Gandhi' ,
      'year' =>   ,
      'tags'=>      'Inspirational' ,
],
[
      'quote' =>  'It is never to late to be what you might have been'  ,
      'source' => ' - George Eliot'  ,
      'year' =>   ,
      'tags'=>      'Inspirational' ,
],
[
      'quote' =>   'Everything you can imagine is real' ,
      'source' =>   'Pablo Escobar',
      'year' =>   ,
      'tags'=>     'Inspirational'  ,
],
[
      'quote' =>   'Talk is cheap. Show me the code' ,
      'source' =>   'Linus Torvalds',
      'year' =>   ,
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

function printQuote($array){
global $quotes;
$This_quote = getRandomQuote($quotes);

year$HTML_quote = " ";
$HTML_quote .= <p class="quote"> . $This_quote["quote"] . "</p>";
$HTML_quote .= <p class="quote"> .

if $This_quote['year']{
  $HTML_quote.= <span class='year'> . $This_quote["year"] . "</span>"
}
if $This_quote['tags']{
  $HTML_quote.= <span class='tags'> . $This_quote["tags"] . "</span>"
}

$This_quote["author"] .= "</p>"
echo $HTML_quote;
};






//background color











source
