<?php
//use yii\helpers\Html;
use yii\easyii\modules\text\api\Text;
use yii\easyii\widgets\CarouselWidget;
$this->title = 'Ваш Выбор';
?>

<header class="header">
    <div class="padding-content">
        <div class="header-content">
            <div class="logo-block">
                <img src="img/logo.png">
            </div>
            <div class="get-a-call-block">
                <div class="header-number">
                    <span><?=Text::get('block-1-phone')?></span>
                </div>
                <a href="" class="get-a-call-button feedback-popup-open">
                    <i aria-hidden="true" class="fa fa-phone"></i>
                    <span>заказать звонок</span>
                </a>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="navigation-menu-block">
        <div class="padding-content">
            <div class="navigation-menu">
                <div class="navigation-link-block">
                    <a href="#areas-and-prices" class="navigation-link">Участки и цены</a>
                </div>
                <div class="navigation-link-block">
                    <a href="#purchase-terms" class="navigation-link">Условия покупки</a>
                </div>
                <div class="navigation-link-block">
                    <a href="#infrastructuer" class="navigation-link">Инфраструктура</a>
                </div>
                <div class="navigation-link-block">
                    <a href="#gallery" class="navigation-link">Галерея</a>
                </div>
                <div class="navigation-link-block">
                    <a href="#faq" class="navigation-link">FAQ</a>
                </div>
                <div class="navigation-link-block">
                    <a href="#documents" class="navigation-link">Документы</a>
                </div>
                <div class="navigation-link-block">
                    <a href="#turnkey-house" class="navigation-link">Дом под ключ</a>
                </div>
                <div class="navigation-link-block">
                    <a href="#contacts" class="navigation-link">Контакты</a>
                </div>
            </div>
        </div>
    </div>
    <div id="areas-and-prices" class="navigation-target">
        <div style="background-image: url(&quot;img/intro-background.jpg&quot;)" class="intro-block">
            <div class="padding-content">
                <div class="intro">
                    <h1><?=Text::get('block-2-h1')?></h1>
                    <div class="button">
                        <span>получить консультацию</span>
                    </div>
                    <div class="intro-bottom-line">
                        <div class="intro-information-block">
                            <div style="background-image: url(&quot;img/intro-block-icon-1.png&quot;)" class="intro-information-icon"></div>
                            <div class="intro-information-text">
                                <p><?=Text::get('block-2-list-1-distance')?></p>
                                <span><?=Text::get('block-2-list-1-city')?></span>
                            </div>
                        </div>
                        <div class="intro-information-block">
                            <div style="background-image: url(&quot;img/intro-block-icon-2.png&quot;)" class="intro-information-icon"></div>
                            <div class="intro-information-text">
                                <p><?=Text::get('block-2-list-2')?></p>
                            </div>
                        </div>
                        <div class="intro-information-block">
                            <div style="background-image: url(&quot;img/intro-block-icon-3.png&quot;)" class="intro-information-icon"></div>
                            <div class="intro-information-text">
                                <p><?=Text::get('block-2-list-3')?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-image: url(&quot;img/purchase-pluses-background.jpg&quot;)" class="purchase-pluses">
            <h1>почему стоит приобрести участок в д.название</h1>
            <div class="purchase-pluses-text-slider">
                <div class="purchase-pluses-text-slider-container">
                    <div class="purchase-pluses-text-slide">
                        <p>Земельный участок в таком месте - это не просто кусочек земли, за который покупатель заплатил выгодную цену. Дача или коттедж в поселке Название - это прикосновение к совершенно иному, глубокому и прекрасному миру живой природы,
                            о котором люди, живущие в больших городах, стали постепенно забывать, оторвавшись от корней предков.</p>
                        <p>Именно тут вы снова ощутите свою силу, раскроете внутренний потенциал организма и сможете, наконец-то, дышать полной грудью. Больше половины участков расположены прямо в лесу, среди стройных сосен, нежных берез, тенистых рябин,
                            вековых елей, ароматной черемухи. Территория поселка гармонично вписана в природный ландшафт, не разрушая, а дополняя естественную красоту заповедного края.</p>
                    </div>
                </div>
                <div class="purchase-pluses-text-slider-container">
                    <div class="purchase-pluses-text-slide">
                        <p>Земельный участок в таком месте - это не просто кусочек земли, за который покупатель заплатил выгодную цену. Дача или коттедж в поселке Название - это прикосновение к совершенно иному, глубокому и прекрасному миру живой природы,
                            о котором люди, живущие в больших городах, стали постепенно забывать, оторвавшись от корней предков.</p>
                        <p>Именно тут вы снова ощутите свою силу, раскроете внутренний потенциал организма и сможете, наконец-то, дышать полной грудью. Больше половины участков расположены прямо в лесу, среди стройных сосен, нежных берез, тенистых рябин,
                            вековых елей, ароматной черемухи. Территория поселка гармонично вписана в природный ландшафт, не разрушая, а дополняя естественную красоту заповедного края.</p>
                    </div>
                </div>
                <div class="purchase-pluses-text-slider-container">
                    <div class="purchase-pluses-text-slide">
                        <p>Земельный участок в таком месте - это не просто кусочек земли, за который покупатель заплатил выгодную цену. Дача или коттедж в поселке Название - это прикосновение к совершенно иному, глубокому и прекрасному миру живой природы,
                            о котором люди, живущие в больших городах, стали постепенно забывать, оторвавшись от корней предков.</p>
                        <p>Именно тут вы снова ощутите свою силу, раскроете внутренний потенциал организма и сможете, наконец-то, дышать полной грудью. Больше половины участков расположены прямо в лесу, среди стройных сосен, нежных берез, тенистых рябин,
                            вековых елей, ароматной черемухи. Территория поселка гармонично вписана в природный ландшафт, не разрушая, а дополняя естественную красоту заповедного края.</p>
                    </div>
                </div>
                <div class="purchase-pluses-text-slider-container">
                    <div class="purchase-pluses-text-slide">
                        <p>Земельный участок в таком месте - это не просто кусочек земли, за который покупатель заплатил выгодную цену. Дача или коттедж в поселке Название - это прикосновение к совершенно иному, глубокому и прекрасному миру живой природы,
                            о котором люди, живущие в больших городах, стали постепенно забывать, оторвавшись от корней предков.</p>
                        <p>Именно тут вы снова ощутите свою силу, раскроете внутренний потенциал организма и сможете, наконец-то, дышать полной грудью. Больше половины участков расположены прямо в лесу, среди стройных сосен, нежных берез, тенистых рябин,
                            вековых елей, ароматной черемухи. Территория поселка гармонично вписана в природный ландшафт, не разрушая, а дополняя естественную красоту заповедного края.</p>
                    </div>
                </div>
                <div class="purchase-pluses-text-slider-container">
                    <div class="purchase-pluses-text-slide">
                        <p>Земельный участок в таком месте - это не просто кусочек земли, за который покупатель заплатил выгодную цену. Дача или коттедж в поселке Название - это прикосновение к совершенно иному, глубокому и прекрасному миру живой природы,
                            о котором люди, живущие в больших городах, стали постепенно забывать, оторвавшись от корней предков.</p>
                        <p>Именно тут вы снова ощутите свою силу, раскроете внутренний потенциал организма и сможете, наконец-то, дышать полной грудью. Больше половины участков расположены прямо в лесу, среди стройных сосен, нежных берез, тенистых рябин,
                            вековых елей, ароматной черемухи. Территория поселка гармонично вписана в природный ландшафт, не разрушая, а дополняя естественную красоту заповедного края.</p>
                    </div>
                </div>
            </div>
            <div class="purchase-pluses-text-slider-navigation"></div>
        </div>
    </div>
    <div id="purchase-terms" class="navigation-target">
        <div class="purchase-terms">
            <h1>условия покупки</h1>
            <div class="purchase-terms-blocks-container">
                <div class="purchase-terms-block">
                    <div style="background-image: url(&quot;img/purchase-terms-block-background-1.jpg&quot;)" class="purchase-terms-background"></div>
                    <div class="purchase-terms-content">
                        <div style="background-image: url(&quot;img/purchase-terms-icon-1.png&quot;)" class="purchase-terms-image"></div>
                        <div class="purchase-terms-header">
                            <span>100% оплата</span>
                        </div>
                        <div class="purchase-terms-button-container">
                            <a href="" class="purchase-terms-button">получить консультацию</a>
                        </div>
                    </div>
                </div>
                <div class="purchase-terms-block">
                    <div style="background-image: url(&quot;img/purchase-terms-block-background-1.jpg&quot;)" class="purchase-terms-background"></div>
                    <div class="purchase-terms-content">
                        <div style="background-image: url(&quot;img/purchase-terms-icon-2.png&quot;)" class="purchase-terms-image"></div>
                        <div class="purchase-terms-header">
                            <span>ипотека</span>
                        </div>
                        <div class="purchase-terms-button-container">
                            <a href="" class="purchase-terms-button">получить консультацию</a>
                        </div>
                    </div>
                </div>
                <div class="purchase-terms-block">
                    <div style="background-image: url(&quot;img/purchase-terms-block-background-1.jpg&quot;)" class="purchase-terms-background"></div>
                    <div class="purchase-terms-content">
                        <div style="background-image: url(&quot;img/purchase-terms-icon-3.png&quot;)" class="purchase-terms-image"></div>
                        <div class="purchase-terms-header">
                            <span>рассрочка</span>
                        </div>
                        <div class="purchase-terms-button-container">
                            <a href="" class="purchase-terms-button">получить консультацию</a>
                        </div>
                    </div>
                </div>
                <div class="purchase-terms-block">
                    <div style="background-image: url(&quot;img/purchase-terms-block-background-1.jpg&quot;)" class="purchase-terms-background"></div>
                    <div class="purchase-terms-content">
                        <div style="background-image: url(&quot;img/purchase-terms-icon-4.png&quot;)" class="purchase-terms-image"></div>
                        <div class="purchase-terms-header">
                            <span>военная ипотека</span>
                        </div>
                        <div class="purchase-terms-button-container">
                            <a href="" class="purchase-terms-button">получить консультацию</a>
                        </div>
                    </div>
                </div>
                <div class="purchase-terms-block">
                    <div style="background-image: url(&quot;img/purchase-terms-block-background-1.jpg&quot;)" class="purchase-terms-background"></div>
                    <div class="purchase-terms-content">
                        <div style="background-image: url(&quot;img/purchase-terms-icon-5.png&quot;)" class="purchase-terms-image"></div>
                        <div class="purchase-terms-header">
                            <span>субсидии</span>
                        </div>
                        <div class="purchase-terms-button-container">
                            <a href="" class="purchase-terms-button">получить консультацию</a>
                        </div>
                    </div>
                </div>
                <div class="purchase-terms-block">
                    <div style="background-image: url(&quot;img/purchase-terms-block-background-1.jpg&quot;)" class="purchase-terms-background"></div>
                    <div class="purchase-terms-content">
                        <div style="background-image: url(&quot;img/purchase-terms-icon-6.png&quot;)" class="purchase-terms-image"></div>
                        <div class="purchase-terms-header">
                            <span>материнский капитал</span>
                        </div>
                        <div class="purchase-terms-button-container">
                            <a href="" class="purchase-terms-button">получить консультацию</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="infrastructuer" class="navigation-target">
        <div style="background-image: url(&quot;img/infrastructure-background.jpg&quot;)" class="infrastructure-block">
            <div class="padding-content">
                <div class="infrastructure">
                    <h1><?=Text::get('block-5-h1')?></h1>
                    <div class="infrastructure-blocks-container">
                        <div class="infrastructure-single-block">
                            <div style="background-image: url(&quot;img/infrastructure-icon-1.png&quot;)" class="infrastructure-block-icon"></div>
                            <div class="infrastructure-block-header">
                                <span><?=Text::get('block-5-list-1')?></span>
                            </div>
                        </div>
                        <div class="infrastructure-single-block">
                            <div style="background-image: url(&quot;img/infrastructure-icon-2.png&quot;)" class="infrastructure-block-icon"></div>
                            <div class="infrastructure-block-header">
                                <span><?=Text::get('block-5-list-2')?></span>
                            </div>
                        </div>
                        <div class="infrastructure-single-block">
                            <div style="background-image: url(&quot;img/infrastructure-icon-3.png&quot;)" class="infrastructure-block-icon"></div>
                            <div class="infrastructure-block-header">
                                <span><?=Text::get('block-5-list-3')?></span>
                            </div>
                        </div>
                        <div class="infrastructure-single-block">
                            <div style="background-image: url(&quot;img/infrastructure-icon-4.png&quot;)" class="infrastructure-block-icon"></div>
                            <div class="infrastructure-block-header">
                                <span><?=Text::get('block-5-list-4')?></span>
                            </div>
                        </div>
                        <div class="infrastructure-single-block">
                            <div style="background-image: url(&quot;img/infrastructure-icon-5.png&quot;)" class="infrastructure-block-icon"></div>
                            <div class="infrastructure-block-header">
                                <span><?=Text::get('block-5-list-5')?></span>
                            </div>
                        </div>
                        <div class="infrastructure-single-block">
                            <div style="background-image: url(&quot;img/infrastructure-icon-6.png&quot;)" class="infrastructure-block-icon"></div>
                            <div class="infrastructure-block-header">
                                <span><?=Text::get('block-5-list-6')?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gallery" class="navigation-target">
        <div class="photo-and-video">
            <h1>фото и видео местности</h1>
            <div class="photo-and-video-blocks">
                <div class="completed-line">
                    <div class="large-block single-block">
                        <div style="background-image: url(&quot;img/photo-block.jpg&quot;)" class="single-block-image popup-target-image"></div>
                    </div>
                    <div class="completed-block">
                        <div class="completed-top-line">
                            <div class="completed-top-line-block single-block">
                                <div style="background-image: url(&quot;img/photo-block-1.jpg&quot;)" class="single-block-image popup-target-image"></div>
                            </div>
                            <div class="completed-top-line-block single-block">
                                <div style="background-image: url(&quot;img/photo-block-2.jpg&quot;)" class="single-block-image popup-target-image"></div>
                            </div>
                            <div class="completed-top-line-block single-block">
                                <div style="background-image: url(&quot;img/photo-block-3.jpg&quot;)" class="single-block-image popup-target-image"></div>
                            </div>
                        </div>
                        <div class="completed-bottom-line">
                            <div class="completed-bottom-line-large-block single-block">
                                <div style="background-image: url(&quot;img/photo-block-4.jpg&quot;)" class="single-block-image popup-target-image"></div>
                            </div>
                            <div class="completed-bottom-line-min-block single-block">
                                <div style="background-image: url(&quot;img/photo-block-5.jpg&quot;)" class="single-block-image popup-target-image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="faq" class="navigation-target">
        <div style="background-image: url(&quot;img/question-answer-background.jpg&quot;)" class="question-answer">
            <h1>вопрос-ответ</h1>
            <div class="question-answer-slider">
                <?=CarouselWidget::widget(['slider_type' => '2']) ?>
            </div>
            <div class="slider-arrows">
                <div class="prev-arrow">
                    <span></span>
                </div>
                <div class="next-arrow">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div id="documents" class="navigation-target">
        <div class="documents">
            <h1>Документация</h1>
            <div class="slider-arrows">
                <div class="prev-arrow">
                    <span></span>
                </div>
                <div class="next-arrow">
                    <span></span>
                </div>
            </div>
            <div class="documents-slider-container">
                <div class="documents-slider">
                    <?=CarouselWidget::widget(['slider_type' => '3']) ?>
                </div>
            </div>
        </div>
    </div>
    <div id="turnkey-house" class="navigation-target">
        <div class="request-for-inspection">
            <div class="request-for-inspection-content">
                <h1>записаться на осмотр участков</h1>
                <input type="text" placeholder="Ваше имя" required>
                <input type="text" placeholder="Ваш телефон" pattern="[0-9]" required>
                <input type="email" placeholder="Ваш Email" required>
                <div class="button">
                    <span>записаться на осмотр</span>
                </div>
            </div>
        </div>
        <div class="neighborhood-objects-block">
            <div class="padding-content">
                <h1>что в окрестностях</h1>
                <div class="neighborhood-objects">
                    <div class="neighborhood-single-objects">
                        <div style="background-image: url(&quot;img/neighborhood-object-image-1.jpg&quot;)" class="neighborhood-object-image"></div>
                        <div class="neighborhood-object-header">
                            <span>Экоферма</span>
                        </div>
                    </div>
                    <div class="neighborhood-single-objects">
                        <div style="background-image: url(&quot;img/neighborhood-object-image-2.jpg&quot;)" class="neighborhood-object-image"></div>
                        <div class="neighborhood-object-header">
                            <span>Прокат лодок</span>
                        </div>
                    </div>
                    <div class="neighborhood-single-objects">
                        <div style="background-image: url(&quot;img/neighborhood-object-image-3.jpg&quot;)" class="neighborhood-object-image"></div>
                        <div class="neighborhood-object-header">
                            <span>Конная база</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-image: url(&quot;img/cotages-link-background.jpg&quot;)" class="cotages-landing-link-block">
            <div class="padding-content">
                <div class="cotages-landing-link">
                    <div class="left-block">
                        <h1><?=Text::get('block-11-h1');?></h1>
                    </div>
                    <div class="right-block">
                        <p><?=Text::get('block-11-text');?></p>
                        <a
                            href="">узнать подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contacts" class="navigation-target">
        <div class="contacts">
            <div style="background-image:url(&quot;img/map-background.jpg&quot;)" class="map-container"></div>
            <div class="left-block">
                <div class="contacts-block">
                    <h1>Адрес</h1>
                    <p>Россия, Ростовская обл., г. Ростов-на-Дону, пр. Пушкина, 89</p>
                    <div class="contacts-line">
                        <div class="contacts-phones">
                            <h1>Телефоны</h1>
                            <p>
                                <?=Text::get('block-12-list-phone-1');?>
                            </p>
                            <p>
                                <?=Text::get('block-12-list-phone-1');?>
                            </p>
                            <p>
                                <?=Text::get('block-12-list-phone-1');?>
                            </p>
                        </div>
                        <div class="contacts-email">
                            <h1>Email</h1>
                            <a href="#"><?=Text::get('block-12-email');?></a>
                        </div>
                    </div>
                    <div class="social-icons-line">
                        <a href="<?=Text::get('block-12-list-1');?>">
                            <div class="single-icon">
                                <i aria-hidden="true" class="fa fa-google-plus"></i>
                            </div>
                        </a>
                        <a href="<?=Text::get('block-12-list-2');?>">
                            <div class="single-icon">
                                <i aria-hidden="true" class="fa fa-twitter"></i>
                            </div>
                        </a>
                        <a href="<?=Text::get('block-12-list-3');?>">
                            <div class="single-icon">
                                <i aria-hidden="true" class="fa fa-envelope"></i>
                            </div>
                        </a>
                        <a href="<?=Text::get('block-12-list-4');?>">
                            <div class="single-icon">
                                <i aria-hidden="true" class="fa fa-facebook"></i>
                            </div>
                        </a>
                        <a href="<?=Text::get('block-12-list-5');?>">
                            <div class="single-icon">
                                <i aria-hidden="true" class="fa fa-rss"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-image: url(&quot;img/more-questions-background.jpg&quot;)" class="more-questions">
            <div class="text-block">
                <h1><?=Text::get('block-13-h1');?></h1>
                <p></p><?=Text::get('block-13-text');?></p>
            </div>
            <div class="button">
                <span>хочу свой участок!</span>
            </div>
        </div>
    </div>
</div>
<div class="image-popup-container">
    <div class="image-popup">
        <img src="">
        <div class="image-popup-close">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<div class="feedback-popup-container">
    <div class="feedback-popup">
        <div class="request-for-inspection-content">
            <h1>заказать звонок</h1>
            <input type="text" placeholder="Ваше имя" required>
            <input type="text" placeholder="Ваш телефон" pattern="[0-9]" required>
            <div class="button">
                <span>заказать</span>
            </div>
        </div>
        <div class="feedback-popup-close">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<div class="footer fp-auto-height section">
    <div class="footer-top-line">
        <div style="background-image: url('img/another-landing-background-1.jpg')" class="another-landing-block">
            <h1>Вторичное
                <br>жилье</h1>
            <a href="#">www.vash-vibor.ru</a>
            <div class="another-landing-description">
                <h1>Вторичное жилье</h1>
                <p>Наши менеджеры помогут выгодно продать и безопасно купить квартиру на вторичном рынке жилья Ростова-на-Дону</p>
                <a href="#">www.vash-vibor.ru</a>
            </div>
        </div>
        <div style="background-image: url('img/another-landing-background-2.jpg')" class="another-landing-block">
            <h1>Земельные
                <br>участки</h1>
            <a href="#">www.vash-vibor.ru</a>
            <div class="another-landing-description">
                <h1>Земельные участки</h1>
                <p>Наши менеджеры помогут выгодно продать и безопасно купить квартиру на вторичном рынке жилья Ростова-на-Дону</p>
                <a href="#">www.vash-vibor.ru</a>
            </div>
        </div>
        <div style="background-image: url('img/another-landing-background-3.jpg')" class="another-landing-block">
            <h1>Квартиры в
                <br>Новостройках</h1>
            <a href="#">www.vash-vibor.ru</a>
            <div class="another-landing-description">
                <h1>Квартиры в новостройках</h1>
                <p>Наши менеджеры помогут выгодно продать и безопасно купить квартиру на вторичном рынке жилья Ростова-на-Дону</p>
                <a href="#">www.vash-vibor.ru</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom-line">
        <div class="footer-copyright">
            <p>© 2016 “Ваш выбор”</p>
            <div class="social-icons-line">
                <a href="<?=Text::get('block-12-list-1');?>">
                    <div class="single-icon">
                        <i aria-hidden="true" class="fa fa-google-plus"></i>
                    </div>
                </a>
                <a href="<?=Text::get('block-12-list-2');?>">
                    <div class="single-icon">
                        <i aria-hidden="true" class="fa fa-twitter"></i>
                    </div>
                </a>
                <a href="<?=Text::get('block-12-list-3');?>">
                    <div class="single-icon">
                        <i aria-hidden="true" class="fa fa-envelope"></i>
                    </div>
                </a>
                <a href="<?=Text::get('block-12-list-4');?>">
                    <div class="single-icon">
                        <i aria-hidden="true" class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="<?=Text::get('block-12-list-5');?>">
                    <div class="single-icon">
                        <i aria-hidden="true" class="fa fa-rss"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="footer-phone">
            <h1>8 (800) 456-78-90</h1>
            <p>г. Ростов-на-Дону, пр-т. Ленина, дом 89</p>
        </div>
        <div class="reactive-logo">
            <a href="#">
                <span>Дизайн и разработка -</span>
                <img src="img/reactive-logo.png">
            </a>
        </div>
    </div>
</div>