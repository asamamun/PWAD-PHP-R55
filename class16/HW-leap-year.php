<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    rules:
    Take the year you want to check for leap year.

If the year is divisible by 400, go to step 4. Otherwise, go to step 3.

If the year is divisible by 100, it is not a leap year. Otherwise, go to step 4.

If the year is divisible by 4, it is a leap year. Otherwise, it is not a leap year.
</pre>
<?php
function check_leap_year($year) {
/*     return true;//if the year is leap year
    return false; //if the year is not leap year */
}

if(check_leap_year(1990)){
    echo "the year is leap year";
}
else echo "the year is not leap year";
?>
</body>
</html>