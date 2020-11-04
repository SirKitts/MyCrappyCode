<?php
/*
* Task A: Create a function that will generate a random hand of 5 standard playing cards.
* Example: array(‘2c’, ‘6d’, ‘as’, ‘jh’, ’10c’);
*
* Author: Jose Quitain
*/
function taskA() {
  // initialize variables
  $suits = array( "clover", "diamond", "spade", "heart" );
  $jqk = array( "jack", "queen", "king" );
  $numcards = 13;
  $cards = array();

  // initialize cards
  for ( $s = 0; $s < count($suits); $s++ ) {
    for ( $num = 1; $num <= $numcards; $num++ ) {
      $suit = substr($suits[$s], 0 ,1);
      if ( $num > 10 ) {
        $card = substr($jqk[$num - 11], 0, 1);
      } else {
        $card = ($num === 1) ? 'a' : $num;
      }
      array_push( $cards, $card.$suit );
    }
  }

  // shuffle cards
  $shuffled_cards = array_rand( $cards, 5 );
  list($one, $two, $three, $four, $five) = $shuffled_cards;

  // hand of $cards
  // sample result: array (4s, 8s, ks, 2h, 5h )
  return array(
    $cards[$one], $cards[$two], $cards[$three], $cards[$four], $cards[$five]
  );
}

$hands_of_cards = taskA();
echo '<p>'.'Hands of Cards: ';
for ( $hoc = 0; $hoc <= count($hands_of_cards); $hoc++ ) { echo $hands_of_cards[$hoc].' '; };
?>

<?php
/*
* Task B: Create a function that will return a boolean result as to whether the hand of cards
*         returned by the above function contains a ‘straight’ or ‘straight flush’.
*
* Author: Jose Quitain
*/
function isStraight( $suits, $cards ) {
  sort($cards);
  // foreach($cards as $card) { echo $card."<br>"; }
  if ($cards[4] === 14) { // straight using ace
    $low = ($cards[0] === '2' && $cards[1] === '3' && $cards[2] === '4' && $cards[3] === '5');
    $high = ($cards[0] === '10' && $cards[1] === 11 && $cards[2] === 12 && $cards[3] === 13);
    return ( $low || $high );
  } else { // other Straight
    $temp = $cards[0] + 1;
    for ( $i = 1; $i < 5; $i++ ) {
        if ( $cards[$i] !== strval($temp)) {
          return(false); // not straight
        }
        $temp++; // next card
     }
     return true; // yohhoo! it's straight
  }
  return false;
}

function isStraightOrStraightFlush( $suits, $cards ) {
  $straight = isStraight( $suits, $cards );
  // echo count(array_unique( $suits ));
  return ($straight || ($straight && count(array_unique( $suits ))));
}

function taskB( $cards ) {
  $suits_array = array();
  $cards_array = array();
  $jqk_array = array( "j", "q", "k", "a" );
  foreach($cards as $card) {
     $card_number = substr( $card, 0, -1 );
     if ( in_array($card_number, $jqk_array) ) {
       $card_number = array_search($card_number, $jqk_array) + 11;
     }
     array_push( $cards_array, $card_number );
     array_push( $suits_array, substr( $card, -1) );
  }
  return isStraightOrStraightFlush( $suits_array, $cards_array ) ? true : false;
}
// End here.
 
/*
* testing Only
*/
function testActual() {
  echo '<p/>'.'Is it a Straight or Straigh Flash? ';
  echo (taskB( $hands_of_cards ) ? 'Yes' : 'No');
}

function testNonStraight() {
  $hand = array( '10c', 'jd', 'as', '5h', '6c');
  echo '<p/>'.'Is it a Straight? ';
  print_r($hand);
  echo (taskB( $hand ) ? 'Yes' : 'No');
}

function testStraight() {
  $hand = array( '2c', '4d', '5s', '3h', '6c');
  echo '<p/>'.'Is it a Straight? ';
  print_r($hand);
  echo (taskB( $hand ) ? 'Yes' : 'No');
}

function testStraightAce() {
  $hand = array( 'ac', '2d', '3s', '4h', '5c');
  echo '<p/>'.'Is it a Straight Ace? ';
  print_r($hand);
  echo (taskB( $hand ) ? 'Yes' : 'No');
}

function testStraightFlushAce() {
  $hand = array( 'qc', 'ac', 'jc', 'kc', '10c');
  echo '<p/>'.'Is it a Straight Flush? ';
  print_r($hand);
  echo (taskB( $hand ) ? 'Yes' : 'No');
}

testActual();
echo '<hr/>For Testing Only ';
testNonStraight();
testStraight();
testStraightAce();
testStraightFlushAce();
?>
