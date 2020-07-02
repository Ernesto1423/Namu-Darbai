<?php
$ceu = array( 'Italija'=>'Roma', 'Liuksemburgas'=>'Liuksemburgas', 'Belgija'=> 'Briuselis', 'Danija'=>'Kopenhaga', 'Suomija'=>'Helsinkis', 'Prancūzija' => 'Paryžius', 'Slovakija'=>'Bratislava', 'Slovenija'=>'Liublijana', 'Vokietija' => 'Berlynas', 'Graikija' => 'Atėnai', 'Airija'=>'Dublinas', 'Nyderlandai'=>'Amsterdamas', 'Portugalija'=>'Lisabona', 'Ispanija'=>'Madridas', 'Švedija'=>'Stokholmas', 'Didžioji Britanija'=>'Londonas', 'Kipras'=>'Nikosija', 'Lietuva'=>'Vilnius', 'Čekija'=>'Praha', 'Estija'=>'Talinas', 'Vengrija'=>'Budapeštas', 'Latvija'=>'Ryga', 'Malta'=>'Valeta', 'Austrija' => 'Viena', 'Bulgarija' => 'Sofija', 'Rumunija' => 'Bukareštas', 'Lenkija'=>'Varšuva' ) ;

foreach ( range( 1, count( $ceu ), 2 ) as $key ) {
	unset( $ceu[$key] );
}
$array = array_merge( $ceu );
var_dump( $ceu );

$ceu1 = [
	'Italija' => 'Roma',
	'Liuksemburgas' => 'Liuksemburgas',
	'Belgija' => 'Briuselis',
	'Danija' => 'Kopenhaga',
	'Suomija' => 'Helsinkis',
	'Prancūzija' => 'Paryžius',
	'Slovakija' => 'Bratislava',
	'Slovenija' => 'Liublijana',
	'Vokietija' => 'Berlynas',
	'Graikija' => 'Atėnai',
	'Airija' => 'Dublinas',
	'Nyderlandai' => 'Amsterdamas',
	'Portugalija' => 'Lisabona',
	'Ispanija' => 'Madridas',
	'Švedija' => 'Stokholmas',
	'Didžioji Britanija' => 'Londonas',
	'Kipras' => 'Nikosija',
	'Lietuva' => 'Vilnius',
	'Čekija' => 'Praha',
	'Estija' => 'Talinas',
	'Vengrija' => 'Budapeštas',
	'Latvija' => 'Ryga',
	'Malta' => 'Valeta',
	'Austrija' => 'Viena',
	'Bulgarija' => 'Sofija',
	'Rumunija' => 'Bukareštas',
	'Lenkija' => 'Varšuva'
] ;

?>