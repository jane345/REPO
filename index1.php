<?php
print "Your IP address is ".$_SERVER['SERVER_ADDR'];


$image = 'https://s3-us-west-2.amazonaws.com/finaljane/dog.jpg';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>