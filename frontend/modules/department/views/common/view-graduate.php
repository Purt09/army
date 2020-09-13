<?php
/**
 * @var $this \yii\web\View
 * @var $cafedra51 \bupy7\pages\models\Page
 * @var $cafedra52 \bupy7\pages\models\Page
 * @var $cafedra53 \bupy7\pages\models\Page
 * @var $cafedra55 \bupy7\pages\models\Page
 *
 */

$this->title = 'Выпускники факультета';

?>

<?= $cafedra51->content ?>
<?= $cafedra52->content ?>
<?= $cafedra53->content ?>
<?= $cafedra55->content ?>





<style type="text/css">

    .logo
    {
        height: 100px;
        text-align: right;
    }

    .logo img
    {
        height: 100%;
    }
    .head_inf{
        max-height: 300px;
        text-align: center;
        background: white;
        border-radius: 20px;
        padding: 15px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

    }

    .inf_block{
        background: #fff;
        border-style: outset;
        border-color: gold;
        padding: 5px;
        min-height: 500px;
    }


    .box{
        position: relative;
        perspective: 1000px;
        margin-top: 30px;

    }
    .box .box-img{
        transform: rotateY(0);
        transition: all 0.50s ease-in-out 0s;
        height: 400px;

    }
    .box:hover .box-img{
        transform: rotateY(-90deg);

    }
    .box .box-img img{
        width: 100%;
        height: 400px;
        object-fit: contain;

    }
    .box .box-content{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        padding: 60px 20px;
        text-align: center;
        background: rgba(0,0,0,0.7);
        transform: rotateY(90deg);
        transition: all 0.50s ease-in-out 0s;
    }
    .box:hover .box-content{
        transform: rotateY(0);
    }
    .box .title{
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
    }
    .box .description{
        overflow: auto;
        overflow-x: hidden;
        height: 100px;
        font-size: 14px;
        line-height: 24px;
        color: #fff;
    }
    .box .title:after,
    .box .description:after{
        content: "";
        width: 80%;
        display: block;
        border-bottom: 1px solid #fff;
        margin: 15px auto;
    }
    .box .social-links{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .box .social-links li{
        display: inline-block;
        margin: 0 10px;
    }
    .box .social-links li a{
        font-size: 20px;
        color: #a6a6a6;
    }
    .box .social-links li a:hover{
        text-decoration: none;
        color: #fff;
    }
    @media only screen and (max-width: 990px) {
        .box{ margin-bottom:20px; }
    }
    @media only screen and (max-width: 479px) {
        .box .box-content{ padding: 20px; }
    }
</style>