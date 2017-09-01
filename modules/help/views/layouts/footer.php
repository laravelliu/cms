<?php
use yii\helpers\Url;

?>
<footer class="footer" style=" background:#252c34;">
        <div class="container">
            <div class="row row1">
                <div class="col-md-3 col-sm-3 col-xs-6 h_256">
                    <div class="about-item scrollpoint sp-effect2">
                        <p class="p1"><i class="icon iconfont"></i></p>
                        <p class="p2">帮助中心</p>
                        <p class="p3">使用过程中遇到的问题，包括产品描述、使用方法、功能介绍、报告解读，都可以在这找到答案</p>
                        <p class="p4"><a href="<?=Url::to(['/help'])?>">点击前往&gt;&gt;</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 h_256">
                    <div class="about-item scrollpoint sp-effect2">
                        <p class="p1"><i class="icon iconfont"></i></p>
                        <p class="p2">在线反馈</p>
                        <p class="p3">时刻用心聆听您对我们的功能建议、服务评价、产品吐槽，为您时刻准备着</p>
                        <p class="p4"><a href="http://1024.testin.cn/">点击前往&gt;&gt;</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 h_256">
                    <div class="about-item scrollpoint sp-effect2">
                        <p class="p1"><i class="icon iconfont"></i></p>
                        <p class="p2">销售咨询</p>
                        <p class="p3">由销售经理为你解答购买过程中各类问题，帮您选择最优的测试解决方案</p>
                        <p class="p4">400-1001-7555</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 h_256">
                    <div class="about-item scrollpoint sp-effect2">
                        <p class="p1"><i class="icon iconfont">&#xe65c</i></p>
                        <p class="p2">代理加盟</p>
                        <p class="p3">淘金移动互联网，把握无限云商机。Testin助力您的创业梦想，代理招商进行中</p>
                        <p class="p4"><a href="http://cooperation.testin.cn">点击前往&gt;&gt;</a></p>
                    </div>
                </div>

            </div>

            <div class="footer-bottom clearfix">
                <div class="left">
                    <div>
                        <p class="p1"><a href="<?=Url::to(['/about'])?>" style="color: #fff;">关于我们</a></p>
                        <p class="for_record">Testin<br>北京云测信息技术有限公司 京ICP备11040545号</p>
                    </div>
                </div>

                <div class="right">
                    <div>
                        <div class="social">
                            <a href="http://wpa.b.qq.com/cgi/wpa.php?ln=2&amp;uin=800074282" class="scrollpoint sp-effect3 active animated fadeInDown" target="_blank"><i class="icon iconfont"></i></a>
                            <a tabindex="0" class="scrollpoint sp-effect3 active animated fadeInDown" data-toggle="popover" data-placement="top" data-trigger="focus" title="" href="javascript:;" data-original-title="二维码"><i class="icon iconfont"></i></a>
                            <div class="erwei-pic">
                                <p>请扫描二维码</p>
                                <img src="/help/images/erweima.jpg" alt="">
                            </div>
                            <a href="http://weibo.com/testincn" class="scrollpoint sp-effect3 active animated fadeInDown" target="_blank"><i class="icon iconfont"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </footer>
<!--footer end-->