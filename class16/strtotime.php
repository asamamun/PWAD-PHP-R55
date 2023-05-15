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
    The `strtotime()` function in PHP accepts a wide range of date and time formats as input. Here are some examples of values that can be given to the `strtotime()` function:

- Specific date formats:
  - "YYYY-MM-DD" (e.g., "2023-05-15")
  - "MM/DD/YYYY" or "MM-DD-YYYY" (e.g., "05/15/2023" or "05-15-2023")
  - "DD/MM/YYYY" or "DD-MM-YYYY" (e.g., "15/05/2023" or "15-05-2023")
  - "Month Day, Year" (e.g., "May 15, 2023")
  - "Day Month Year" (e.g., "15 May 2023")
  
- Relative formats:
  - "today" or "now" (represents the current date and time)
  - "tomorrow" (represents the next day)
  - "yesterday" (represents the previous day)
  - "+X days" or "-X days" (represents X number of days in the future or past)
  - "+X weeks" or "-X weeks" (represents X number of weeks in the future or past)
  - "+X months" or "-X months" (represents X number of months in the future or past)
  - "+X years" or "-X years" (represents X number of years in the future or past)
  - "first day of next month" (represents the first day of the next month)
  
- Time formats:
  - "HH:MM:SS" (e.g., "09:30:00")
  - "HH:MM" (e.g., "09:30")
  - "HH" (e.g., "09")
  
- Combined date and time formats:
  - "YYYY-MM-DD HH:MM:SS" (e.g., "2023-05-15 09:30:00")
  - "YYYY-MM-DD HH:MM" (e.g., "2023-05-15 09:30")
  
These are just a few examples of the values that can be given to the `strtotime()` function. It is a flexible function that can handle various date and time representations. Keep in mind that `strtotime()` may interpret ambiguous date formats differently, depending on your server's configuration and locale settings.
    </pre>
    <hr>
    <?php
    define("HR","<hr/>");
    $futureDate = strtotime("+3 days");
echo date("Y-m-d", $futureDate); // Outputs: 2023-05-18 (assuming the current date is 2023-05-15)
echo HR;
$timestamp = strtotime("2023-12-31");
echo date("F j, Y", $timestamp); // Outputs: December 31, 2023
echo HR;
$pastDate = strtotime("-1 week");
echo date("Y-m-d", $pastDate); // Outputs a date one week ago from the current date

echo HR;
$futureDate = strtotime("+2 months");
echo date("Y-m-d", $futureDate); // Outputs a date two months from the current date

echo HR;
$date = strtotime("next Monday");
echo date("Y-m-d", $date); // Outputs the date of the next Monday relative to the current date
echo HR;
$date = strtotime("-5 years -2 months -5 days");
echo date("Y-m-d", $date);
?>

</body>
</html>