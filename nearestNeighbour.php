/** This will find the pathe based on the nearest neighbour problem selecting a random point as the starting point.
It will give the sequence of points and distance.
*/

<?php
//$points = [[1,2],[2,3],[1,3],[5,3],[6,5]];
function nearestNeighbour($data_ary)
{
    $order = array();
    $p = $p0 =  array_shift($data_ary);
    $order['order'][] = $p;
    $order['distance'] = 0;
    while(count($data_ary)>1)
    {
    foreach($data_ary as $key=>$val)
    {
    	$distances[$key] = distance($p,$val);
    }
    asort($distances);
    $key = key($distances);
    $order['distance'] += $distances[$key];
    $order['order'][] = $data_ary[$key];
    $p = $data_ary[$key];
    unset($data_ary[$key]);
    $data_ary = array_values($data_ary);
    }
    if(count($data_ary) == 1) {
    	$order['order'][] = $data_ary[0];
    	$order['distance'] += distance($data_ary[0],$p0);
    }
    return $order;
}

function distance($p1,$p2)
{
	return sqrt(pow(($p2[1]-$p1[1]),2)+pow(($p2[0]-$p1[0]),2));
}

$order = nearestNeighbour($points);

?>
