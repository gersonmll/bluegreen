<?php
$deployment = getenv("COLOR");

$deployment = getenv("COLOR");
if ( $deployment == 'blue') {
  $color = 'black';
} elseif ($deployment == 'green')  {
  $color = 'green';
} else {
  $color = 'black';
}




$data = [ 'color' => $deployment ];
echo json_encode( $data );
http_response_code(200);
?>
