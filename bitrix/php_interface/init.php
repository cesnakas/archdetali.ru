<?


//AddEventHandler("main", "OnEndBufferContent", "deleteKernelJs");
//AddEventHandler("main", "OnEndBufferContent", "deleteKernelCss");
AddEventHandler("main", "OnEndBufferContent", "ClearHtml");

function ClearHtml(&$content)
{

	global $USER;
    if(!$USER->IsAdmin()) {
       $content = sanitize_output($content);
    }

}

function sanitize_output($buffer)
{
   return preg_replace('~>\s*\n\s*<~', '><', $buffer);
}


function deleteKernelJs(&$content) {
   global $USER, $APPLICATION;
   if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
   if($APPLICATION->GetProperty("save_kernel") == "Y") return;

   $arPatternsToRemove = Array(
      '/<script.+?src=".+?kernel_main\/kernel_main\.js\?\d+"><\/script\>/',
      '/<script.+?src=".+?bitrix\/js\/main\/core\/core[^"]+"><\/script\>/',
      '/<script.+?>BX\.(setCSSList|setJSList)\(\[.+?\]\).*?<\/script>/',
      '/<script.+?>if\(\!window\.BX\)window\.BX.+?<\/sc ript>/',
      '/<script[^>]+?>\(window\.BX\|\|top\.BX\)\.message[^<]+<\/script>/',
   );

   $content = preg_replace($arPatternsToRemove, "", $content);
   $content = preg_replace("/\n{2,}/", "\n\n", $content);
}

function deleteKernelCss(&$content) {
   global $USER, $APPLICATION;
   if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
   if($APPLICATION->GetProperty("save_kernel") == "Y") return;

   $arPatternsToRemove = Array(
      '/<link.+?href=".+?kernel_main\/kernel_main\.css\?\d+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/js\/main\/core\/css\/core[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/styles.css[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/template_styles.css[^"]+"[^>]+>/',
   );

   $content = preg_replace($arPatternsToRemove, "", $content);
   $content = preg_replace("/\n{2,}/", "\n\n", $content);
}







?>