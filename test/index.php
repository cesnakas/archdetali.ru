<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "test");

?>
<?
    $res = CIBlockElement::GetList(Array(), [
           
    ],false,false, array("ID", "NAME", "DETAIL_TEXT", "DETAIL_PAGE_URL"));
    $test = 0;
    while($ob = $res->GetNextElement())
    {
        if(strpos($ob->fields['DETAIL_TEXT'], 'class="form1-box"') !== false){
//            var_dump($ob->fields['DETAIL_TEXT']);
            $test++;
            echo '<a style="color: red;" href="'.$ob->fields['DETAIL_PAGE_URL'].'">'.$ob->fields['NAME'].'</a><br/>';
        }

    }
    var_dump($test);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>