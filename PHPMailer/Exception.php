<?php

class Exception extends \Exception
{
    
    
      @return 
  
    public function errorMessage()
    {
        return '<strong>' . htmlspecialchars($this->getMessage()) . "</strong><br />\n";
    }
}
