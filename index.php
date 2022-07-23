<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array Functions</title>
</head>
<body>
     <?php 
    
    
        
            // echo "Value is $value <br />";

            // create the function to receive the two parameters 
            function add($number1 ,$number2)
            {
            
    
                 $numbers = array( 10,20, 30, 40, 50, 60, 70, 80, 90, 100);
                $sum = 0 ;
                $count = count($numbers);
                // check if the parameters are positive intergers
                if(!($number1 && $number2) > 0)
                {
                     return -1;
                }
                elseif(!($number2 > $number1))
                {
                     return 0 ;
                }
                else{
                       for($i=0;$i<$count;$i++){
                    $sum  += $numbers[$i];
                    }
                    echo $sum ;

                }
            }
            
      
            add(-3,6);
     ?>
</body>
</html>


<!-- Write a PHP function that receives two integers as
parameters, the function returns the sum of the elements in
the array found between the two integers. Use the array [10,
20, 30, 40, 50, 60, 70, 80, 90, 100]

Example to guide you, we use 20 and 40 as the parameters,
the return value should be the sum of 20,30,40 which is 90. -->

<!-- ================== -->

<!-- Additional requirements:
1. The two integers passed to the function should be positive;
if not, the function should return -1

2. Validate that the first integer is lower than the second
integer. If not, the function should return 0
3. If the first integer is in the array, and the second is above
100, for example 90 and 120, then the function should return
the sum of those integers that are within the array and in
between the range given. In this case it should be 190 -->