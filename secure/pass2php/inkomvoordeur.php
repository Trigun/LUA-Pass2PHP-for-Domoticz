<?php
if(apcu_fetch('tinkom')<time-5&&apcu_fetch('tvoordeur')<time-5)RefreshZwave(8);