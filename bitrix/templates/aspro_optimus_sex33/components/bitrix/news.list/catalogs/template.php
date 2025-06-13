<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>
<?if (count($arResult["ITEMS"])):?>
	<div class="articles-list lists_block news <?=($arParams["IS_VERTICAL"]=="Y" ? "vertical row" : "")?> <?=($arParams["SHOW_FAQ_BLOCK"]=="Y" ? "faq" : "")?> ">
		<?
			foreach($arResult["ITEMS"] as $arItem){
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$arSize=array("WIDTH"=>280, "HEIGHT" => 190);
				if($arParams["SHOW_FAQ_BLOCK"]=="Y"){
					if($arParams["IS_VERTICAL"]!="Y")
						$arSize=array("WIDTH"=>175, "HEIGHT" => 120);
				}else{
					if($arParams["IS_VERTICAL"]!="Y")
						$arSize=array("WIDTH"=>190, "HEIGHT" => 130);
				}
				if(isset($arParams["BIG_IMG"]) && $arParams["BIG_IMG"] == "Y")
					$arSize=array("WIDTH"=>400, "HEIGHT" => 290);
		?>
			<div class="item clearfix item_block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="wrapper_inner_block">
						<div class="left-data">
							<img src="<?= $templateFolder ?>/images/file.png" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" height="70" />
						</div>
					<div class="right-data">
						<?if($arParams["DISPLAY_DATE"]=="Y"){?>
							<?if( $arItem["PROPERTIES"]["PERIOD"]["VALUE"] ){?>
								<div class="date_small"><?=$arItem["PROPERTIES"]["PERIOD"]["VALUE"]?></div>
							<?}elseif($arItem["DISPLAY_ACTIVE_FROM"]){?>
								<div class="date_small"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
							<?}?>
						<?}?>
						<div class="item-title"><a target="_blank" href="<?=$arItem["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["SRC"]?>"><span><?=$arItem["NAME"]?></span></a></div>

						<?if($arParams["SHOW_PREVIEW_TEXT"] != 'N'):?>
							<div class="preview-text"><?=$arItem["PREVIEW_TEXT"]?></div>
						<?endif;?>

						<?if($arItem["PROPERTIES"][$arParams["PRICE_PROPERTY"]]["VALUE"]):?>
							<div class="price services">
								<div class="price_new">
									<?=$arItem["PROPERTIES"][$arParams["PRICE_PROPERTY"]]["VALUE"];?>
								</div>
							</div>
						<?endif;?>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		<?}?>
	</div>
	<?if( $arParams["DISPLAY_BOTTOM_PAGER"] ){?><?=$arResult["NAV_STRING"]?><?}?>
<?endif;?>