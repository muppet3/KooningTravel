@extends('layouts/structure')

@section('content')

<style type="text/css">

.search-body{ position: relative; background: #FFF; }	

</style>

<div class="search-body" >

	<div class="scroll-navbar scroll-navbar-open mh">
		<ul class="nav nav-tabs" role="tablist">
			<li class="actt"><a class="scroll-nav" href="javascript:void(0);"><span style="font-size:16px; line-height:47px; " class="mir">RECOMENDADOS</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Acapulco?type=1&d=1&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="aca mir col">Acapulco</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Cancun?type=1&d=2&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="can mir col">Canc&uacute;n</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Mexico?type=1&d=11&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="cdmx mir col">CDMX</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Guadalajara?type=1&d=15&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="guad mir col">Guadalajara</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Guanajuato?type=1&d=47&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="guan mir col">Guanajuato</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Holbox?type=1&d=14&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="holb mir col">Holbox</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Huatulco?type=1&d=5&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="huat mir col">Huatulco</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Isla-Mujeres?type=1&d=6&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="isla mir col">Isla Mujeres</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Loreto?type=1&d=71&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="lore mir col">Loreto BC</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Los-Cabos?type=1&d=8&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="lcab mir col">Los Cabos</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Mazatlan?type=1&d=9&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="maza mir col">Mazatl&aacute;n</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Merida?type=1&d=10&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="meri mir col">M&eacute;rida</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Monterrey?type=1&d=32&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="mont mir col">Monterrey</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Morelia--Michoacan?type=1&d=51&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="more mir col">Morelia</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Oaxaca?type=1&d=17&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="oaxa mir col">Oaxaca</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Playa-del-Carmen?type=1&d=16&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="play mir col">Playa del Carmen</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Puebla?type=1&d=39&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="pueb mir col">Puebla</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Puerto-Vallarta?type=1&d=12&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="puer mir col">Puerto Vallarta</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Queretaro?type=1&d=40&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="quer mir col">Quer&eacute;taro</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Riviera-Nayarit?type=1&d=112&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="rina mir col">Riviera Nayarit</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/San-Miguel-de-Allende?type=1&d=69&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="sanm mir col">San Miguel Allende</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Taxco?type=1&d=41&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="taxc mir col">Taxco</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Valle-de-Bravo?type=1&d=113&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="valle mir col">Valle Bravo</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Veracruz?type=1&d=31&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="vera mir col">Veracruz</span></a></li>
			<li class=""><a class="scroll-nav" href="https://kooningtravel.com/hotels/search/Riviera-Maya?type=1&d=13&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0"><span class="rima mir col">Riviera Maya</span></a></li>		
		</ul>
	</div>

<div class="white-content force-white-content mh clear" id="explora-destinos">
<h3 class="text">Explora Destinos</h3>

<div class="ve-destinos-list">

	<a class="ve-destc ir ve-b5 acapulco" href="https://kooningtravel.com/hotels/search/Acapulco?type=1&d=1&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Acapulco">Acapulco</a>
	<a class="ve-destc ir ve-b1 cancun" href="https://kooningtravel.com/hotels/search/Cancun?type=1&d=2&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Cancun">Cancun</a>
	<a class="ve-destc ir ve-b2 cdmx" href="https://kooningtravel.com/hotels/search/Mexico?type=1&d=11&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="CDMX">CDMX</a>
	<a class="ve-destc ir ve-b3 guadalajara" href="https://kooningtravel.com/hotels/search/Guadalajara?type=1&d=15&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Guadalajara">Guadalajara</a>
	<a class="ve-destc ir ve-b3 guanajuato" href="https://kooningtravel.com/hotels/search/Guanajuato?type=1&d=47&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Guanajuato">Guanajuato</a>
	<a class="ve-destc ir ve-b4 holbox active" href="https://kooningtravel.com/hotels/search/Holbox?type=1&d=14&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Holbox">Holbox</a>
	<a class="ve-destc ir ve-b4 huatulco" href="https://kooningtravel.com/hotels/search/Huatulco?type=1&d=5&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Huatulco">Huatulco</a>
	<a class="ve-destc ir ve-b7 isla" href="https://kooningtravel.com/hotels/search/Isla-Mujeres?type=1&d=6&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Isla Mujeres">Isla Mujeres</a>
	<a class="ve-destc ir ve-b1 loreto" href="https://kooningtravel.com/hotels/search/Loreto?type=1&d=71&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Loreto BC">Loreto BC</a>
	
	<a class="ve-destc ir ve-b7 lcabos" href="https://kooningtravel.com/hotels/search/Los-Cabos?type=1&d=8&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Los Cabos">Los Cabos</a>
	
	<a class="ve-destc ir ve-b1 mazatlan" href="https://kooningtravel.com/hotels/search/Mazatlan?type=1&d=9&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Mazatlan">Mazatlan</a>
	<a class="ve-destc ir ve-b3 merida" href="https://kooningtravel.com/hotels/search/Merida?type=1&d=10&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Merida">Merida</a>
	<a class="ve-destc ir ve-b5 monterrey" href="https://kooningtravel.com/hotels/search/Monterrey?type=1&d=32&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Monterrey">Monterrey</a>
	<a class="ve-destc ir ve-b1 morelia" href="https://kooningtravel.com/hotels/search/Morelia--Michoacan?type=1&d=51&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Morelia">Morelia</a>
	<a class="ve-destc ir ve-b2 oaxaca" href="https://kooningtravel.com/hotels/search/Oaxaca?type=1&d=17&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Oaxaca">Oaxaca</a>
	<a class="ve-destc ir ve-b3 pcarmen" href="https://kooningtravel.com/hotels/search/Playa-del-Carmen?type=1&d=16&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Playa del Carmen">Playa del Carmen</a>
	<a class="ve-destc ir ve-b3 puebla" href="https://kooningtravel.com/hotels/search/Puebla?type=1&d=39&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Puebla">Puebla</a>
	<a class="ve-destc ir ve-b4 pvallarta active" href="https://kooningtravel.com/hotels/search/Puerto-Vallarta?type=1&d=12&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Puerto Vallarta">Puerto Vallarta</a>
	<a class="ve-destc ir ve-b4 queretaro" href="https://kooningtravel.com/hotels/search/Queretaro?type=1&d=40&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Queretaro">Queretaro</a>
	<a class="ve-destc ir ve-b1 rnayarit" href="https://kooningtravel.com/hotels/search/Riviera-Nayarit?type=1&d=112&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Riviera Nayarit">Riviera Nayarit</a>
	<a class="ve-destc ir ve-b7 smiguel" href="https://kooningtravel.com/hotels/search/San-Miguel-de-Allende?type=1&d=69&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="San Miguel Allende">San Miguel Allende</a>
	<a class="ve-destc ir ve-b1 taxco" href="https://kooningtravel.com/hotels/search/Taxco?type=1&d=41&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Taxco">Taxco</a>
	<a class="ve-destc ir ve-b3 vbravo" href="https://kooningtravel.com/hotels/search/Valle-de-Bravo?type=1&d=113&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Valle Bravo">Valle Bravo</a>
	<a class="ve-destc ir ve-b5 veracruz" href="https://kooningtravel.com/hotels/search/Veracruz?type=1&d=31&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Veracruz">Veracruz</a>
	<a class="ve-destc ir ve-b6 rmaya" href="https://kooningtravel.com/hotels/search/Riviera-Maya?type=1&d=13&sd=2018-03-19&ed=2018-03-23&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0" data-title="Riviera Maya">Riviera Maya</a>

</div>


<span class="win" ></span>


</div>


<section class="help clear">
	<div class="item email">
		<a href="mailto:reservaciones@kooningtravel.com"><h3 class="h3">Email</h3><p>Resolveremos las dudas que puedas<br>tener con tu reserva</p><span class="link">reservaciones@kooningtravel.com</span></a>
	</div>
	<div class="item telefono">
		<a href="tel:018008908974?call"><h3 class="h3">Teléfono</h3><p>¿Necesitas ayuda para reservar?<br>¿Alguna duda rápida?</p><span class="link">(01) 800 890 8974</span></a>
	</div>
	<div class="item agencias">
		<div class="co" ><h3 class="h3">Redes Sociales</h3><p>Atención personalizada!</p>
			<span class="link">
				<ul class="reds">
		              <li>
		                <a href="https://www.facebook.com/kooningtraveloficial/" class="lista-pie" target="_blank">
		                	<i class="fa fa-facebook" aria-hidden="true"></i>
		                </a>
		              </li>
		              <li>
		                  <a href="https://twitter.com/kooningtravel" class="lista-pie" target="_blank">
		                  	<i class="fa fa-twitter" aria-hidden="true"></i>
		                  </a>
		              </li>
		              <li>
		                <a href="https://www.instagram.com/kooningtraveloficial/" class="lista-pie" target="_blank">
		                	<i class="fa fa-instagram" aria-hidden="true"></i>
		                </a>
		              </li>
		              <li>
		                <a href="https://www.youtube.com/channel/UClqrsSutkuFFdWIJTSDG1pw" class="lista-pie" target="_blank">
		                	<i class="fa fa-youtube" aria-hidden="true"></i>
		                </a>
		              </li>
	         	 </ul>	
			</span>
		</div>
	</div>
</section>

</div>
	
@stop