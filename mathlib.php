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
  
  /*return lcm of numbers 
  @input array() $data */
  function lcm($data)
  {
    $lcm = 1;
    while(count($data)>0)
    {
    $min = min($data);
    $lcm *= $min;
    $tmp_data = array();
    foreach($data as $val)
    {
       if($val != $min && $val%$min == 0)
       $tmp_data[] = $val/$min;
       else if($val != $min)
       $tmp_data[] = $val;
    }
     $data = $tmp_data;
    }
       return $lcm;
  }
  

}
