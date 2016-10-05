<?php
namespace cms\config\templates;

use cms\app\TemplateSystem\TemplateSystem;

/**
 * Class Renderer
 * @package CMS\config\templates
 */
class Renderer
{
    private $templateSystem;
    private $templateConfig;

    /**
     * Renderer constructor.
     */
    public function __construct()
    {
        $this->templateSystem = new TemplateSystem();
        $this->templateConfig = new TemplateConfig();
    }

    /**
     * @return string
     */
    public function renderLayout()
    {
        $layoutFile = $this->templateConfig->getFrontendLayoutFile();
        $currentPage = $_SESSION['currentPage'];

        // $pageContent ist die Variable im Layout, an deren Stelle der Inhalt der entsprechenden View ausgegeben wird
        /** @noinspection PhpUnusedLocalVariableInspection */
        /** @noinspection OnlyWritesOnParameterInspection */
        $pageContent = $this->renderView($currentPage);

        ob_start();
        include($layoutFile);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    /**
     * @param $currentPage
     * @return string
     */
    private function renderView($currentPage)
    {
        $currentView = $this->templateSystem->getMappedPageTemplate($currentPage);
        ob_start();
        include($this->templateConfig->getPageTemplatesPath() . $currentView);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}
