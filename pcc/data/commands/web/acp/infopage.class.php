<?php

namespace PCC\Command\Web;

//Imports
use PCC\Core\PCC;
use RWF\Core\RWF;
use RWF\Request\Commands\PageCommand;
use RWF\Util\FileUtil;

/**
 * Zeigt eine Liste mit allen Benutzern an
 *
 * @author     Oliver Kleditzsch
 * @copyright  Copyright (c) 2014, Oliver Kleditzsch
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @since      2.0.0-0
 * @version    2.0.0-0
 */
class InfoPage extends PageCommand {

    protected $requiredPremission = 'pcc.acp.menu';

    protected $template = 'acpinfo.html';

    /**
     * Sprachpakete die geladen werden sollen
     *
     * @var Array
     */
    protected $languageModules = array('index', 'acpinfo', 'acpindex');

    /**
     * Daten verarbeiten
     */
    public function processData() {

        $tpl = RWF::getTemplate();

        //Headline
        $tpl->assign('apps', PCC::listApps());
        $tpl->assign('acp', true);
        $tpl->assign('style', PCC::getStyle());
        $tpl->assign('user', PCC::getVisitor());

        //SHC Version
        $tpl->assign('rwfVersion', RWF::VERSION);
        $tpl->assign('pccVersion', PCC::VERSION);
        $tpl->assign('size', FileUtil::formatBytesBinary(FileUtil::getDirectorySize(PATH_BASE, true)));

        //Versionen
        $tpl->assign('php', PHP_VERSION);
        //Mobil Detect einbinden
        require_once(PATH_RWF_CLASSES . 'external/mobile_detect/Mobile_Detect.php');
        $tpl->assign('mobileDetect', \Mobile_Detect::VERSION);

        //Schreibrechte
        $tpl->assign('cache', str_replace(PATH_BASE, '', PATH_RWF_CACHE));
        $tpl->assign('writeCache', is_writeable(PATH_RWF_CACHE));
        $tpl->assign('rwfLog', str_replace(PATH_BASE, '', PATH_RWF_LOG));
        $tpl->assign('writeRwfLog', is_writeable(PATH_RWF_LOG));
        $tpl->assign('rwfStorage', str_replace(PATH_BASE, '', PATH_RWF_STORAGE));
        $tpl->assign('writeRwfStorage', is_writeable(PATH_RWF_STORAGE));
        $tpl->assign('pccLog', str_replace(PATH_BASE, '', PATH_PCC_LOG));
        $tpl->assign('writePccLog', is_writeable(PATH_PCC_LOG));
        $tpl->assign('pccStorage', str_replace(PATH_BASE, '', PATH_PCC_STORAGE));
        $tpl->assign('writePccStorage', is_writeable(PATH_PCC_STORAGE));
    }

}