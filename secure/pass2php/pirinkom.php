<?php
if($s['pirinkom']=="On"){
	if($s['inkom']=='Off'&&(time<strtotime('8:00')||cget('zon')<100))
		sw($i['inkom'],'On','inkom');
	if($s['slapen']=='Off'&&$s['hall']=='Off'&&(time<strtotime('8:00')||cget('zon')<100))
		sw($i['hall'],'On','hall');
	alarm('inkom');
}