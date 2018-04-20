<?php
$trade_status='ee';
$trade_no='qq';
$buyer_id='dd';
$buyer_pay_amount='ccc';
$con_sql = 'insert into dataOfYK (trade_status,trade_no,buyer_id,buyer_pay_amount) value ('.$trade_status.','.$trade_no.','.$buyer_id.','.$buyer_pay_amount.')';

var_dump($con_sql)
?>