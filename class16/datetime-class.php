<h1>Age calculator</h1>
<?php
if(isset($_POST['dob'])){
$d1 = new DateTime($_POST['dob']);
$d2 = new DateTime();
$diff = $d1->diff($d2);
echo $diff->y."-".$diff->m."-".$diff->d;
}
?>
<form action="" method="POST">
    <input type="date" name="dob" id="" required>
    <input type="submit" value="Calc" name="calc">
</form>
<hr>
<pre>
The `DateTime` class in PHP provides various methods to work with dates and times. Here are some commonly used methods of the `DateTime` class:

1. `format($format)` - Formats the date and time according to the specified format string. It returns the formatted string representation of the date and time.

2. `modify($modify)` - Modifies the date and time by adding or subtracting a specific interval. It updates the `DateTime` object with the modified date and time.

3. `add($interval)` - Adds a DateInterval object or a specific interval to the date and time. It returns a new `DateTime` object with the added interval.

4. `sub($interval)` - Subtracts a DateInterval object or a specific interval from the date and time. It returns a new `DateTime` object with the subtracted interval.

5. `setTime($hour, $minute[, $second])` - Sets the time portion of the `DateTime` object to the specified hour, minute, and optionally second.

6. `setDate($year, $month, $day)` - Sets the date portion of the `DateTime` object to the specified year, month, and day.

7. `getTimestamp()` - Returns the Unix timestamp representing the date and time as an integer.

8. `getTimezone()` - Returns the `DateTimeZone` object representing the time zone of the `DateTime` object.

9. `setTimezone($timezone)` - Sets the time zone of the `DateTime` object to the specified `DateTimeZone` object.

10. `diff($datetime)` - Calculates the difference between two `DateTime` objects and returns a `DateInterval` object representing the difference.

These are just a few examples of the methods available in the `DateTime` class. The class provides many more methods for various date and time manipulations, comparisons, and conversions.
<hr>
To calculate age using the `DateTime` class in PHP, you can follow these steps:

1. Create a `DateTime` object for the person's birthdate.
2. Create a `DateTime` object for the current date.
3. Use the `diff()` method to calculate the difference between the two dates, which will result in a `DateInterval` object.
4. Extract the number of years from the `DateInterval` object.

Here's an example:

```php
$birthdate = new DateTime('1990-05-15'); // Replace with the person's birthdate
$currentDate = new DateTime(); // Current date

$age = $birthdate->diff($currentDate)->y;

echo "Age: " . $age;
```

In the code above, we create a `DateTime` object for the birthdate using the desired format ('Y-m-d'). Then, we create another `DateTime` object for the current date, which by default represents the current date and time. We calculate the difference between the two dates using the `diff()` method, which returns a `DateInterval` object. Finally, we extract the number of years from the `DateInterval` object using the `y` property.

This code will output the person's age based on the provided birthdate.
</pre>