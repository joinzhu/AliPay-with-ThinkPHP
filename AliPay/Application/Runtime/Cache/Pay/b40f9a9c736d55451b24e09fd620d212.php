<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PAY</title>
</head>
<body>
    <div>
        <form action="<?php echo U('/Pay/Payold/index');?>" method="post">
            <p>订单号：<input type="text" id="out_trade_no" name="out_trade_no" value=""></p>
            <p>订单名称：<input type="text" name="subject" value="测试"></p>
            <p>付款金额：<input type="text" name="total_fee" value="0.01"></p>
            <p>商品展示网址：<input type="text" name="show_url" value=""></p>
            <p>商品描述：<input type="text" name="body" value="这是测试商品"></p>
            <p><button type="submit">确定订单</button></p>
        </form>
    </div>
</body>
<script type="text/javascript">
        var vNow = new Date();
        var sNow = "";
        sNow += String(vNow.getFullYear());
        sNow += String(vNow.getMonth() + 1);
        sNow += String(vNow.getDate());
        sNow += String(vNow.getHours());
        sNow += String(vNow.getMinutes());
        sNow += String(vNow.getSeconds());
        sNow += String(vNow.getMilliseconds());
        document.getElementById("out_trade_no").value =  sNow;
</script>
</html>