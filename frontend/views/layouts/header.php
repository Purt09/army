<?php

use core\entities\News\News;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$news = News::find()->where(['important' => true])->limit(5)->orderBy('id DESC')->all();

?>
<style>

    .slider {
        position: relative;
        overflow: hidden;
    }

    .slider__wrapper {
        display: flex;
        transition: transform 0.6s ease;
    }

    .slider__item {
        flex: 0 0 50%;
        max-width: 20%;
    }

    .slider__control {
        position: absolute;
        top: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        color: #fff;
        text-align: center;
        opacity: 0.5;
        height: 50px;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, .5);
    }

    .slider__control:hover,
    .slider__control:focus {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: .9;
    }

    .slider__control_left {
        left: 0;
    }

    .slider__control_right {
        right: 0;
    }

    .slider__control::before {
        content: '';
        display: inline-block;
        width: 20px;
        height: 20px;
        background: transparent no-repeat center center;
        background-size: 100% 100%;
    }

    .slider__control_left::before {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .slider__control_right::before {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .slider__item > div {
        line-height: 250px;
        font-size: 100px;
        text-align: center;
    }
</style>
<div class="background_header">
    <div class="col-sm-2">
        <div style="text-align: left;">
            <?= \frontend\widget\EmblemaWidget::widget() ?>
        </div>

    </div>
    <?php /*
    <СЛАЙДЕР>
*/ ?>
    <div class="col-sm-8">

        <div>
            <div class="slider">
                <div class="slider__wrapper">
                    <?php if (isset($news)): ?>
                        <?php foreach ($news as $new): ?>
                            <div class="slider__item">
                                <div style="height: 250px;">
                                    <a href="<?= '/news/' . $new->id ?>">
                                        <div class="col-md-12 item active">
                                            <img src="<?= $new->img ?>" class="img-responsive center-block"
                                                 style="height: 25vh;">
                                            <div class="carousel-caption">
                                                <h3 style="font-size: 18px; text-shadow: 1px 1px 2px red, 0 0 1em black, 0 0 0.2em black;"><?= mb_strimwidth($new->title, 0, 50, "..."); ?></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <a class="slider__control slider__control_left" href="#" role="button"></a>
                <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
            </div>
        </div>
    </div>
    <?php /*
<!СЛАЙДЕР>
*/ ?>
    <div class="col-sm-2">
        <div style="text-align: right; ">
            <img src="/img/эмбвка.png" style="  width: auto;  height: 25vh; position: relative;">
        </div>
    </div>
</div>

<div class="wrapper">
    <header class="main-header">

        <?= Html::a('<span class="logo-mini">Меню</span><span class="logo-lg"> Главная </span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>


        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu" style="float: left">

                <ul class="nav navbar-nav">
                    <?php if (Yii::$app->user->isGuest): ?>
                        <li class="dropdown messages-menu"  style="background-color: #D81B60;">
                            <a href="/moodle/index.php">
                                Онлайн обучение
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="dropdown messages-menu">
                            <form action="http://5f.vka/moodle/autoauth.php">
                                <input type="text" name="username" value="<?= Yii::$app->user->identity->username ?>"
                                       style="display: none">
                                <input type="text" name="password" value="<?= Yii::$app->user->identity->password ?>"
                                       style="display: none">
                                <button type="submit" style="height: 50px;" class="btn bg-maroon">
                                    Онлайн обучение
                                </button>
                            </form>
                        </li>
                    <?php endif; ?>
                    <li class="dropdown messages-menu">
                        <a href="http://rashod.vka/">
                            Расход
                        </a>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            Планы
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="menu">
                                <li>
                                    <a href="/site/view-plan?alias=fak_plan_month">
                                        План факультета на месяц
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/view-plan?alias=fak_plan_year">
                                        План факультета на год
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/view-plan?alias=fak_plan_yms">
                                        Планы УМС
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/view-plan?alias=academy_plan_month">
                                        Планы академии на месяц
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/view-plan?alias=learning_advice">
                                        План уч. совета на год
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/view-plan?alias=VNO">
                                        ВНО
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/view-plan?alias=PISP">
                                        ПИСП
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            Образовательная деятельность
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="menu">
                                <li>
                                    <a href="/time/plan/test">
                                        Итоги успеваемости за факультет
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/plan/test">
                                        Итоги успеваемости по курсам
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/plan/test">
                                        Итоги успеваемости по уч. гр. на факультете
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/plan/test">
                                        Итоги успеваемости по уч. гр. в подразделении
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/plan/test">
                                        Общий рейтинг курсантов
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            Методическая деятельность
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="menu">
                                <li>
                                    <a href="/time/method/cel-academy">
                                        График контроля
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/method/cel-fakultet">
                                        Открытые и показательные занятия
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/method/pisp">
                                        Повышение квалификации
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            Научная работа
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="menu">
                                <li>
                                    <a href="/time/science/vno">
                                        Конференции
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/science/pisp">
                                        Конкурсы
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/science/pisp">
                                        Олимпиады
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <?php if (Yii::$app->user->isGuest): ?>
                        <li class="dropdown messages-menu">
                            <a href="/login">
                                Вход
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="dropdown messages-menu">
                            <a href="/lk/profile/view?id=<?= Yii::$app->user->identity->base->id ?>">
                                Личный кабинет(<?= Yii::$app->user->identity->base->fio ?>)
                            </a>
                        </li>
                        <li class="dropdown messages-menu">
                            <a href="/logout">
                                Выход
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <script>
          'use strict';
          var multiItemSlider = (function () {
            return function (selector, config) {
              var
                  _mainElement = document.querySelector(selector), // основный элемент блока
                  _sliderWrapper = _mainElement.querySelector('.slider__wrapper'), // обертка для .slider-item
                  _sliderItems = _mainElement.querySelectorAll('.slider__item'), // элементы (.slider-item)
                  _sliderControls = _mainElement.querySelectorAll('.slider__control'), // элементы управления
                  _sliderControlLeft = _mainElement.querySelector('.slider__control_left'), // кнопка "LEFT"
                  _sliderControlRight = _mainElement.querySelector('.slider__control_right'), // кнопка "RIGHT"
                  _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), // ширина обёртки
                  _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width), // ширина одного элемента
                  _positionLeftItem = 0, // позиция левого активного элемента
                  _transform = 0, // значение транфсофрмации .slider_wrapper
                  _step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
                  _items = [], // массив элементов
                  _interval = 0,
                  _config = {
                    isCycling: false, // автоматическая смена слайдов
                    direction: 'right', // направление смены слайдов
                    interval: 5000, // интервал между автоматической сменой слайдов
                    pause: true // устанавливать ли паузу при поднесении курсора к слайдеру
                  };

              for (var key in config) {
                if (key in _config) {
                  _config[key] = config[key];
                }
              }

              // наполнение массива _items
              _sliderItems.forEach(function (item, index) {
                _items.push({item: item, position: index, transform: 0});
              });

              var position = {
                getItemMin: function () {
                  var indexItem = 0;
                  _items.forEach(function (item, index) {
                    if (item.position < _items[indexItem].position) {
                      indexItem = index;
                    }
                  });
                  return indexItem;
                },
                getItemMax: function () {
                  var indexItem = 0;
                  _items.forEach(function (item, index) {
                    if (item.position > _items[indexItem].position) {
                      indexItem = index;
                    }
                  });
                  return indexItem;
                },
                getMin: function () {
                  return _items[position.getItemMin()].position;
                },
                getMax: function () {
                  return _items[position.getItemMax()].position;
                }
              }

              var _transformItem = function (direction) {
                var nextItem;
                if (direction === 'right') {
                  _positionLeftItem++;
                  if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) > position.getMax()) {
                    nextItem = position.getItemMin();
                    _items[nextItem].position = position.getMax() + 1;
                    _items[nextItem].transform += _items.length * 100;
                    _items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
                  }
                  _transform -= _step;
                }
                if (direction === 'left') {
                  _positionLeftItem--;
                  if (_positionLeftItem < position.getMin()) {
                    nextItem = position.getItemMax();
                    _items[nextItem].position = position.getMin() - 1;
                    _items[nextItem].transform -= _items.length * 100;
                    _items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
                  }
                  _transform += _step;
                }
                _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
              }

              var _cycle = function (direction) {
                if (!_config.isCycling) {
                  return;
                }
                _interval = setInterval(function () {
                  _transformItem(direction);
                }, _config.interval);
              }

              // обработчик события click для кнопок "назад" и "вперед"
              var _controlClick = function (e) {
                if (e.target.classList.contains('slider__control')) {
                  e.preventDefault();
                  var direction = e.target.classList.contains('slider__control_right') ? 'right' : 'left';
                  _transformItem(direction);
                  clearInterval(_interval);
                  _cycle(_config.direction);
                }
              };

              var _setUpListeners = function () {
                // добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
                _sliderControls.forEach(function (item) {
                  item.addEventListener('click', _controlClick);
                });
                if (_config.pause && _config.isCycling) {
                  _mainElement.addEventListener('mouseenter', function () {
                    clearInterval(_interval);
                  });
                  _mainElement.addEventListener('mouseleave', function () {
                    clearInterval(_interval);
                    _cycle(_config.direction);
                  });
                }
              }

              // инициализация
              _setUpListeners();
              _cycle(_config.direction);

              return {
                right: function () { // метод right
                  _transformItem('right');
                },
                left: function () { // метод left
                  _transformItem('left');
                },
                stop: function () { // метод stop
                  _config.isCycling = false;
                  clearInterval(_interval);
                },
                cycle: function () { // метод cycle
                  _config.isCycling = true;
                  clearInterval(_interval);
                  _cycle();
                }
              }

            }
          }());

          var slider = multiItemSlider('.slider', {
            isCycling: true
          })

        </script>
    </header>
