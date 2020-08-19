<?php
/**
 * @var $controller string
 * @var $title string
 * @var $newsPublications \core\entities\News\NewsPublications
 */

$this->title = 'Управление ' . $title;
?>
<div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Новости</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

      <div class="col-md-3 col-sm-6 col-xs-12">
          <a class="box_link" href="<?= \yii\helpers\Url::to("/department/$controller/create-news") ?>">
              <div class="info-box bg-green">
                  <span class="info-box-icon"><i class="fa fa-align-left"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Добавить новость</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                      </div>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
          <a class="box_link" href="<?= \yii\helpers\Url::to("/department/$controller/news") ?>">
              <div class="info-box bg-green">
                  <span class="info-box-icon"><i class="fa fa-align-left"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Управление новостями</span>
                      <span class="info-box-number">Всего новостей: <?= count($newsPublications) ?></span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                      </div>
                  </div>
              </div>
          </a>
      </div>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Статичные страницы</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

      <div class="col-md-3 col-sm-6 col-xs-12">
          <a class="box_link" href="<?= \yii\helpers\Url::to("/department/$controller/main") ?>">
              <div class="info-box bg-light-blue">
                  <span class="info-box-icon"><i class="fa fa-pencil"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Управление главной</span>
                      <span class="info-box-number">Редактирование</span>
                      <span class="info-box-number">страницы</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                      </div>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
          <a class="box_link" href="<?= \yii\helpers\Url::to("/department/$controller/general") ?>">
              <div class="info-box bg-light-blue">
                  <span class="info-box-icon"><i class="fa fa-pencil"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Управление главной</span>
                      <span class="info-box-number">Редактирование</span>
                      <span class="info-box-number">общее</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                      </div>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
          <a class="box_link" href="<?= \yii\helpers\Url::to("/department/$controller/history") ?>">
              <div class="info-box bg-green">
                  <span class="info-box-icon"><i class="fa fa-history"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Управление историей</span>
                      <span class="info-box-number">Редактирование</span>
                      <span class="info-box-number">страницы</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                      </div>
                  </div>
              </div>
          </a>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
          <a class="box_link" href="<?= \yii\helpers\Url::to("/department/$controller/graduate") ?>">
              <div class="info-box bg-green">
                  <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Управление выпускниками</span>
                      <span class="info-box-number">Редактирование</span>
                      <span class="info-box-number">страницы</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                      </div>
                  </div>
              </div>
          </a>
      </div>
            </div>
            <!-- /.box-body -->
        </div>
