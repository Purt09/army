<?php
/**
 * @var $this \yii\web\View
 * @var $semesters \core\entities\Education\Semester[]
 * @var $timetables array
 */

$this->title = '';

?>
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
                                        <?php foreach ($timetables[$semester->id] as $timetable): ?>
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

                                        <?php foreach ($timetables[$semester->id] as $timetable): ?>
                                            <?php if ($timetable->unit_id == 28 && !$timetable->summary): ?>
                                                <?php vardump($timetable) ?>
                                                <li class="list-group-item" style="">
                                                    <a download
                                                       href="/upload/<?= $timetable->mediaMain->file ?>"><?= $timetable->title ?></a>
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
                                        <?php foreach ($timetables[$semester->id] as $timetable): ?>
                                            <?php if ($timetable->unit_id == 30 && !$timetable->summary): ?>
                                                <li class="list-group-item" style="">
                                                    <a download
                                                       href="/upload/<?= $timetable->mediaMain->file ?>"><?= $timetable->title ?></a>
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
                                        <?php foreach ($timetables[$semester->id] as $timetable): ?>
                                            <?php if ($timetable->unit_id == 31 && !$timetable->summary): ?>
                                                <li class="list-group-item" style="">
                                                    <a download
                                                       href="/upload/<?= $timetable->mediaMain->file ?>"><?= $timetable->title ?></a>
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
