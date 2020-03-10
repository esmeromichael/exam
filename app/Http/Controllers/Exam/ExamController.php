<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ExamController extends Controller
{
    public function question1(Request $request)
    {
    	if ($request->question1)
    	{
    		$input_value = $request->input_value;
    		return $this->binaryGap($input_value);

    	} else if ($request->question2) {

    		$input_array = $request->input_value2;
    		return $this->missingNum($input_array);
    	} else if ($request->question3) {
    		$input_array = $request->input_value3;
    		if($input_array < 0 || $input_array > 1000000){
                return 'An integer is out of the range';
                
            } else if(!$input_array) {
                return 'Please enter the value.';
            } 

    		$num_to_split  = str_split($input_array);
    		return $this->singleOccurence($num_to_split);
    	} else if($request->question4) {
    		$input_value = $request->input_value4;
    		return $this->stringLeastMost($input_value);
    	} else if($request->question5) {

            return $this->stockBuySell();
        }

    	
    }

    public function missingNum($input_array)
    {

    	$num_to_split  = str_split($input_array);
		$missing_num   = range(min($num_to_split), max($num_to_split)); 
		$result        = array_diff($missing_num, $num_to_split); 

    	return $result;
    }

    public function binaryGap($input_value)
	{
		if (!$input_value < 0) {
			throw new \Exception('Number must positive numbers');
        }
      	
        $bin   = decbin($input_value);
        $count = strlen($bin);

        $current      = null;
        $occur        = 0;
        $occur_totals = [];
        $prev         = null;

        for ($i = 0; $i < $count; $i++) {
        	if ($bin[$i] == 0 && $prev == 1) {
        		$occur++;
        		continue;
        	}
        	else {
        		$occur_totals[] = $occur;
                $occur = 0;
        	}

        	$prev = $bin[$i];
        }
        
        return max($occur_totals);
	}

	public function singleOccurence($data) 
	{
    	
	    $new_data         = array_count_values($data);
	    $single_occurence = [];

	    foreach ($new_data as $key => $value) {
	    	if($value == 1) {
	    		$single_occurence[] = $key;
	    	}
	    }

	    return join(", ",$single_occurence);

	}

	public function stringLeastMost(string $data) {
	    $count    = strlen($data);
	    $new_data = [];
	    for ($i = 0; $i < $count; $i++) {
	    	$new_data[] = $data[$i];
	    }
	    
	    $count_str   = array_count_values($new_data);
	    $highest     = max(array_values($count_str));
	    $lowest      = min(array_values($count_str));
	    $highest_str = [];
	    $lowest_str  = [];

	    foreach($count_str as $key => $value) {
	        if ($value == $highest) {
	        	$highest_str[] = $key;
	        }
	        
	        if ($value == $lowest) {
	        	$lowest_str[] = $key;
	        }
		}
	    
	    echo "Most:" . join(", ",$highest_str) . "<br/>";
	    
	    $s = "a";
	    foreach($lowest_str as $key => $value) {
	    	if($value >= $s) {
	        	$s = $value;
	        }
	    }
	    
	    echo "Least:" . join(", ",$lowest_str). ' the answer is '. $s;

	}

    public function stockBuySell() 
    { 
        $data = [100, 80, 50, 145, 500, 400, 450, 300, 10, 55, 40, 15, 80, 90];
        $sale = 0;
        $day  = 3;
        foreach ($data as $key => $value) {
           $sale = $value;
           
        }
        //not yet done, :(
        return; 
    }
}
