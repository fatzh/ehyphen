<?php
/**
 * EHyphen class file.
 *
 * @author Fatz
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2013 51stFloor
 * @license
 *
 *  Copyright (C) 2013 51stFloor.
 *
 * 	This program is free software: you can redistribute it and/or modify
 * 	it under the terms of the GNU Lesser General Public License as published by
 * 	the Free Software Foundation, either version 3.0 of the License, or
 * 	(at your option) any later version.
 *
 * 	This program is distributed in the hope that it will be useful,
 * 	but WITHOUT ANY WARRANTY; without even the implied warranty of
 * 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * 	GNU Lesser General Public License for more details.
 *
 * 	You should have received a copy of the GNU Lesser General Public License
 * 	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * 	See the lgpl-3.0.txt file for more information.
 *
 * For third party licences and copyrights, please see:
 *
 * @seehttp://www.gnu.org/licenses/lgpl.html
 *
 */


/**
 * EHyphen is a *very* simple wrapper for the phpHyphenator library.
 * @see http://yellowgreen.de/soft-hyphenation-generator/
 * @see http://yellowgreen.de/phphyphenator/
 * @see http://www.dokuwiki.org/plugin:hyphenation
 *
 * @author Fatz
 * @package application.extensions.EHyphen
 * @since 1.1
 */

class EHyphen
{
   /**
    * The internal phpHyphenator object.
    *
    * @var object phpHyphenator
    */
   private $myPhpHyphenator = null;
   
   /**
    * 
    * Initialize hyphenation
    * 
    * @param string $lang : language used for hyphenation patterns
    * @param string $patterns : path to the hyphenation patterns
    */
   
   public function __construct($lang = null, $patterns = null)
   {
     if ($lang){
       $GLOBALS["language"] = $lang;
     } else {
       $GLOBALS["language"] = Yii::app()->getLanguage();
     }
     
     if ($patterns) {
       $GLOBALS["path_to_patterns"] = $patterns;
     } else {
       $GLOBALS["path_to_patterns"] = dirname(__FILE__).'/phpHyphenator/patterns/';
     }
     require_once(dirname(__FILE__).'/phpHyphenator/hyphenation.php');
   }
   
   /**
    * 
    * Performs hyphenation on the submited text
    * 
    * @param string $text: text to hyphenize
    */
   
   public function hyphenation($text)
   {
     return hyphenation($text);
   }
}