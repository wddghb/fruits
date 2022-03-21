<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 支付宝接口设置
// +----------------------------------------------------------------------
return [	
		//应用ID,您的APPID。
		'app_id' => "2016082500310480",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAsEuX1au3dH6nqMcPhj6OjN9zgckfuJax8oHFmYtgN2PU3oVrhH0ZQKrQjEVXaenDEQhpavIQU4qOaFKL8/QtXeZyuw/XgML/MVNEFsThlhOeUbb2mdI9wzFiYVyOPTkyhYc3VOC8kjPbOmlspHqFh9wENerzMPXOqP+SiogNRXhbbAWYqZkPsjCYEjz7/BwYq+fhUVEYmETxIUVkNFhk3ABFL1zFC+WHwV8iNUKsKTmwkTOZnr7igtDmHQzNzLJqAzs+8dapro+p3wdfMF6fiUVuRjtG8fqzcTUirF1mbGoXDDEhWPosQrNFJtkZC67mtB1OIPU0TgVr3oYBKuT/twIDAQABAoIBAGGDTpa3hp//NomaobGlhH/TUTamos8dO4xhz4SgnTXGGIaE0fXUpFUqpnQQHsvMq0MOnhCzl+g9qYt2rUbg9v8LasahepgUQ8dqwSy+9fBnJZkZVMm8isEe3cXwxhSDQLivFCH0tRlBaa+jhJ5tztJZFlMkhCO+svKzesD5hC25+6ej8Ea5XQGnpC0qVqKrSAodTEXY/R9aLSewfhU9F8TlR1Zt5svVPSG+mze/Tn+EfRbjEPqeD5/ahNMhSOad8QqjZJRxGiTeyVsJX7fB+gjjLoqd0/XfUg+MLAYyyGJU9kT5gocOEsgqdalOevQqT3p69CZWl1RzeaH5oH8DrQECgYEA4H7LM6ZQ9dZBOppRaRh9yvbP16xhYydXb+VMR3hiKWIllKc9preaGjzF/3TmjaA/Db+45JpMTBz+sbjP6nv2vGm6EVzhevopzz2spWu62IQwwLy9x1DcRDOzEbYVnaqHyrfVhFZ+OsB8xn7ayiJFUcaGDQiZZepRl7EO6wANhMECgYEAyQkrJB8xiFS4VrKA5USjPfL59vMwdgkT8nfrHeiOvNbMPSr20EuYC2BiwELkNCAD/vuRcqoWkSiFdqLgq9YhMNKpc5UPEV55Ytg/8OL7BhBbfHijNLeRNS8V71Rwudk4v211QIySVNBTICc8m6TGOXf9fpUgQt0mdbDlQGTcyncCgYAodjHhqURGSsuO6Glr68IgZsOnN6aF3H1h6Y4KA6SNmOb1F/+AoO7hc7qsBEHZnNxAeiG08ip2PXOaTJkMxjL+Wn/yyS7Kn3QRqigH2Jbgl1LCKkJ6PhS1JixMMOlMdYPsAZ42L/CoXjEfBZYhgHPF/WYDy1z6hXUXRg5ORMArAQKBgQCYHKvb5Q5hjVj9oIsO7uRll1ezl0bvyOai7EGmm7SFBjH7hmrCKLCeywttVi+9kQv0/vyKuk/g/bwejBdbbeYnPv6gSgTgq49FT0LyTYyKhg3zHITA+rSQfVQnhsjUlpvtnDC/6p0+N3LuPUIKsp6aFURlZwjGDvduza5pDuhQ+QKBgCAaejIk9t6b1Gv/m7cZ6f56loWKv8O2dWyo6Q+97asIQP34Lw2/CApsm5q+cE56u2KmxpiSKiEHzqzpqRpkfEr1onvoO18GoaHyhBbaWM3fjnYHwQDiOa41BdnbZ7KfkzUbKbk0b5gx/MKDrIUi7z4g3DCQb1gr1KKqf3QM1kTL";
		//异步通知地址
		'notify_url' => "http://fruits.winter2018.cn//notify_url",
		
		//同步跳转
		'return_url' => "http://fruits.winter2018.cn//return_url",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAllXgKVtTyCEgyt03ijfc0cTb3VZTsToEpXYcA50Tdrk52G62fv0yL5oYBeok72+qPYPiYqj6e4FYrfbi8lYWYb9rQOh8QnBZJryeoWsVrFJ7Z/MskHK5Yl38n6OM4+DlTO5o37RmUus7MIqabdxwsH+WVJe4nxUwT2pOF2L9ZNiakhprGzXY81MtTFYAWkE08zvULokk+98ZVcKsxHxyL3GYclQS6i+2Us+9utW4U0fCJDbvBngTQqEJ66D2nhiWB93uwZE7nQOuZ7zPzbo3tVvA1zqs0D+L60KoRBvivT87ig8o4ITQKUFrytHiQ8Jvy0HRKkMM2Kd+IBFkNTTFywIDAQAB";
        //日志路径
        'log_path' => "",
];