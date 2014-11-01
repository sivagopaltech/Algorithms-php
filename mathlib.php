/** basic mathamatical functionalities  **/

class mathlib()
{
  /*return sum of first n positive numbers */
  public function sum($n)
  {
    return ($n*($n+1))/2;
  }
  
  /*return sum of first n positive even numbers */
  public function sumEven($n)
  {
    return $n*($n+1);
  }
  
  /*return sum of first n positive odd numbers */
  public function sumOdd($n)
  {
    return $n*$n;
  }
  
  /* return prime numbers upto $n */
  function primes($n)
  {
    $primes = array();
    for($i=2;$i<=$n;$i++)
    {
        $prime = true;
        $limit = floor(sqrt($i));
        for($j=2;$j<=$limit;$j++)
        {
            if($i%$j == 0)
            {
             $prime = false;
             break;
            }
        }
        if($prime==true)
           $primes[] = $i;
    }
    return $primes;
  }
  
  /* return Fibonacci Numbers upto $n */
  function fibonacciNumbers($n)
  {
    $fib_numbers = array();
    $a =0;
    $b=1;
    while($b<=$n)
    {
        $fib_numbers[] = $c = $a+$b;
        $a = $b;
        $b = $c;
    }
    return $fib_numbers;
  }

}
