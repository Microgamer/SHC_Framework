<?php

namespace RWF\Template\Plugin;

//Imports
use RWF\Template\TemplateCompilerPlugin;
use RWF\Template\TemplateCompiler;
use RWF\Template\Exception\TemplateCompilationException;

/**
 * laedt eine Sprachdatei
 * 
 * @author     Oliver Kleditzsch
 * @copyright  Copyright (c) 2014, Oliver Kleditzsch
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @since      2.0.0-0
 * @version    2.0.0-0
 */
class LoadLangModulCompilerPlugin implements TemplateCompilerPlugin {
    
    /**
     * wird beim Compilieren eines unbekannten Tags ausgefuehrt
     * 
     * @param  Array                          $args     Argumente
     * @param  \RWF\Template\TemplateCompiler $compiler Compiler Objekt
     * @return String
     */
    public function execute(array $args, TemplateCompiler $compiler) {
        
        //Plichtangabe Pruefen
        if(!isset($args['modul'])) {
            
            throw new TemplateCompilationException('missing "modul" attribute in premission tag', $compiler->getTemplateName(), $compiler->getCurrentLine());
        }
        
        return '<?php \\RWF\\Core\\RWF::getLanguage()->loadModul('. $args['modul'] .'); ?> ';
    }
}
