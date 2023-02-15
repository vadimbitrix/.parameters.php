<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if($arParams['SLIDER_ID']):
?>
<section id="testimonial" class="testimonial section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="<?=$arParams['SLIDER_ID']?>" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
                    <?foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <div class="testimonial-item">
                            <div class="img-thumb">
                                <?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                         alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                                <?else:?>
                                    <img class="img-fluid" src="/upload/noavatar.png"
                                         alt="нет фото">
                                <?endif;?>
                            </div>
                            <div class="info">
                                <h2><a href="#"><?= $arItem["NAME"] ?></a></h2>
                                <h3><a href="#"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></a></h3>
                            </div>
                            <div class="content">
                                <p class="description">
                                    <?= $arItem["PREVIEW_TEXT_SMALL"] ?>
                                </p>
                                <div class="star-icon mt-3">
                                    <?for($i=1;$i<=5;$i++):?>
                                        <?if($i <= $arItem["PROPERTIES"]["RATING"]["VALUE"]):?>
                                            <span><i class="lni-star-filled"></i></span>
                                        <?else:?>
                                            <span><i class="lni-star-half"></i></span>
                                        <?endif;?>
                                    <?endfor;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
    <script>
        var id_slider = <?=json_encode($arParams['SLIDER_ID'])?>;
        var autoplayTimeout = <?=json_encode($arParams['SLIDER_TIME'])?>;
        var dot_slider = <?=json_encode($arParams['SLIDER_DOTS'])?>;
        var auto_slider = <?=json_encode($arParams['SLIDER_AUTOPLAY'])?>;
    </script>
    <script src="<?=$templateFolder?>/slider.js"></script>
<?else:?>
    не задан id для слайдера
<?endif?>
