<?php 

// create random string
// Randomizer::getBytesFromString(string $string, int $length): string
$str = Randomizer::getBytesFromString( string: '0123456789', length: 10 );
$str = Randomizer::getBytesFromString( string: 'abcdefghijklmnopqrstuvwxyz0123456789', length: 10 );
$str = Randomizer::getBytesFromString( string: 'abcdefghijklmnopqrstuvwxyz', length: 10 );
// custom shorthand
function random_str( string $string = 'abcdefghijklmnopqrstuvwxyz0123456789', int $length = 10 ): string {
  return Randomizer::getBytesFromString( $string, $length );
}
//
$str = random_str( string: '0123456789', length: 10 );
$str = random_str( string: 'abcdefghijklmnopqrstuvwxyz0123456789', length: 10 );
$str = random_str( string: 'abcdefghijklmnopqrstuvwxyz', length: 10 );
$str = random_str( '0123456789', 10 );
$str = random_str( 'abcdefghijklmnopqrstuvwxyz0123456789', 10 );
$str = random_str( 'abcdefghijklmnopqrstuvwxyz', 10 );
$str = random_str( length: 10 );
$str = random_str();

?>