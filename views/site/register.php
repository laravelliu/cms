<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/18
 * Time: 15:06
 */
?>

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
        <h3>欢迎注册<?=COMPANY_NAME?></h3>
        <p>注册成为<?=COMPANY_NAME?>中的一员</p>
        <form class="m-t" role="form" action="login.html">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" required="">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="">
            </div>
            <div class="form-group">
                <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

            <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
        </form>
        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

