<?php

declare(strict_types=1); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <pre>
<?php
function printPurchased(array $items, callable $extraDataFunc): void
{
    echo '<table border = "1">';
    echo '<tr>';
    echo '<th>購入日</th>';
    echo '<th>商品名</th>';
    echo '<th>価格</th>';
    echo '<th>その他</th>';
    echo '</tr>';
    foreach ($items as $item) {
        echo '<tr>';
        echo '<td>', $item['date'], '</td>';
        echo '<td>', $item['name'], '</td>';
        echo '<td>', $item['price'], '</td>';
        echo '<td>', $extraDataFunc($item), '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

$items = [
    [
        'user-id' => 'tanaka-1234',
        'date' => '2018-11-21',
        'name' => 'ドレスシャツ',
        'price' => '2160',
        'color' => 'white',
        'size' => 'M',
        'item-number' => '91025',
        'serial' => 'PLGO1219'
    ],
    [
        'user-id' => 'tanaka-1234',
        'date' => '2018-09-05',
        'name' => 'キッズパジャマ',
        'price' => '1620',
        'color' => 'red',
        'size' => '110',
        'item-number' => '90081',
        'serial' => 'ZAQ80124'
    ],
];

echo '<h3>ユーザのマイページ内の購入履歴</h3>';
printPurchased(
    $items,
    function ($item) {
        return "色：{$item['color']} サイズ：{$item['size']}";
    }
);

echo '<h3>販売事業者専用ページ内の購入履歴</h3>';
printPurchased(
    $items,
    function ($item) {
        return "ユーザID：{$item['user-id']} 商品No：{$item['item-number']}";
    }
);

?>
</pre>
</body>

</html>
