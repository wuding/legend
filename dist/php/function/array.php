<?php
/**
 * 时间积起
 */
function time_array()
{
}

/**
 * 字符串数组值
 */
$str = 'php';
# $str['name'] = array('dogstart');
# var_dump($str);

/**
 * SQL 批量插入数据语句生成
 */
$lottery_numbers = [
        '74934',
        '60592',
        '49108',
        '05560',
        '91161',
        '47598',
        '33091',
        '76070',
        '80867',
        '82944',
        '82656',
        '27286',
        '80070',
        '51140',
        '80564',
        '21677',
        '39668',
        '70197',
        '97339',
        '14542',
        '55381',
        '47832',
        '37061',
        '24760',
        '19530',
        '13636',
        '74534',
        '13585',
        '75910',
        '51546',
        '04026',
        '94804',
        '40623',
        '08971',
        '79923',
        '24720',
        '41489',
        '21311',
        '77593',
        '88878',
        '67313',
        '56269',
        '61324',
        '31125',
        '03934',
    ];

$issue_number = 385;

$sql_data = [];
$sql_values = [];
$sql_statement = 'INSERT INTO `game_lottery` (`game_id`, `game_period_id`, `lottery`, `desc`, `created_at`, `updated_at`) VALUES ';
foreach ($lottery_numbers as $lottery_number) {
    $sql_data[$issue_number] = $lottery_number;
    $sql_values[] = "('4', '$issue_number', '$lottery_number', '', now(), now())";
    $issue_number++;
}
# print_r($sql_data);
$sql_statement .= implode(', ' . PHP_EOL, $sql_values);
echo $sql_statement .= ';';