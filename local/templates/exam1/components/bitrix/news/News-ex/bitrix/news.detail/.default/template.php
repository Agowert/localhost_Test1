<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$img = SITE_TEMPLATE_PATH."/img/rew/no_photo.jpg"


?>



<div class="review-block">
							<div class="review-text">
								<div class="review-text-cont">
                                    <?if (isset($arResult["DETAIL_TEXT"])){?>
                                        <?= $arResult["DETAIL_TEXT"]?>
                                    <? } ?>

								</div>
								<div class="review-autor">
                                    <?if (isset($arResult["NAME"])){?>
                                        <?= $arResult["NAME"]?><? } ?>
                                    <?if (isset($arResult["DISPLAY_ACTIVE_FROM"])){?>
                                        <?= $arResult["DISPLAY_ACTIVE_FROM"]?>
                                    <? } ?>
									 <?=GetMessage("YEAR")?>
                                    <?if (isset($arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"])){?>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?>
                                    <? } ?>
                                    <?if (isset($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"])){?>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"] ?>
                                    <? } ?>
								</div>
							</div>

							<?if (isset($arResult["DETAIL_PICTURE"]["SRC"])){
	$img = $arResult["DETAIL_PICTURE"]["SRC"];}
 ?>
							<div style="clear: both;" class="review-img-wrap"><img src="<?=$img?>" alt=""></div>
						</div>




<?$file_values = $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]?>
<? if ($file_values != 0 ) {?>
    <p><?=GetMessage("DOCUMENTS")?></p>
    <?if (isset($file_values["SRC"])){
        $file_values = array($file_values);?>

    <? }?>
    <?foreach($file_values as $file)  {   ?>
        <div  class="exam-review-item-doc">
            <img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
            <a href="<?=$file["SRC"]?>" ><?=$file["ORIGINAL_NAME"]?></a>
        </div>
    <?}?>
<?} ?>




	
