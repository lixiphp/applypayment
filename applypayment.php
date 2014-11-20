<!doctype html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <title>轻松筹-商城</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/jquery.mobile-1.3.2.min.css" />
  <style type="text/css">
    .paypw-err {
      color: #DB2929;
      font-size: 0.95em;
    }

    @media (max-width: 678px) {
        .itemimg img{
            width: 100%;
        }
    }
  </style>
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
<div data-role="page">
  <div data-role="header" data-theme="b">
    <h1>轻松筹-商城</h1>
  </div>
  <div data-role="content">
<form id='alipaysubmit' name='alipaysubmit' action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>
<input type='hidden' name='_input_charset' value='utf-8'/>
<input type='hidden' name='body' value='I7 4790/GTX770四核独显组装电脑主机 整机台式游戏DIY兼容机 '/>
<input type='hidden' name='exter_invoke_ip' value='114.215.188.109'/>
<input type='hidden' name='notify_url' value='http://shop.nuochou.com/alipaynotity'/>
<input type='hidden' name='out_trade_no' value='<?php echo time(); ?>'/>
<input type='hidden' name='payment_type' value='1'/>
<input type='hidden' name='return_url' value='http://shop.nuochou.com/alipayresult'/>
<input type='hidden' name='service' value='create_direct_pay_by_user'/>
<input type='hidden' name='show_url' value='http://shop.nuochou.com/'/>
<input type='hidden' name='subject' value='I7 4790/GTX770四核独显组装电脑主机 整机台式游戏DIY兼容机 '/>
<input type='hidden' name='total_fee' value='5680'/>
<input type='hidden' name='sign' value='cfe000448447ff81a087531f2ef7310f'/>
<input type='hidden' name='sign_type' value='MD5'/>
        <p class="itemimg">
            <a href="images/430x430q90.jpg" target="_blank"><img src="images/430x430q90.jpg"></a>
        </p>
        <h3>I7 4790/GTX770四核独显组装电脑主机 整机台式游戏DIY兼容机 </h3>
        <p><small>游戏达人必选：i7 4790+GTX770+120G固态！体验无比畅快的感觉！原Z87主板免费升级到最新全球第一主板品牌华硕Z97-K全固态主板！硬盘免费升级影驰120G固态硬盘!现在抢购仅需5555元，限量199台，晚了就抢不到了！再送炫光LED风扇+激战2卡+全国顺丰包邮！ </small></p>
        <p>
            <label>促销价格：</label><span style="font-size: 30px; color: #e83535; font-weight: bold;">&yen; 5680</span>
        </p>
        <p>
            <label>市场价格：</label><span style="font-size: 18px; color: #999; text-decoration: line-through;">&yen; 5680</span>
        </p>
      <div>
        <label>购买数量：</label>
        <input type="text" name="price" id="price" value="" />
        <p class="paypw-err" id="price_error"></p>
      </div>
        <p>
            <label>服务承诺：</label><br><span style="font-size: 14px; color: #0099cc; font-weight: bold">顺丰包邮 | 无忧退换货 | 全国联保 </span>
        </p>
      <fieldset data-role="controlgroup">
        <legend>支付方式：</legend>
        <input name="payment_method" id="payment_method-alipay" value="alipay" checked="checked" type="radio">
        <label for="payment_method-alipay"><img src="images/alipay.gif" alt="支付宝"/></label>
      </fieldset>
      <p align="center"><input value="立即购买" type="submit" data-inline="true" /></p>
    </form>
  </div>
  <div data-role="footer" data-theme="b">
    <h4>轻松筹&nbsp;|&nbsp;京ICP备14052685号-1</h4>
  </div>
</div>
<script type="text/javascript">
  var sidBlur = function(){
    if($("#sid").val()==''){
      $("#sid_error").show();
      $("#sid_error").html("学号不能为空");
      return false;
    }
    return true;
  };
  var sidFocus = function(){
    $("#sid_error").hide();
  };
  var userInputBlur = function(){
    if($("#price").val()==''){
      $("#price_error").show();
      $("#price_error").html("购买数量不能为空");
      return false;
    }
    return true;
  };
  var userInputFocus = function(){
    $("#price_error").hide();
  };
  $(document).ready(function(){
    $('#sid').blur(sidBlur);
    $('#sid').focus(sidFocus);
    $('#price').blur(userInputBlur);
    $('#price').focus(userInputFocus);
  });


</script>
</body>
</html>
