<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("HR","<hr>");
//time function returns the current timestamp
echo "Now the current timestamp is: " . time();
echo HR;
echo "The timestamp value of 121 means ". date("Y-m-d H:i:s a",121);
echo HR;
echo "Current date and time is ". date("Y-m-d H:i:s a");
echo HR;
printf( "Checking feb 30, 2022: %d ", checkdate(02,30,2022));
echo HR;
printf( "Checking feb 29, 2020: %d ", checkdate(02,29,2020));
echo HR;
printf( "Checking feb 29, 2000: %d ", checkdate(02,29,2000));
echo HR;
?>
<h1>Date function</h1>
<table width="100%" border="1">
  <thead>
    <tr>
      <th>Function</th>
      <th>Description</th>
      <th>Parameter</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>date()</td>
      <td>Formats a local date and time</td>
      <td>Format string (optional)<br>e.g., "Y-m-d H:i:s"</td>
    </tr>
    <tr>
      <td>time()</td>
      <td>Returns the current Unix timestamp</td>
      <td>No parameter</td>
    </tr>
    <tr>
      <td>strtotime()</td>
      <td>Parses an English textual datetime into a Unix timestamp</td>
      <td>Time string</td>
    </tr>
    <tr>
      <td>mktime()</td>
      <td>Returns the Unix timestamp for a date and time</td>
      <td>Hour, minute, second, month, day, year</td>
    </tr>
    <tr>
      <td>strtotime()</td>
      <td>Parses an English textual datetime into a Unix timestamp</td>
      <td>Time string</td>
    </tr>
    <tr>
      <td>date_create()</td>
      <td>Creates a new DateTime object</td>
      <td>Time string (optional)</td>
    </tr>
    <tr>
      <td>date_modify()</td>
      <td>Modifies a DateTime object</td>
      <td>Time string</td>
    </tr>
    <tr>
      <td>l</td>
      <td>day(monday)</td>
      <td><?php echo date("l") ?></td>
    </tr>
    <tr>
      <td>t</td>
      <td>days in current month</td>
      <td><?php echo date("t") ?></td>
    </tr>
    <tr>
      <td>F</td>
      <td>month name</td>
      <td><?php echo date("F") ?></td>
    </tr>
    <tr>
      <td>Y</td>
      <td>Year</td>
      <td><?php echo date("Y") ?></td>
    </tr>
    <tr>
      <td>m</td>
      <td>month number</td>
      <td><?php echo date("m") ?></td>
    </tr>
    <tr>
      <td>d</td>
      <td>day with leading 0</td>
      <td><?php echo date("dS") ?></td>
    </tr>
    <tr>
      <td>j</td>
      <td>day without leading 0</td>
      <td><?php echo date("jS") ?></td>
    </tr>
    <tr>
      <td>S</td>
      <td>add suffix as th, nd,rd in number</td>
      <td><?php echo date("jS") ?></td>
    </tr>
    <tr>
      <td>g</td>
      <td>hour without leading 0</td>
      <td><?php echo date("g") ?></td>
    </tr>
    <tr>
      <td>H</td>
      <td>Hour</td>
      <td><?php echo date("H") ?></td>
    </tr>
    <tr>
      <td>i</td>
      <td>minute</td>
      <td><?php echo date("i") ?></td>
    </tr>
    <tr>
      <td>s</td>
      <td>second(s)</td>
      <td><?php echo date("s") ?></td>
    </tr>
    <tr>
      <td>U</td>
      <td>alternative of time() function</td>
      <td><?php echo date("U") ?></td>
    </tr>
    <tr>
      <td>time()</td>
      <td>returns UNIX timestamp</td>
      <td><?php echo time() ?></td>
    </tr>
    <tr>
      <td>date("F d, Y");</td>
      <td>returns UNIX timestamp</td>
      <td><?php echo date("F d, Y"); ?></td>
    </tr>
    <tr>
      <td>good morning</td>
      <td>returns UNIX timestamp</td>
      <td><?php echo date("good morning"); ?></td>
    </tr>
    <tr>
      <td> gettimeofday</td>
      <td>returns UNIX timestamp</td>
      <td><pre><?php print_r(gettimeofday()); ?></pre></td>
    </tr>
    <tr>
      <td> microseconds</td>
      <td>$date = new DateTime();
$microseconds = $date->format("u");

echo $microseconds;</td>
      <td><pre><?php $date = new DateTime();
$microseconds = $date->format("u");

echo $microseconds; ?></pre></td>
    </tr>
    <tr>
      <td> getdate</td>
      <td>returns array</td>
      <td><pre><?php print_r(getdate()); ?></pre></td>
    </tr>
    <tr>
        <td>date('format',timestamp)</td>
        <td>returns date time of that timestamp</td>
        <td><?php echo date("Y-m-d H:i:s a",1); ?></td>
    </tr>
    <tr>
        <td>mktime</td>
        <td>returns timestamp of a given datetime <br> int mktime([int hour [, int minute [, int second [, int month
 [, int day [, int year]]]]]])</td>
        <td><?php echo mktime(6,0,0,12,16,1971); ?></td>
    </tr>
    <tr>
        <td>find year</td>
        <td>date("Y",61689600)</td>
        <td><?php echo date("H",61689600) ?></td>
    </tr>
    <tr>

        <td>getlastmod</td>
        <td>the last modification time of the main script that is executed</td>
        <td><?php echo date("F d, Y h:i:sa", getlastmod()); ?></td>
    </tr>
  </tbody>
</table>

<?php

?>
</body>
</html>
