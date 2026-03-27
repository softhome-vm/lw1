<?php


$sum = (float) readline('Введите сумму покупки: ');

if ($sum >= 10000) {
    $percent = 20;
} elseif ($sum >= 5000) {
    $percent = 10;
} else {
    $percent = 0;
}

$discountAmount = $sum * $percent / 100;
$toPay = $sum - $discountAmount;

echo "Сумма без скидки: $sum\n";
echo "Скидка: $percent% (" . $discountAmount . ")\n";
echo "К оплате: $toPay\n";
