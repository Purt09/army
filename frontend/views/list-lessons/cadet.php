<?php
/**
 * @var $this \yii\web\View
 * @var $semesters \core\entities\Education\Semester[]
 */

$this->title = '';
?>

<!--<section class="content">-->
<!---->
<!--    <div class="container mb-3">-->
<!---->
<!--        <h1 class="text-center mt-3">Расписание занятий Осень 2020-2021</h1>-->
<!--        <hr/>-->
<!--    </div>-->
<!--    <div class="col-sm-12">-->
<!--        <div class="col-sm-3 kafedra_block">-->
<!--            <div class="box box-primary">-->
<!--                <div class="box-body box-profile">-->
<!---->
<!--                    <div class="user_photo">-->
<!--                        <img class="user_photo img-responsive" src="/img/эмб.png" alt="User profile picture">-->
<!--                    </div>-->
<!---->
<!--                    <h3 class="profile-username text-center">51 КАФЕДРА</h3>-->
<!---->
<!--                    <ul class="list-group list-group-unbordered">-->
<!--                        <li class="list-group-item" style="">-->
<!---->
<!--                            <a download href="/lessons/20-21/561.xls">561 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/571.xls">571 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/581_1.xls">581/1 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/581_2.xls">581/2 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/591_1.xls">591/1 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/591_2.xls">591/2 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/501.xls">501 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="col-sm-3 kafedra_block">-->
<!--            <div class="box box-primary">-->
<!--                <div class="box-body box-profile">-->
<!---->
<!--                    <div class="user_photo">-->
<!--                        <img class="user_photo img-responsive" src="/img/эмб52.png" alt="User profile picture">-->
<!--                    </div>-->
<!---->
<!--                    <h3 class="profile-username text-center">52 КАФЕДРА</h3>-->
<!---->
<!--                    <ul class="list-group list-group-unbordered">-->
<!--                        <li class="list-group-item" style="">-->
<!--                            <a download href="/lessons/20-21/562-1.xls">562/1 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item" style="">-->
<!--                            <a download href="/lessons/20-21/562-2.xlsx">562/2 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/572-01.xls">572/1 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/572-02.xls">572/2 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/582.xls">582 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/592.xls">592 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/502.xls">502 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="col-sm-3 kafedra_block">-->
<!--            <div class="box box-primary">-->
<!--                <div class="box-body box-profile">-->
<!---->
<!--                    <div class="user_photo">-->
<!--                        <img class="user_photo img-responsive" src="/img/эмб53.jpg" alt="User profile picture">-->
<!--                    </div>-->
<!---->
<!--                    <h3 class="profile-username text-center">53 КАФЕДРА</h3>-->
<!---->
<!--                    <ul class="list-group list-group-unbordered">-->
<!--                        <li class="list-group-item" style="">-->
<!---->
<!--                            <a download href="/lessons/20-21/563.xlsx">563 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/573.xls">573 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/583.xls">583 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/593.xls">593 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/503.xls">503 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-3 kafedra_block">-->
<!--            <div class="box box-primary">-->
<!--                <div class="box-body box-profile">-->
<!---->
<!--                    <div class="user_photo">-->
<!--                        <img class="user_photo img-responsive" src="/img/эмб55.jpg" alt="User profile picture">-->
<!--                    </div>-->
<!---->
<!--                    <h3 class="profile-username text-center">55 КАФЕДРА</h3>-->
<!---->
<!--                    <ul class="list-group list-group-unbordered">-->
<!--                        <li class="list-group-item" style="">-->
<!---->
<!--                            <a download href="/lessons/20-21/565.xls">565 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/575.xlsx">575 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/585.xls">585 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/595.xls">595 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                        <li class="list-group-item">-->
<!--                            <a download href="/lessons/20-21/505.xls">505 УЧЕБНАЯ ГРУППА</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!---->
<!---->
<!--</section>-->
<section class="row">
    <?php if (isset($semesters)): ?>
        <?php foreach ($semesters as $semester): ?>
            <div class="content col-sm-12">

                <div class=mb-3">

                    <h1 class="text-center mt-3"><?= $semester->title ?></h1>
                    <hr/>

                    <?php if (isset($semester->timetables)): ?>
                        <div class="col-sm-3 kafedra_block">
                            <div class="box box-primary">
                                <div class="box-body box-profile">

                                    <div class="user_photo">
                                        <img class="user_photo img-responsive" src="/img/%D1%8D%D0%BC%D0%B151.png"
                                             alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">51 КАФЕДРА</h3>

                                    <ul class="list-group list-group-unbordered">
                                        <?php foreach ($semester->timetables as $timetable): ?>
                                            <?php if ($timetable->unit_id == 2 && !$timetable->summary): ?>
                                                <li class="list-group-item" style="">
                                                    <?php if (isset($timetable->mediaMain->file)): ?>
                                                        <a download
                                                           href="/upload/<?= $timetable->mediaMain->file ?>"><?= $timetable->title ?></a>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 kafedra_block">
                            <div class="box box-primary">
                                <div class="box-body box-profile">

                                    <div class="user_photo">
                                        <img class="user_photo img-responsive" src="/img/%D1%8D%D0%BC%D0%B152.png"
                                             alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">52 КАФЕДРА</h3>

                                    <ul class="list-group list-group-unbordered">

                                        <?php foreach ($semester->timetables as $timetable): ?>
                                            <?php if ($timetable->unit_id == 28 && !$timetable->summary): ?>
                                                <li class="list-group-item" style="">
                                                    <a download
                                                       href="/uploads/media/<?= $timetable->mediaMain->file ?>"><?= $timetable->title ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 kafedra_block">
                            <div class="box box-primary">
                                <div class="box-body box-profile">

                                    <div class="user_photo">
                                        <img class="user_photo img-responsive" src="/img/%D1%8D%D0%BC%D0%B153.png"
                                             alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">53 КАФЕДРА</h3>

                                    <ul class="list-group list-group-unbordered">
                                        <?php foreach ($semester->timetables as $timetable): ?>
                                            <?php if ($timetable->unit_id == 30 && !$timetable->summary): ?>
                                                <li class="list-group-item" style="">
                                                    <a download
                                                       href="/uploads/media/<?= $timetable->mediaMain->file ?>"><?= $timetable->title ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 kafedra_block">
                            <div class="box box-primary">
                                <div class="box-body box-profile">

                                    <div class="user_photo">
                                        <img class="user_photo img-responsive" src="/img/%D1%8D%D0%BC%D0%B155.gif"
                                             alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">55 КАФЕДРА</h3>

                                    <ul class="list-group list-group-unbordered">
                                        <?php foreach ($semester->timetables as $timetable): ?>
                                            <?php if ($timetable->unit_id == 31 && !$timetable->summary): ?>
                                                <li class="list-group-item" style="">
                                                    <a download
                                                       href="/uploads/media/<?= $timetable->mediaMain->file ?>"><?= $timetable->title ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</section>
<style type="text/css">
    .user_photo {
        border-radius: 12px;
        width: 240px;
        height: 320px;
    }

    .user_photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 0 0;
    }
</style>
