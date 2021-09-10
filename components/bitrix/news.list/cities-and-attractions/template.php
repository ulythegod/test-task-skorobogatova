<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arResult['ITEMS']) {
    foreach ($arResult['ITEMS'] as $city) {?>
        <div class="city-item">
            <p class="city-name"><?= $city['NAME']?></p>
            <div class="attractions" style="display: none">
                <?php foreach($city['DISPLAY_PROPERTIES']['ATTRACTIONS']['LINK_ELEMENT_VALUE'] as $attraction) {?>
                    <p class="attraction-name"><?= $attraction['NAME']?></p> 
                <?php }?>
            </div>
        </div>
    <?php 
    }
}
?>
