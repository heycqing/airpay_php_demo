<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2018040902527144",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEAtdVj1xYCxgKzGSZreFyiHdgNfm6rI5E3BQT1suBMkIBIosVI
		/NeQmWSWFSnUUdo+jLIqaaMup5KpqiWe3wqiiCMDjitSByMXrUhD2nZ/O356oRPw
		Sk/ncXbXrqZQHUHALFZWskxa/qwOJdifLPUrZ+tBX/2NuE3EhQo3lJhc5FezVQXH
		InYa4WtcfWrCjUPPNH+0azaO+exi9vAtKDKuQySv1fzrzgoeHXTSmPMN/NYSEWXv
		WvqDRTTVVaeV9mwNpTVITvBtD1QYN01jbEjlGbKPBjClVh89+LROQpqEjDiMD0W2
		gnNSkRN8FitTJbJeATUFT3dKWI+EJRYZ1dSAfQIDAQABAoIBAEBhQWxSGsFJC2iI
		Ndzzz2KJsJ1nSajaLYTVcLjYucMf6JfZCjKbkFL/TjRIDyi8ARGHs4SbhlVGlFPt
		5gZKmalh3ExmAjEMt8FeqMec1QeXjIujp5xoFiYSUeNAd3UkZopMN34BkuZAvPGh
		dRpR5ABzRz5ZY+gxgLcqGuu91oXx/oAUVw2Ko3RL21p50smKaQc5abVsC8asBqf7
		kTTX1zLYhWz5WKBH0L09Db0PEsokzPbkAeQP5StJKCFBBglt2mdRDPPZEXLeriXf
		v2ev9tQofqZh1LH/icxz367borTKiT2omF+D8rJQCqoN5+nLQHdEVHD47D+mCpiB
		qod4UPECgYEA2Q+hMlKvtDK42WRCuxw89zu+g32TG+EigzvDgZB+4UNOEoAtkiXM
		neUtxpN0+Ky4kU/sXm2HClbVSFoeilOvcKjLsA9uzUQDeCmNaLuO/Bdo1l3C4emp
		5683f+lyAkQZjqTH493PvZkP/6VM+PRPVybHbAfrcg7j4pN5tE5sUIsCgYEA1nP2
		ku/4stz0F/fefnfPQVY9aF5qjWmjM32LRceHLz96M+QwHEEDuReZ71uJpaZZtOCI
		KiWykK6q4zsR/VrC7Ps6G4afQ/Wtup0yWddveoyk3RPsx9atbc8B5s96qY2Rh6FH
		9h9n7/wWaEAN2+Uu1vz5L6lHpmoJbWw6ynyQTBcCgYEAl/kOdopYBIVi0KoW4qRx
		tvP4fl2kauek31cvmf5OJ2+VMPTXczTN31r/QsIpKpbbnrnjl3V+D+od6EtYiKbw
		9aLpAbq8bDELcM0++a4f/TZyq2v4L24HDHSsGf2bWiTN9AZBAbRiZ6/L+MSGcOO0
		zSMUivm8ih4Mxa1Vj708ruMCgYEAmkNqoMI8jTWB5OfpxeGbVe2aWMRqM3VE75ok
		oDpqVSN9XWyM6xYdfnyqv9KCDoW+S+2kJWVesNLknHZ2d2BdjakeYISTdoh4wx+n
		A5eEWoxnX5ygnBQiRzY8sPKY0vTCNeVfZX2r/6a/25gQIBkZe48YFR/ZKa1nQK41
		EElQZ1sCgYAyvj3ARtsKcpbXEsRgLhvM4aRaldrbajA8z1cv0Hf2QCIZYv0hhwcO
		mB2ZnMvji6uRRKNAQPW5x4Jr5R8CaZ/8NRahmQ2irrL7lpgklA19i0zCIyr+w7r/
		8296qjWGzgG/YCr5E9jRJixGRQLmOXzdghPw3hp/OjEbMMfrZjddbw==",
		
		//异步通知地址
		'notify_url' => "http://wusiqing.com/airPay/airpay_php/notify_url.php",
		
		//同步跳转
		'return_url' => "http://wusiqing.com/airPay/airpay_php/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtQGLLRMDTtSnj7kbwBUQTtH1dk6oF6ew7GlUDaiwnNjhxnjcH+UiudeGvqREmIjNSsPB5BhVB7oIlEh+nliEVbev4YIgL3U8D5KR68/wcoKoeiKu0Zmj9hxU9v5KO0iiNvzGlCDTKIH1yVBg55HHkmzOL9EoMXG3vNrAFadYk2zpsdsROgs8JYf69tzxvWUtZIqGKXXrQ4nbXdA5FWFYGNej0N6BU1JT438RnkTTeTugYynvYZ4M1rhL69IEfoZge2H3P5PaXHprKuDE40EqiXJrBg+rWtP5srzU+vd+HRnzVGJdBxaO6ebrbBuVUtiP2f1mroOHzP7yBmx3ZscEWwIDAQAB",
		
	
);