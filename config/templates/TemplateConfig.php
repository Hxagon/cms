<?php
namespace cms\config\templates;

/**
 * Class TemplateConfig
 */
class TemplateConfig
{
    /** Layout-Dateien */
    const FRONTEND_LAYOUT_FILE = 'default.phtml';
    /** - - - - */

    /** Pfade zu den Dateien */
    const FRONTEND_LAYOUT_PATH = ROOT_PATH . '/templates/layouts/' . self::FRONTEND_LAYOUT_FILE;
    const PAGE_TEMPLATES_PATH = ROOT_PATH . '/templates/pages/';
    /** - - - - */

    private $frontendLayoutFile;
    private $pageTemplatesPath;

    /**
     * TemplateConfig constructor.
     */
    public function __construct()
    {
        $this->frontendLayoutFile = self::FRONTEND_LAYOUT_PATH;
        $this->pageTemplatesPath = self::PAGE_TEMPLATES_PATH;
    }

    /**
     * @return string
     */
    public function getFrontendLayoutFile()
    {
        return $this->frontendLayoutFile;
    }

    /**
     * @return string
     */
    public function getPageTemplatesPath(): string
    {
        return $this->pageTemplatesPath;
    }
}
