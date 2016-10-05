<?php
namespace cms\config;

use CMS\config\templates\TemplateConfig;

/**
 * Class Config
 */
class Config
{
    private $layoutConfig;

    /**
     * Config constructor.
     */
    public function __construct()
    {
        //Layout-Config initialisieren
        $this->layoutConfig = new TemplateConfig();
    }

    /**
     * @return TemplateConfig
     */
    public function getLayoutConfig()
    {
        return $this->layoutConfig;
    }
}
