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

}
