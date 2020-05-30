<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arResult)):?>
	<div class="mobile_menu_container">
		<div class="mobile_menu_content">
			<ul>
				<?
				$previousLevel = 0;
				foreach($arResult as $arItem):
				?>
					<?if($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
						<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
					<?endif?>
					<?if($arItem["IS_PARENT"]):?>
						<li>
							<a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
							<ul>
							<li><a href="#" class="back"></a></li>	
							<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
						<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
					<?endif?>
					<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
				<?endforeach?>
				<?if($previousLevel > 1):?>
					<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
				<?endif?>
			</ul>
		</div>
	</div>
	<div class="mobile_menu_overlay"></div>
<?endif?>