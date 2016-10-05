<?php
namespace cms\app\TemplateSystem;

use cms\config\templates\TemplateConfig;

/**
 * Class TemplateSystem
 * @package CMS\app
 */
class TemplateSystem
{
    private $templateMap;

    /**
     * TemplateSystem constructor.
     */
    public function __construct()
    {
        $this->initTemplateMapping();
    }

    private function initTemplateMapping()
    {
        // Alle .phtml Dateien im templates/pages Ordner auslesen
        $pageTemplatePath = TemplateConfig::PAGE_TEMPLATES_PATH;
        foreach (glob($pageTemplatePath . '*.phtml') as $pageTemplate) {
            $pathInfo = pathinfo($pageTemplate);
            $this->templateMap[$pathInfo['filename']] = $pathInfo['basename'];
        }
    }

    /**
     * @param $page
     * @return string
     */
    public function getMappedPageTemplate($page)
    {
        return $this->templateMap[$page];
    }
}
