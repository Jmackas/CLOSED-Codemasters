

<?
/*
    $P = 100000;
    $r = 0.005;
    $n = 180;

    $M = $P * $r * (1 + $r) ** $n / ((1 + $r) ** $n - 1);

   echo 'hello';
   ;
   
   */ 
?>







<?php
/***********************************************************************
---Calculate the monthly mortgage repayments using the formulae below---
------Monthly Interest Rate [MIR] = Interest Rate Percentage / 1200-----
---------------Loan Term in Months [LTM] = Loan Term * 12---------------
-------------------------Power = (1 + MIR) ^ LTM------------------------
----------Repayments = Loan Amount * MIR * Power / (Power - 1)----------
***********************************************************************/

$loan = 100000;
$rate = 0.005;
$term = 180;

$power = (1 + $rate) ** $term;

$repayments = $loan * $rate * $power / ($power - 1);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Construction of Mortgage Equation</title>
</head>

<body>
    
    <h2>Mortgage Repayment</h2>
    
    <p><?php echo $repayments;?></p>
    
    <p><a href="mcalc-09.php">Next iteration</a></p>
</body>