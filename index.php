<?php
declare(encoding = 'UTF-8'); 
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Schlechte Pornotitel</title>
<style type="text/css">
body { vertical-align: middle; height: 100%; text-align: center; font-size: 20pt; }
h1 { font-size:48pt; }
h2 { font-size:38pt; }
</style>
</head>
<body>
Der schlechte Titel deines nächsten Pornos lautet:
<h1>
<?php

$data1 = file_get_contents("prefix.txt");
$data1 = explode("\n", $data1);
$data2 = file_get_contents("subject.txt");
$data2 = explode("\n", $data2);
$data3 = file_get_contents("predikat.txt");
$data3 = explode("\n", $data3);
$data4 = file_get_contents("predikat2.txt");
$data4 = explode("\n", $data4);

echo $data1[array_rand($data1)] . " ";
echo $data2[array_rand($data2)] . " ";
echo $data3[array_rand($data3)] . " ";
echo $data4[array_rand($data4)] . " - Teil ";
echo rand(1,30);

?>
</h1>
- aus der Serie -
<h2>
<?php
echo $data1[array_rand($data1)] . " ";
echo $data2[array_rand($data2)];
?>
</h2>
</body>
</html>