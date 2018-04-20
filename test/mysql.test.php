
<?php
		$trade_status='88888';
		$trade_no='uuuuu';
		$buyer_id='dd';
		$buyer_pay_amount='ccc';


		$con_sql = "UPDATE dataOfYK SET trade_status= ' ".$trade_status. " ' ,trade_no= '  ".$trade_no. " ' ,buyer_id= '  ".$buyer_id.  " ' ,buyer_pay_amount= '  " .$buyer_pay_amount." ' where age ='11'";

		// $sql = 'UPDATE dataOfYK SET trade_status='.$trade_status.' where age =11';
		// $sql = "insert into dataOfYk trade_status= 'trade_status' where age =11";

		var_dump($con_sql);
		$con = mysql_connect("39.108.58.83:3306","root","1234","YK");
		if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("YK", $con);

		if (mysql_query($con_sql,$con))
		{
		echo "created";
		}
		else
		{
		echo "Error: " . mysql_error();
		}

        mysql_close($con);
?>