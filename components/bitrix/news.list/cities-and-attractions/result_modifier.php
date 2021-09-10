<?php
if ($arResult['ITEMS']) {
    foreach ($arResult['ITEMS'] as $key => $city) {
        usort(
            $arResult['ITEMS'][$key]['DISPLAY_PROPERTIES']['ATTRACTIONS']['LINK_ELEMENT_VALUE'], 
            function ($a, $b) {
                return strcmp($a['NAME'], $b['NAME']);
            }
        );
    }
}
?>