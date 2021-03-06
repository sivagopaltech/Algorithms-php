/** basic mathamatical functionalities  **/

class mathlib()
{
  /*return sum of first n positive numbers */
  public function sum($n)
  {
    return bcdiv(bcmul($n,bcadd($n,1)),2);
  }
  
  /*return sum of first n positive even numbers */
  public function sumEven($n)
  {
    return bcmul($n,bcadd($n,1));
  }
  
  /*return sum of first n positive odd numbers */
  public function sumOdd($n)
  {
    return bcmul($n,$n);
  }
  
  /* return prime numbers upto $n */
function primes($n)
{
  $numbers = array_fill(2,$n-1,1);
  $primes = array();
  while(count($numbers) > 0)
  {
  $primes[] = $p = key($numbers);
  unset($numbers[$p]);
  for($i=2;$i*$p<=$n;$i++)
  {
     unset($numbers[$i*$p]);
  }
  }
  return $primes;
}
  
   /*to determine whether given number is prime or not */
  function isPrime($n)
  {
    if($n == 0 || $n == 1)
    {
      return false;
    }
    else if($n < 0)
    {
      return false;
    }
    else {
    $prime = true;
    $limit = floor(bcsqrt($n));
    for($j=2;$j<=$limit;$j++)
    {
        if(bcmod($n,$j) == 0)
        {
         $prime = false;
         break;
        }
    }
    return $prime;
    }
  }
  
  /*to determine the factorial */
  function fact($n)
  {
    if($n == 0 || $n == 1)
    {
      return 1;
    }
    else if($n < 0)
    {
      return null;
    }
    else {
    $res = 1;
    for($j=2;$j<=$n;$j++)
    {
        $res = bcmul($j,$res);
    }
    return $res;
    }
  }
  
  /* return Fibonacci Numbers upto $n */
  function fibonacciNumbers($n)
  {
    $fib_numbers = array();
    $a =0;
    $b=1;
    while($b<=$n)
    {
        $fib_numbers[] = $c = bcadd($a,$b);
        $a = $b;
        $b = $c;
    }
    return $fib_numbers;
  }
  
  /*return lcm of numbers @input array() $data */
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
  
  /*return lcm of numbers @input array() $data */
  function gcd($data)
  {
   $gcd = function ($a, $b) use (&$gcd) { return $b ? $gcd($b, $a % $b) : $a; };
   return array_reduce($data,$gcd);
  }
  
  
  

}
