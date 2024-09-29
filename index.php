<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>This is php</p>
    <?php
        $weekname = "Wednesday";
        switch($weekname) {
            case "Monday";
             echo "weekdays";
             break;
            
            case "Tuesday";
             echo "weekdays";
             break;
            case "Wednesday";
             echo "weekdays";
             break;
            case "Thursday";
             echo "weekdays";
             break;
            case "Friday";
             echo "weekdays";
             break;
            case "Saturday";
             echo "weekdends";
             break;
            case "Sunday";
             echo "weekends";
             break;
            default:
             echo "not valid day";
             break;
        }
    ?>
</body>
</html>