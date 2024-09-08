<?php
    // code
?>
<?php
  
    // This Function takes place last element as pivot
      // Place the pivot as correct position
      // In Sorted Array, and places all smaller to left
      // of pivot and all greater element to its right of pivot
      
  
  function partition(&$arr,$low,$high)
  {
    // Choose the Pivot Element
    $pivot= $arr[$high];

    // Index of smaller element and indicates
    // The right position of pivot
    $i=($low-1);

    for($j=$low;$j<=$high-1;$j++)
    {
      if($arr[$j]<$pivot)
      {
        // Increment index of smaller element
        $i++;
        list($arr[$i],$arr[$j])=array($arr[$j],$arr[$i]);
      }
    }
    // Pivot element as correct position
    list($arr[$i+1],$arr[$high])=array($arr[$high],$arr[$i+1]);
    return ($i+1);
  }

// The main function that implement as QuickSort
// arr[]:- Array to be sorted
// low:- Starting Index
//high:- Ending Index

function quickSort(&$arr,$low,$high)
{
  if($low<$high)
  {
    // pi is partition
    $pi= partition($arr,$low,$high);
    // Sort the array
    // Before the partition of Element
    
    quickSort($arr,$low,$pi-1);
    
    // After the partition Element
    
    quickSort($arr,$pi+1,$high);
  }
}


// Driver Code

$arr= array(10,7,8,9,1,5);
$N=count($arr);

// Function Call

quickSort($arr,0,$N-1);
echo "Sorted Array:\n";

for($i=0;$i<$N;$i++)
{
  echo $arr[$i]. " ";
}
   //This code is contributed by Diwakar Jha
?>