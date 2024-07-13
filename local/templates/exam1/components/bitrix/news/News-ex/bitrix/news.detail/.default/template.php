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
						<?
						if ($arResult["PROPERTIES"]["FILE"]["VALUE"] != 0){
							?> <p> <?=GetMessage("DOCUMENT")?></p>  <?
						 foreach ($arResult["PROPERTIES"]["FILE"]["VALUE"] as $File )
{?>
<?  $Item = CFile::GetFileArray($File)  ?>
						<div  class="exam-review-item-doc">
                            <img class="rew-doc-ico"
                                 src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
                            <a href="<?=$Item["SRC"]?> "download > <?=$Item["ORIGINAL_NAME"]?> </div>
						<?
					}}?>
						
						


	
