<!DOCTYPE html>
<html>
   <head>
        <title>  excercise 6 </title>
   </head>
<body>
<?php
$day=5;

switch ($day) {
    case 0:
        echo "Monday";
        break;
    case 1:
        echo "Tuesday";
        break;
    case 2:
        echo "Wednesday";
        break;
    case 3:
        echo "Thusday";
        break;
    case 4:
        echo "Friday";
        break;
    case 5:
        echo "Saturday";
        break;
    case 6:
        echo "Sunday";
        break;
    default:
        echo "Không có ngày nào";
        break;
}
?>
</body>
</html>