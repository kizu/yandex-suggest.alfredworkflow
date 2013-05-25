<?php

$json = $wf->request( "http://suggest.yandex.ru/suggest-ya.cgi?v=4&fact=1&callback=&part=".urlencode( $orig ) );
$json = json_decode( $json );
$int = 1;

foreach( $json[1] as $sugg ):
    $extra = '';
    $site = '';
	if (is_array($sugg)) {
		if ($sugg[0] != "") {
			$data = $sugg[1];
			$extra = $sugg[2];
			if ($sugg[0] == 'nav') {
				$data = '//'.$sugg[3];
				$site = 'Перейти к http:';
			}
		} else {
			$data = $sugg[1];
		}
	} else {
		$data = $sugg;
	}
	$wf->result( $int.'.'.time(), "$data", "$site$data", "$extra", 'icon.png'  );

	$int++;
endforeach;

$wf->result( $int.'.'.time(), "$orig", "$orig", "Исходный запрос без подсказок", 'icon.png'  );
$int++;


$results = $wf->results();
if ( count( $results ) == 0 ):
	$wf->result( 'yandexsuggest', $orig, 'No Suggestions', 'No search suggestions found. Search Yandex for '.$orig, 'icon.png' );
endif;

echo $wf->toxml();

