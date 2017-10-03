<?php
$langage = array('HTML', 'CSS', 'Javascript', 'PHP');
sort($langage, SORT_STRING);
foreach ($langage as $key => $val) {
  echo 'fruits [' . $key . '] = '.$val . ' ';
}
$comma_separated = implode(', ', $langage);
echo $comma_separated;

 ?>
