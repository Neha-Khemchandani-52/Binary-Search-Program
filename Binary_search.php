<?php
/***
** Description : Binary Search program in PHP
** Date Added : 9th October,2019
** Added By : Neha Khemchandani
***/

## First and mandatory requirement for Binary search is that the given input array should be 
## already sorted. 

function BinarySearch($input_array,$number_to_be_searched)
{
    if(checkArraySorted($input_array) === 1){
        //Array Already sorted

        $low = 0;
        $high = count($input_array)-1;
    
        while($low<=$high)
        {
            $mid = floor(($low+$high)/2);
            
            if($number_to_be_searched>$input_array[$mid])
            {
                $low = $mid+1;
                
            }elseif($number_to_be_searched<$input_array[$mid])
            {
                $high = $mid-1;
            }else{
                return true;
            }
            
        }

        }else{

           echo "Please Enter The Sorted Array For Binary Search";
           echo "<br>";
        }

        return false;
    }

$array = array(4,10,13,25,37,48,50);
$value = 55;

if(BinarySearch($array,$value) === TRUE)
{
    echo "The given input value is found";
    
}else{
    
    echo "The given input value is not found";
    
}

## Checking array is sorted or not
function checkArraySorted($input_data_array)
{
    $arr = $input_data_array;
    sort($input_data_array); 
    if($arr === $input_data_array)
    {
        return 1;
    }else{
        return 0;
    }

}



?>