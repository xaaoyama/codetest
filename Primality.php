<?php

echo "2\n";

for ($i=3; $i <= 100; $i++) {
	$x = true;
	for ($j=2; $j < $i; $j++) {
		if ($i % $j == 0) {
			$x = false;
		}
	}
	if ($x == true) {
		echo $i ,"\n";
	}
}
/*

どうしても初めの2だけ表示できませんでしたので、echoにて表示させていただきました。

*/
?>