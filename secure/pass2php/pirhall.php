<?php
if($s['pirhall']=='On'){
	if($s['slapen']=='Off'&&$s['hall']=='Off'&&(time<strtotime('8:00')||apcu_fetch('zon')<100)){
		sw(apcu_fetch('ihall'),'On','hal');
		apcu_store('thall',time);
	}
	if($s['inkom']=='Off'&&(time<strtotime('8:00')||apcu_fetch('zon')<100)){
		sw(apcu_fetch('iinkom'),'On','inkom');
		apcu_store('tinkom',time);
	}
	if(($s['weg']=='On'||$s['slapen']=='On')&&$s['meldingen']=='On'&&apcu_fetch('tweg')<time-178&&apcu_fetch('tslapen')<time-178){
		sw(apcu_fetch('isirene'),'On');
		$msg='Beweging hall om '.time;
		telegram($msg,false,3);
	}
}
apcu_store('spirhall',$s['pirhall']);