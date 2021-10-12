<?

//AddEventHandler("main", "OnEndBufferContent", "ClearHtml");

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

?>