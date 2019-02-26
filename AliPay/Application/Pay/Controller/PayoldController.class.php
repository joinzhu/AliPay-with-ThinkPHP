<?php
namespace Pay\Controller;
use Think\Controller;
class PayoldController extends Controller {
    public function index(){

        require_once("./ThinkPHP/Library/AliPay/wappay_old/alipay.config.php");
        require_once("./ThinkPHP/Library/AliPay/wappay_old/lib/alipay_submit.class.php");

        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = I('out_trade_no');

        //订单名称，必填
        $subject = I('subject');

        //付款金额，必填
        $total_fee = I('total_fee');

        //收银台页面上，商品展示的超链接，可空
        $show_url = I('show_url');

        //商品描述，可空
        $body = I('body');

        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
                header("Location:wxredrict?out_trade_no=".$out_trade_no."&subject=".$subject."&total_fee=".$total_fee."&show_url=".$show_url."&body=".$body);
            exit();
        }


        $parameter = array(
            "service"       => $alipay_config['service'],
            "partner"       => $alipay_config['partner'],
            "seller_id"  => $alipay_config['seller_id'],
            "payment_type"  => $alipay_config['payment_type'],
            "notify_url"    => $alipay_config['notify_url'],
            "return_url"    => $alipay_config['return_url'],
            "_input_charset"    => trim(strtolower($alipay_config['input_charset'])),
            "out_trade_no"  => $out_trade_no,
            "subject"   => $subject,
            "total_fee" => $total_fee,
            "show_url"  => $show_url,
            //"app_pay" => "Y",//启用此参数能唤起钱包APP支付宝
            "body"  => $body,
        );



        //建立请求
        $alipaySubmit = new \AlipaySubmit($alipay_config);
        $html_text = $alipaySubmit->buildRequestForm($parameter,"get", "确认");
        echo $html_text;
    }

    public function wxredrict(){
         if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') === false ) {

            $post_data = array(
                'out_trade_no'=> $_GET['out_trade_no'],
                'subject'=> $_GET['subject'],
                'total_fee'=> $_GET['total_fee'],
                'show_url'=> $_GET['show_url'],
                'body'=> $_GET['body']
            );

            header("Location:index?".http_build_query($post_data));

         }else{

            $img1 = "http://userm.mairuan.com/static/images/i_44_usercenter_m.png";

            if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){
                $img2 = "http://userm.mairuan.com/static/images/i_43_usercenter_m.png";
            }else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android')){
                $img2 = "http://userm.mairuan.com/static/images/i_42_usercenter_m.png";
            }else{
                $img2 = "http://userm.mairuan.com/static/images/i_42_usercenter_m.png";
            }

            $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];

            echo '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>收银台</title>
                            <meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1; user-scalable=no;">
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                            <link rel="stylesheet" type="text/css" href="http://userm.mairuan.com/static/css/public.css">
                            <style type="text/css">
                                html{font-size:10vw;}
                                .flex_center{display:flex;align-items:center;justify-content:flex-start;}
                                .top_distance{padding-top:4rem;}
                            </style>
                        </head>
                        <body>
                            <div class="fs30 ma top_distance" style="width:80%;">
                                <p></p>
                                <p class="flex_center ml30 mr30"><span>点击右上角</span><img src="'.$img1.'" class="w64 h64 ml10 mr10"><span>打开菜单</span></p>
                                <p class="flex_center ml30 mr30"><span>选择</span><img src="'.$img2.'" class="w64 h64 ml10 mr10"><span>在浏览器打开</span></p>
                                <!--p class="ma mt60 mt20 ml20 pt20 pb20 pl20 pr20 fs24" style="border:1px dashed #e83a17;border-radius:3px;word-break:break-all;">'.$url.'</p-->
                            </div>
                        </body>
                    </html>';
         }
    }
}