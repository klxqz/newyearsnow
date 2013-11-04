<?php

class shopNewyearsnowPlugin extends shopPlugin
{
    
    public function frontendHead()
    {
        if($this->getSettings('status')) {
            $skin_id = $this->getSettings('skin');
            $tmp_path = 'plugins/newyearsnow/templates/skin'.$skin_id.'.html';
            
            $view = wa()->getView();
            $template_path = wa()->getAppPath($tmp_path,  'shop');
    		$html = $view->fetch($template_path);
            
            return $html;
            
        }
        
    }

}