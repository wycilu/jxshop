<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016101200671113",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEA4E5zLTVSkdNK7noJ2u6mYe+lSjm6sROP2Zw1McwiLxcVgK/BjxR3jizXin7la6cS6dI8C3gYVAUKQrp19QtfhKLmbQfZDD2aagCpsdvnVJuYWQtuQgbj5npjM8f5xBjAPvr/I4aeEYvOyN1d6OE23AlH9dXmFiwSc/Xv2BVTQG4wmmlkh927a57UjLHdAy/odqEnF9giJTlESykjnad2vwy94TYQWAFnn/ZLouZVaUwlG9H9K6CfDV65OlN94AZuvqYXYuVyUnbbEyFNZ3OXlew134KbpjKZFNyeWb8mhG68nGX8kdZPTaGOBBI5alABKwl233el8cxuTO/AkEgGgwIDAQABAoIBAQDTFOBMVdabBjSIkO2/Sj/m/+cTH5pxUxBW3yor74bnu5hvnnXO2Jrdf5NicKIjGXmx8jaxMFXsk0Whn+irLgW4QrgHOJBndX1fbbpDdsaOF1JZ0Wjz15oV5Wx/aRvBDu2zFu6Mlv0fU+rHmZHrOi0vCcjfLmg0y0qeN316Yi8S/Bvb2TbU/VIdh9/FrH3KguQOZjSyp28Ydq6R99gjMI+cqizltROg96P5xqf4BoU41a29cQWLcgd8RAqUECOKgqYIcVxEN3lJ7W98WEbGgAbtsRQRDajH6jyEalPRWvHyiyZJKIVHN9hANzsY9uaLJN9wYwVJ2f+slbVU9xvyv7qhAoGBAPBas7ygplxwMhI9TYbRqTUiJ2TQ1agK/GeTOoQpKnZKyJhD7FdhXZXR3xfiglbKpij9QuEzAQOojQfF2Meu1f3ukuWqSzoEbOIkej+xCMH6I5bXC8uPEtbTHiKOb5aPMCS94oqHDqQSWJfLfViiOmBKmKjxUGVsU+UsvdoT0xqTAoGBAO7oUvK9R2OWC/3MhT5IvD2t2i0aHet15S6a8LoZhJLqGoG1Eqi6nt4jzfsb/K5joHUjm4dlKvMfVafoTcRhp5YplXny7qsdFYbfwHCr6pK9AOV1BS6VcNdYTyRwdNHdRcM5bYXLFWBbYMH8JwNu7d9iaZmJr/K32Vonvl41LapRAoGBAJevpl8Uw+jypab9KUA8cR0nQNVPNoem50Q2lmdx02p0J8RwmWdL+1Ph73mTac58dgDIVLzrA2jbpqWRJw5eOI7ZUbu/jVpAELdnbf9kKrLAulUnwjnlQW5yLkKAwcuy8h899wqV0ZeaPG8P7TtSpqS+bzmvkZ1wkEHBys8mU8QhAoGAevdRWmdaC0P7wBI4sqo1WXnWRkifBcaUw7w0E1V3Czc7lW9hvz7u7l93cbwh/pCA0koVj0bfKGwEZnwHKwEohP26Vh5YAfLiVZ1tK5ERF534jCIDHMsGXZCyi4rmVe6SLb2tRaQVyJa/4piqa/X4sXWx7LkVutQuJ101er/cVUECgYALMbIP2jBFnQdpDt+inl59ZSeGRNITrwGAQ2AbASTcvqzsYo0IzNosW+11vSE5AuDu0StIAAIjT5qyifhWd0/n9KsjbKsIoNLwzQSuoYQvknVYfK8h9CDeyhTAISBvX8Mj0Ryc13oH5ejMkOQRBBIP9wP8sUjrpuze/8vx9usCYg==",
		
		//异步通知地址
        //异步需要外网的支持
		'notify_url' => "http://localhost/pay/notify_url.php",
		
		//同步跳转
		'return_url' => "http://jxshop.com/Order/returnUrl.html",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqSZxVSYJw4qhWAAIhJBK338feFvvlHQVPGZDziiYU5v//GWxz7wWzxjbfIGCZ87V7r3Tpjhx6ZJNqvBAqY7TAVWiJpRYKvO7LCf4EC/g+VWppCEFevtBOOLmZFeWQX/0VlW53iSImeqHIIapfPRoFctbfaoFwvK3tJPt+iX76kcKiLnnxkKCwKB96sugXFBm45MktUv7qBTbmskNI2wWW49l/ZN1kcjTNsIiaOxJjTUxj00FFdI5BCoZrgFBWihhaNLvE8EXmZJnHxtOcLK3OptKWt5gEICHhS0ql22SZN6ySELKHnhbQziITJueuKGCiTH+UMVId2+b9Q6esDjdzwIDAQAB",
);