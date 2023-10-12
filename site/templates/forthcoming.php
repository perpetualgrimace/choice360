<?php

snippet('global.head');
snippet('global.menu');

snippet('global.header');

snippet('global.textblock');


$tree = getJsonData();

echo '<table class="table">';
echo '<th><p>Title</p></th> <th><p>Publisher</p></th>';

foreach ($tree as $value) {
  echo '<tr>';
  echo '<td><p>'. $value->title . '</p></td><td><p>' . $value->publisher. '</p></td>';
  echo '</tr>';
}

echo '</table>';
snippet('global.sidebar');
snippet('global.cta');

snippet('global.footer');
