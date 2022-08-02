<?php
class Solution {
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $buy = $prices[0];
        $max_profit = 0;
        $enough = count($prices);

        // Iterate through elements
        for($i=0; $i<$enough; $i++){
            
            // Set low buying price if there is any
            if($buy > $prices[$i]){
                $buy = $prices[$i];
            }

            // Set high selling price if there is any
            else if(($temp = $prices[$i] - $buy) >$max_profit){
                $max_profit = $temp;
            }
        }
        return $max_profit;
    }
}
$BuyAndSell = new Solution();
$prices = [10000,9999,9998,9997,9996];
$enough = count($prices);
echo $BuyAndSell->maxProfit($prices, $enough);
?>
<script>
    var maxProfit = function(prices) {
        var buy = prices[0];
        var max_profit = i = 0;
        var enough = prices.length;

        // Iterate through elements
        for(i; i<enough; i++){
            
            // Set low buying price if there is any
            if(buy > prices[i]){
                buy = prices[i];
            }

            // Set high selling price if there is any
            else if((temp = prices[i] - buy) >max_profit){
                max_profit = temp;
            }
        }
        return max_profit;
    };
    /*
    var prices = [2,1,4];
    console.log(maxProfit(prices));*/
</script>