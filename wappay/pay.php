<?php
/* *
 * 功能：支付宝手机网站支付接口(alipay.trade.wap.pay)接口调试入口页面
 * 版本：2.0
 * 修改日期：2016-11-01
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 请确保项目文件有可写权限，不然打印不了日志。
 */

header("Content-type: text/html; charset=utf-8");


require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'service/AlipayTradeService.php';
require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'buildermodel/AlipayTradeWapPayContentBuilder.php';
require dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'./../config.php';
if (!empty($_POST['WIDout_trade_no'])&& trim($_POST['WIDout_trade_no'])!=""){
    //商户订单号，商户网站订单系统中唯一订单号，必填
    $out_trade_no = $_POST['WIDout_trade_no'];

    //订单名称，必填
    $subject = $_POST['WIDsubject'];

    //付款金额，必填
    $total_amount = $_POST['WIDtotal_amount'];

    //商品描述，可空
    $body = $_POST['WIDbody'];

    //超时时间
    $timeout_express="1m";

    $payRequestBuilder = new AlipayTradeWapPayContentBuilder();
    $payRequestBuilder->setBody($body);
    $payRequestBuilder->setSubject($subject);
    $payRequestBuilder->setOutTradeNo($out_trade_no);
    $payRequestBuilder->setTotalAmount($total_amount);
    $payRequestBuilder->setTimeExpress($timeout_express);

    $payResponse = new AlipayTradeService($config);
    $result=$payResponse->wapPay($payRequestBuilder,$config['return_url'],$config['notify_url']);

    return ;
}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>陌生人饭局 v2.0支付平台</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css" rel="stylesheet">
<style>
    *{
        margin:0;
        padding:0;
    }
    ul,ol{
        list-style:none;
    }
    body{
        font-family: "Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
    }
    .hidden{
        display:none;
    }
    .new-btn-login-sp{
        padding: 1px;
        display: inline-block;
        width: 75%;
    }
    .new-btn-login {
        background-color: #02aaf1;
        color: #FFFFFF;
        font-weight: bold;
        border: none;
        width: 100%;
        height: 30px;
        border-radius: 5px;
        font-size: 16px;
    }
    #main{
        width:100%;
        margin:0 auto;
        font-size:14px;
    }
    .red-star{
        color:#f00;
        width:10px;
        display:inline-block;
    }
    .null-star{
        color:#fff;
    }
    .content{
        margin-top:5px;
    }
    .content dt{
        width:100px;
        display:inline-block;
        float: left;
        margin-left: 20px;
        color: #666;
        font-size: 13px;
        margin-top: 8px;
    }
    .content dd{
        margin-left:120px;
        margin-bottom:5px;
    }
    .content dd input {
        width: 85%;
        height: 28px;
        border: 0;
        -webkit-border-radius: 0;
        -webkit-appearance: none;
    }
    #foot{
        margin-top:10px;
        position: absolute;
        bottom: 15px;
        width: 100%;
    }
    .foot-ul{
        width: 100%;
    }
    .foot-ul li {
        width: 100%;
        text-align:center;
        color: #666;
    }
    .note-help {
        color: #999999;
        font-size: 12px;
        line-height: 130%;
        margin-top: 5px;
        width: 100%;
        display: block;
    }
    #btn-dd{
        margin: 20px;
        text-align: center;
    }
    .foot-ul{
        width: 100%;
    }
    .one_line{
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #eeeeee;
        width: 100%;
        margin-left: 20px;
    }
    .am-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: box;
        width: 100%;
        position: relative;
        padding: 7px 0;
        -webkit-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        background: #1D222D;
        height: 50px;
        text-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        box-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        box-align: center;
    }
    .am-header h1 {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        box-flex: 1;
        line-height: 18px;
        text-align: center;
        font-size: 18px;
        font-weight: 300;
        color: #fff;
    }
    .weui-cell:before {
    content: " ";
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    height: 1px;
    border-top: 1px solid #9e9999;
    color: #e5e5e5;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transform: scaleY(.5);
    transform: scaleY(.5);
    left: 15px;
    z-index: 2;
}
html{
    color: #777b7d;
}
.weui-cells {
    height: 100%;
    font-size: 40px !important;
}
.weui-cells_form{
    height: 100%;
    font-size: 40px !important;
}
.weui-cell{
    height:8rem;
}
.weui-label{
    width: 302px;
}
._btn_{
    margin: auto;
    width: 80%;
    margin-right: 10%;
    margin-left: 10%;
    text-align: center;
    margin-top: 3%;
}
button{
    text-align: center;
    height: 5rem;
    font-size: 40px !important;
}
</style>
</head>
<body bgColor="#ffffff" >
<header class="am-header" style='height:120px'>
        <h1 style='    font-size: 45px;'>陌生人饭局v2.0</h1>
</header>
<div id="main">

    

        <form name=alipayment action='' method=post target="_blank">
            <div >
                <div class="weui-cells weui-cells_form">
                    <!-- 商户订单号 -->
                    <div class="weui-cell">
                        <div class="weui-cell__hd"><label class="weui-label">商户订单号 </label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="text"   id="WIDout_trade_no" name="WIDout_trade_no" readonly>
                        </div>
                    </div>
                    <!-- 订单名称 -->
                    <div class="weui-cell">
                        <div class="weui-cell__hd"><label class="weui-label">订单名称</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="text"   id="WIDsubject" name="WIDsubject" readonly>
                        </div>
                    </div>
                    <!-- 付款金额 -->
                    <div class="weui-cell">
                        <div class="weui-cell__hd"><label class="weui-label">付款金额</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="text"   id="WIDtotal_amount" name="WIDtotal_amount" readonly>
                        </div>
                    </div>
                    <!-- 商品描述： -->
                    <div class="weui-cell">
                        <div class="weui-cell__hd"><label class="weui-label">商品描述：</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="text"   id="WIDbody" name="WIDbody" readonly>
                        </div>
                    </div>
                    <!-- 按钮 -->
                    <div class='_btn_'>
                        <span class="new-btn-login-sp">
                            <button class="new-btn-login" type="submit" style="text-align:center;    height: 90px;">确 认</button>
                        </span>
                        <span class="note-help" style='margin-top:3%;font-size:24px'>如果您点击“确认”按钮，即表示您同意该次的执行操作。</span>
                    </div>

                </div>
            </div>
		</form>
        <div id="foot">
			<ul class="foot-ul">
				<li>
					支付宝版权所有 2015-2018 ALIPAY.COM 
				</li>
			</ul>
		</div>
	</div>
</body>
<script language="javascript">
	function GetDateNow() {
		var vNow = new Date();
		var sNow = "";
		sNow += String(vNow.getFullYear());
		sNow += String(vNow.getMonth() + 1);
		sNow += String(vNow.getDate());
		sNow += String(vNow.getHours());
		sNow += String(vNow.getMinutes());
		sNow += String(vNow.getSeconds());
		sNow += String(vNow.getMilliseconds());
		document.getElementById("WIDout_trade_no").value =  sNow;
		document.getElementById("WIDsubject").value = "测试";
		document.getElementById("WIDtotal_amount").value = "0.01";
        document.getElementById("WIDbody").value = "购买测试商品0.01元";
	}
	GetDateNow();
</script>
</html>