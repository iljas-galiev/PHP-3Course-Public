<?php
require 'vendor/autoload.php';
$postparam = json_encode(["answer"=>42]);
$curl = curl_init("https://reqbin.com/echo/post/json");
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-type:application/json","Content-length:".strlen($postparam)]);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postparam);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$content = curl_exec($curl);
$curlres = curl_getinfo($curl);
curl_close($curl);
$data = json_decode($content);

?>

<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Curl Demo</title>
</head>
<body>
<div><?php var_dump($content);  ?></div>
<div><?php var_dump($data);  ?></div>
<div><?php var_dump($curlres);  ?></div>
<table>
    <thead>
    <tr>
        <td colspan="2">Curl Demo</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $key => $item): ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $item ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
<?php
/*
* wttr.in/Kazan ???
* httpbin.org/ip
* wtfismyip.com/json
* numbersapi.com
*/