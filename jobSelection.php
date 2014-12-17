<?php
/*
  OptimalScheduling(I) //right job selection
  While (I = ∅) do
  Accept the job j from I with the earliest completion date.
  Delete j, and any interval which intersects j from I.
 * 
 * //here time is in decimal format you can acheive this by sending 
 * unix time stamps of start and end time
 */
//$times = [[1, 2], [2.30, 2.38], [1.30, 2.30], [2.39, 4], [3, 3.50]];

function jobSelection($times) {
    while (count($times) > 0) {
        usort($times, function($a, $b) {
            return $a[1] - $b[1];
        });
        $tasks[] = $best = $times[0];
        unset($times[0]);
        if (!empty($times)) {
            $start = $best[0];
            $end = $best[1];
            foreach ($times as $key => $time) {
                if ($time[0] <= $end) {
                    unset($times[$key]);
                }
            }
            $times = array_values($times);
        }
    }
    return $tasks;
}
