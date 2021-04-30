<?php
class Calculate{
    


    function triangle ($first_num, $second_num)
    {
        $result = $first_num+$second_num - 1;
        echo '<h1>' . 'Answer:' . $result.'</h1>';

    }

    
    function binarycount($allone)
    { 
        $count = 0;
        while($allone)
        {
            $count += ($allone & 1);
            $allone = $allone >> 1;
        }
    echo '<h1>' . 'Answer:' . $count.' is the total number of ones in a binary representation of an integer.'.'</h1>';
    
    }
  

    function pparts($firstpart, $secondpart)
    {
          $output =  str_replace('/', '', $firstpart);
          $output .= "/" . str_replace('/', '', $secondpart);
      echo '<h1>' . 'Answer:' . '("'.$firstpart . '")'. '("' .$secondpart. '")'. '→ ' .'"'. $output. '"'.'</h1>';
      

    }
    function sastrynumber($sastry)
    {
    $conca = $sastry . $sastry+1;
    $check = 0;
    for ($i = 1; $i * $i <= $conca; $i++) {
            if (($conca % $i == 0) && ($conca / $i == $i)) {
                $check = 1;
                echo '<h1>' . 'Answer: '. $sastry. '→ ' .$conca . '→'.'TRUE(' . $sastry. ' is a perfect square)'. '</h1>';
            }
        }
    if($check == 0){
      echo '<h1>' . 'Answer:'. $sastry. '→ '. $conca . '→'.'FALSE(' . $sastry. ' is not a perfect square)'. '</h1>';
       
    }
}
    
}