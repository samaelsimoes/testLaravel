<?php

/**
 * created class to check multiples of 3 and 5
 * autor: Samael pereira simoes
*/
    class fizzBuzz{

   
        function valFizzBuzz($n)
        {
            $resultParam = '';
            //eu poderia ter utilizado foreach
            for ($i = 0; $i < $n; $i++) 
            {
                if ($i % 3 == 0 && $i % 5 == 0) 
                {
                    $resultParam .= " :FizzBuzz" . '<br>';
                } else if ($i % 3 == 0) 
                {
                    $resultParam .=" :Fizz" . '<br>';
                } else if ($i % 5 == 0) 
                {
                    $resultParam .= " :Buzz" . '<br>';
                }
            }

            return $resultParam;
        }
    }

    $fizzBuzz = new fizzBuzz;

    echo $fizzBuzz->valFizzBuzz(100);
?>
  