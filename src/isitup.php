<?php
namespace isItup;

class isItup
{
    public function check($URL)
    {
        $content = @file_get_contents($URL);
        if($content)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
        
        
    }

}
