<?php
 $text = "This is a link to http://www.wjgilmore.com/.";
 $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, cupiditate! Quidem non in vero aperiam molestias, reprehenderit animi omnis odio nisi quo quaerat ad et temporibus voluptatibus optio quisquam illo!
 Nobis temporibus consequuntur nostrum ea nihil esse, illum beatae aliquam quod? Sit eius deserunt, molestiae, impedit ratione optio deleniti, necessitatibus tempore voluptate consequuntur tenetur ullam vel incidunt nulla dolorem quam.
 Minima cumque molestias atque sit fugiat optio accusantium quaerat, at consectetur repudiandae recusandae nesciunt incidunt laboriosam cupiditate modi quisquam rem consequatur omnis officiis repellat soluta corrupti ratione nobis. Minus, aliquam.
 Omnis itaque reiciendis incidunt aliquam, veniam modi in dicta facilis assumenda fugiat eius aperiam laboriosam deserunt pariatur illum sapiente exercitationem nobis nulla iste libero laudantium? Temporibus optio vel reiciendis quo.
 Repudiandae aperiam repellendus dolore! Facere ducimus repellendus ad beatae similique blanditiis porro, unde fugiat iure ipsa nam cum earum nesciunt! Fugit quos deserunt itaque repellat sint similique. Obcaecati, fugit perferendis!";
//  echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\${0}</a>",$text) ;
 echo preg_replace("/in/i", "**",$lorem);
?>
<hr>
<?php
$draft = "In 2010 the company faced plummeting revenues and scandal.";
$keywords = array("/faced/", "/plummeting/", "/scandal/");
$replacements = array("celebrated", "skyrocketing", "expansion");
echo preg_replace($keywords, $replacements, $draft);