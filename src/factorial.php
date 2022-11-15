<?php 
class Factorial {
    public function factorial($i)
    {
        if (!is_int($i))
         return NULL;
    
        if ($i ==0 || $i == 1)
         return 1;

        elseif ($i >1)
         return $i * $this->factorial($i-1);
        
        else return NULL;

    } // factorial function end

} 