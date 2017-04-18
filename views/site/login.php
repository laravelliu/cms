<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/18
 * Time: 15:06
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\captcha\Captcha;
use yii\bootstrap\ActiveForm;
?>

<div class="loginColumns animated fadeInDown">
    <div class="row">

        <div class="col-md-6">
            <h2 class="font-bold">欢迎来到<?=COMPANY_NAME?>的后台</h2>

            <p>
                Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>

            <p>
                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <p>
                <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
            </p>

        </div>
        <div class="col-md-6">
            <div class="ibox-content">

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => [
                        'class' => 'm-t'
                    ],
                    'fieldConfig' => [
                        'template' => "{input}{error}",
                    ],
                ]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => '用户名'])->label(false); ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => '密码'])->label(false); ?>

                <?php if(YII_ENV_PROD):?>
                <?= $form->field($model, 'verifyCode')->label('验证码')->widget(Captcha::className(), [
                    'options'=>['placeholder'=>'验证码', 'class' => 'form-control'],
                    'captchaAction' => 'site/captcha',
                    'template' => '<div class="row"><div class="col-lg-6">{input}</div><div class="col-lg-6" style="">{image}</div></div>',
                ]) ?>
                <?php endif;?>
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "{input} {label}{error}",
                ])->label('记住我') ?>

                <?= Html::submitButton('登录', ['class' => 'btn btn-primary block full-width m-b']) ?>

                <p class="text-muted text-center">
                    <small>没有账户?</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="<?=Url::to(['/register'])?>">创建账户</a>

                <?php ActiveForm::end(); ?>
                <p class="m-t">
                    <small>技术支持 3 &copy; 2014</small>
                </p>

            </div>
        </div>
    </div>
</div>

