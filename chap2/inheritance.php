<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    require 'PremiumCheckingAccount.php';

    // $checkingAccount = new CheckingAccount();
    $premiumCheckingAccount = new PremiumCheckingAccount();

    $premiumCheckingAccount->deposit(20);
    
    $premiumCheckingAccount->withdraw(10);

    echo $premiumCheckingAccount->minimumBalance;


    ?>
</body>
</html>