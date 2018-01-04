/*You have deposited a specific amount of dollars into your bank account. Each year your balance increases at the same growth rate. Find out how long it would take for your balance to pass a specific threshold with the assumption that you don't make any additional deposits.*/

function depositProfit($deposit, $rate, $threshold) {
    return ceil(log($threshold/$deposit) / log(1 + $rate / 100));
}