<?php
$this->title = '';
?>


<section class="content">
    <div class="container mb-3">

        <h1 class="text-center mt-3">Расписание кафедр</h1><hr />
    </div>
    <div class="col-sm-12">
        <div class="col-sm-3 kafedra_block">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <div class="user_photo">
                        <img class="user_photo img-responsive" src="/img/эмб.png" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">51 КАФЕДРА</h3>

                    <ul class="list-group list-group-unbordered">
                        <div class="row pad-15">
                            <div class="col-sm-12" style="text-align: center; margin-top: 30px; ">
                                <a href="#" class="btn btn-xs blue"><i class="fa fa-download"></i>СКАЧАТЬ</a>
                            </div>

                    </ul>



                </div>
            </div>
        </div>


        <div class="col-sm-3 kafedra_block">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <div class="user_photo">
                        <img class="user_photo img-responsive" src="/img/эмб52.png" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">52 КАФЕДРА</h3>

                    <ul class="list-group list-group-unbordered">
                        <div class="row pad-15">
                            <div class="col-sm-12" style="text-align: center; margin-top: 30px; ">
                                <a href="#" class="btn btn-xs blue"><i class="fa fa-download"></i>СКАЧАТЬ</a>
                            </div>

                    </ul>



                </div>
            </div>
        </div>


        <div class="col-sm-3 kafedra_block">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <div class="user_photo">
                        <img class="user_photo img-responsive" src="/img/эмб53.jpg" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">53 КАФЕДРА</h3>

                    <ul class="list-group list-group-unbordered">
                        <div class="row pad-15">
                            <div class="col-sm-12" style="text-align: center; margin-top: 30px; ">
                                <a href="#" class="btn btn-xs blue"><i class="fa fa-download"></i>СКАЧАТЬ</a>
                            </div>

                    </ul>



                </div>
            </div>
        </div>

        <div class="col-sm-3 kafedra_block">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <div class="user_photo">
                        <img class="user_photo img-responsive" src="/img/эмб55.jpg" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">55 КАФЕДРА</h3>

                    <ul class="list-group list-group-unbordered">
                        <div class="row pad-15">
                            <div class="col-sm-12" style="text-align: center; margin-top: 30px; ">
                                <a href="#" class="btn btn-xs blue"><i class="fa fa-download"></i>СКАЧАТЬ</a>
                            </div>

                    </ul>



                </div>
            </div>
        </div>


    </div>




</section>
<style type="text/css">
    .user_photo {
        border-radius: 12px;
        width: 220px;
        margin: auto;
        margin-top: 0;
        height: 300px;
    }

    .user_photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 0 0;
    }
    .kafedra_block h2{
    }
    .btn{

        color:#fff;
        border-radius:30px;
        text-transform: uppercase;
        transform: scale(1.1,1.1);
        transition:all 0.3s ease-out 0s;
    }
    .btn:hover{
        transform: scale(1,1);
        color:#fff;
    }
    .btn i{
        margin-right:15px;
        color:#fff;
    }
    .btn:before {
        content: "";
        position: absolute;
        bottom: -8px;
        left:0px;
        width:100%;
        height: 10px;
        filter: blur(20px);
        border-radius: 30px;
        display: inline-block;
        z-index: -1;
        transition: all 0.3s ease-out 0s;
    }
    .btn:hover:before{
        bottom:0;
        filter: blur(10px);
    }
    .btn.blue{
        background: linear-gradient(to left, #7474bf , #348ac7);
    }
    .btn.blue:before{
        background: linear-gradient(to right,#7474bf,#348ac7);
    }

</style>
