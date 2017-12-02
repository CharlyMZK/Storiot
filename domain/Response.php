<?php

class Response
{


    private $_content;
    private $_template;

    /**
     * Response constructor.
     * @param $_content
     */
    public function __construct()
    {
        $smarty = new Smarty ();
        $smarty->template_dir = 'templates/';
        $smarty->compile_dir = 'templates_c/';
        $smarty->config_dir = 'configs/';
        $smarty->cache_dir = 'cache/';
        $this->_content = $smarty;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->_template;
    }

    /**
     * @param mixed $content
     */
    public function setTemplate($template)
    {
        $this->_template = $template;
    }
    
    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->_content = $content;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->_response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->_response = $response;
    }

    function display(){
       $this->_content->display($this->getTemplate());
    }
        
}
?>