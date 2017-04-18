<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/18
 * Time: 15:06
 */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
        <h3>欢迎注册<?=COMPANY_NAME?></h3>
        <p>注册成为<?=COMPANY_NAME?>中的一员</p>
        
        <?php $form = ActiveForm::begin([
            'id' => 'register-form',
            'options' => [
                'class' => 'm-t'
            ],
            'fieldConfig' => [
                'template' => "{input}{error}",
            ],
        ])?>
        <?= $form->field($model, 'username')->textInput(['placeholder' => '用户名'])->label(false); ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => '邮箱'])->label(false); ?>
        <?= $form->field($model, 'name')->textInput(['placeholder' => '姓名'])->label(false); ?>
        <?= $form->field($model, 'password')->textInput(['placeholder' => '密码'])->label(false); ?>
        <?= Html::submitButton('注册', ['class' => 'btn btn-primary block full-width m-b']) ?>
        <p class="text-muted text-center"><small>有<?=COMPANY_NAME?>账号?</small></p>
        <a class="btn btn-sm btn-white btn-block" href="<?=Url::to(['/login'])?>">登录</a>
        <?php ActiveForm::end()?>

        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

