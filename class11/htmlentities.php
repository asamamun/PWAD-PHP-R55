<?php
$p = "<mark>this is a mark tag</mark>";
echo htmlentities($p);
?>
<hr>
<?php
$input = "I just can't get <<enough>> of PHP!";
echo htmlspecialchars($input);
?>
<hr>
<?php
 $string = "La pasta è il piatto più amato in Italia";
 $translate = get_html_translation_table(HTML_ENTITIES);
 echo strtr($p, $translate);
?>
<hr>
<?php
 $string = "La pasta è il piatto più amato in Italia";
 $translate = get_html_translation_table(HTML_SPECIALCHARS);
 echo strtr($p, $translate);
?>
<hr>
<?php
 $table = array('<b>' => '<strong>', '</b>' => '</strong>');
 $html = '<b>Today In PHP-Powered News</b>';
 echo strtr($html, $table);
?>