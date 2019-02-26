<?php
/* *
 * 配置文件
 * 版本：3.5
 * 日期：2016-06-25
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 * 安全校验码查看时，输入支付密码后，页面呈灰色的现象，怎么办？
 * 解决方法：
 * 1、检查浏览器配置，不让浏览器做弹框屏蔽设置
 * 2、更换浏览器或电脑，重新登录查询。
 */
 
//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//合作身份者ID，签约账号，以2088开头由16位纯数字组成的字符串，查看地址：https://openhome.alipay.com/platform/keyManage.htm?keyType=partner
$alipay_config['partner']		= '2088621463812003';

//收款支付宝账号，以2088开头由16位纯数字组成的字符串，一般情况下收款账号就是签约账号
$alipay_config['seller_id']	= $alipay_config['partner'];

//商户的私钥,此处填写原始私钥去头去尾，RSA公私钥生成：https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.nBDxfy&treeId=58&articleId=103242&docType=1
$alipay_config['private_key']	= 'MIIEpQIBAAKCAQEAxVm8qB7eGJC27pkuwTsgqWT5HjlCv30oj7s2+WyVqxXQOjxeWKTiCRaWLIx1fkInJmvRvTjHgDMs2Ttjz58bSmigkPmqaioJKFD4aMFoMx07exjY9h3NrBnIDkUPfSi+iKbT998I5wocQwuNd8l/oBt0lmSrhIDjipM4ytwpfZp9jcpMEh1nyXYbY7EzAmTHi5wsmqL28RolhIjO1JVfuWZXMF584vi3ehWspq3taDVweYynAhTMzwGEBr8itjXwctrRyzPWDgxb5YoC4M8LjHoyVIagPOLJGirtmvjde39A1z6PIXNATHBu2ellsJoMM1pSpLQI7NIhqx/zqnrOdQIDAQABAoIBAQC13pkJpkivAs5S3EBGOyNCeJdLzyFALytuKe3jtrnHTPb0dCXOM0VLctE6hMbScEx8D+jeJLFV59Nw7lZxRAN2cy1l7W+rHsoJqXUDtRk94barHp7zUUv1Sl0fKW24vg+5B2VYjOY7ZQnej4rz1XIULrkmz+dw2QbY8gvohzSFVneOOnh9UzmD6y0sMUt44mx3vyZ8AKnlHQuKAY0Z6PaXz67M0O2GnlJflTp0JbJXGK8pQ+PAn/ZIXAXK8Jia1GSUskvl04E/XJk+Q9OEoMIkjzCIA9Je2zoswIhCfBoDFt8rKOyVr74wufLhqU3S+M8kDXSJzfT0W5MeMaNMxkABAoGBAOwTBhJo83I8QbVIDrCrHVZtDe6LPQ7zZAK+zRyCB4jevZsaql3kEvNnnFWg+jhwYqU6/tQNomiLfOdhFhZXx+oRrBSVeLkGGw6MDTnbdE8X5vuq6Z0FQeuDDX3J/HsQ0GILlOnaWeWiJy5R92Bm9lpjje+jZ31HId/+EAQQJ5J1AoGBANYB/Tc0Bk7oJakZUYjb+dnj/ti1SX+6iorYQper/6eMDBQcn07CWkqzrnwHWJCDD2F0jxdh0sAOM9SNJoymq3izc6y2XocAy/ttz8nILjOBkt6rsoBH//o6G0vTV0+MrHQBfmDNppIn+KJCjHsSPK934qms+O4K+VnLj4f7ZswBAoGABQHKSS2srCmXAy9KEHkwoBqkBwExBFYpMt21H/uqCT8gKmAAaQljVYJHEJHffL71eKetq/W2Eh2TQp0OiN7HwLErQyyAaPw2KrLRvP5okxzgq0nOtqPb6BDZgmd8UWfj45B3UhZtfa9YwWS/qG3Gn9gotIJ0uXV+xG9xC4UEMdkCgYEAsiWHvxtcoPTY3NIJsG7Fpt8HNyh6HYyQZZIupQl10Ohg6aEF8E8TUJoQhoiq7elbtVmM//7brCpmdOpnC7B2jwx7H2vUdndwVkWMMkGkTBXxx9CPz/+fk5IpRM6SINNOf2b65+RpY8NIUvIo9Q4yXDLlCS/HLIkQFvK/8YeShAECgYEA4MBRyPhrTcoXCgSqlcH+89/jxn4JoWc8tFAc/Do++tUyI6pQDEuKO+ZTPL0UATosLhY7URLfJ0JT8ITC+TAhNv2IsH4bs/Gm/wcla/WWC91MF83XOJmFxfLOgxzkzJnfLY8e9T83cTxsrd+fNNoGe1As19lW0WlWwFAlQiJ15mA=';


//支付宝的公钥，查看地址：https://openhome.alipay.com/platform/keyManage.htm?keyType=partner
$alipay_config['alipay_public_key']= 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCnxj/9qwVfgoUh/y2W89L6BkRAFljhNhgPdyPuBV64bfQNN1PjbCzkIM6qRdKBoLPXmKKMiFYnkd6rAoprih3/PrQEB/VsW8OoM8fxn67UDYuyBTqA23MML9q1+ilIZwBC2AQ2UBVOrFXfFl75p6/B5KsiNG9zpgmLCUYuLkxpLQIDAQAB';

// 服务器异步通知页面路径  需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['notify_url'] = "http://商户网关网址/alipay.wap.create.direct.pay.by.user-PHPUTF-8/notify_url.php";

// 页面跳转同步通知页面路径 需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['return_url'] = "http://商户网址/alipay.wap.create.direct.pay.by.user-PHP-UTF-8/return_url.php";

//签名方式
$alipay_config['sign_type']    = strtoupper('RSA');

//字符编码格式 目前支持utf-8
$alipay_config['input_charset']= strtolower('utf-8');

//ca证书路径地址，用于curl中ssl校验
//请保证cacert.pem文件在当前文件夹目录中
$alipay_config['cacert']    = getcwd().'\\cacert.pem';

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$alipay_config['transport']    = 'http';

// 支付类型 ，无需修改
$alipay_config['payment_type'] = "1";
		
// 产品类型，无需修改
$alipay_config['service'] = "alipay.wap.create.direct.pay.by.user";

//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


?>