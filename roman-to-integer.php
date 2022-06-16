class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $BaseRomanNumerals = [
                 'I' => 1,
                 'V' => 5,
                 'X' => 10,
                 'L' => 50,
                 'C' => 100,
                 'D' => 500,
                 'M' => 1000,
             ];

             $RomanNumerals = str_split($s);
             foreach($RomanNumerals as $key => $RomanNumeral){
                     if(isset($RomanNumerals[$key-1]) && $BaseRomanNumerals[$RomanNumeral] > $BaseRomanNumerals[$RomanNumerals[$key-1]]){
                         $FinalRomanNumerals[] = $BaseRomanNumerals[$RomanNumerals[$key]] - $BaseRomanNumerals[$RomanNumerals[$key-1]];
                     }else if(isset($RomanNumerals[$key+1]) && $BaseRomanNumerals[$RomanNumeral] >= $BaseRomanNumerals[$RomanNumerals[$key+1]]){
                         $FinalRomanNumerals[] = $BaseRomanNumerals[$RomanNumerals[$key]];
                     }else if(!isset($RomanNumerals[$key+1])){
                         $FinalRomanNumerals[] = $BaseRomanNumerals[$RomanNumerals[$key]];
                     }
             }
             return array_sum($FinalRomanNumerals);
    }
}
