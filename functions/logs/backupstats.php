<?php         						$scriptpath = dirname(dirname(dirname(__FILE__)));        sleep(3);        $log = $scriptpath."/logs/log.txt";        $end = $scriptpath."/functions/routine/marker.mk";        $file = "$log";        $file = escapeshellarg($file); // for the security concious (should be everyone!)if ($_GET['key'] != ''){if (file_exists($end)) {        $line = `tail -n 30 $file`;        echo '<pre>';        print_r($line);        echo '</pre>';echo "<meta http-equiv='refresh' content='0'>"; }else{        $line = `tail -n 30 $file`;        echo '<pre>';        print_r($line);        echo '</pre>';  echo '<form method="post">';  echo '<input type="submit" value="Close Window" name="submit" onClick="window.close()">';  echo '</form>';}}?>