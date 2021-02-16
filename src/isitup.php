<?php
namespace isitup;

class isitup
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
