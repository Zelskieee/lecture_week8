<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arif</title>
</head>
<body>
    <h1>Hello World</h1>
    
    <?php 
    
        echo "This is PHP Script"."<br>";
        print "This is the second PHP script"; 
    
    ?>
        
    <?php
    
        $name = "Fagih";
        print "This is the third PHP script";
        echo("<h1>Selamat Datang</h1>".$name);
    
    ?>

    <?php
        $num = 8;
        echo "<br>"."Value is now $num.<br/>";
        $num += 2;
        echo "Add 2. Value is now $num. <br/>";
        $num -= 4;
        echo "Subtract 4. Value is now $num. <br/>";
        $num *= 5;
        echo "Multiply by 5. Value is now $num. <br/>";
        $num /= 3;
        echo "Divide by 3. Value is now $num. <br/>";
        $num++;
        echo "Increment value by one. Value is now
        $num.<br/>";
        $num--;
        echo "Decrement value by one. Value is now $num."."<br>";
    ?>

    <?php
    function addition($a,$b)
    {
        $add = $a + $b;
        echo "The sum of $a and $b is $add"."<br>";
    }

    addition(10,15)
    ?>

    <?php
        $num1 = 10;
        $num2 = 5;

        echo("Original num1 : $num1<br>");
        echo("Original num2 : $num2<br>");
        // creating a function
        function addFunction(&$num1, &$num2)
        {
        $num1+= 1;
        $num2+= 2;
        }
        // call the function, send original values
        addFunction($num1, $num2);
        echo("Updated num1 : $num1<br>");
        echo("Updated num2 : $num2");
    ?>

    <?php
        $cars = array(
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );

        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>" . $cars[$row][$col] . "</li>";
            }
            echo "</ul>";
        }
    ?>

</body>
</html>