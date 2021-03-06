<?php
/**
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Ip
 * @package    View
 * @subpackage Helper
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    1.0 2010-10-10 */
class Ip_View_Helper_Abstract extends Zend_View_Helper_Abstract
{

    /**
     * Accesses config param
     *
     * @return Zend_Config Object
     */
    protected function _getConfig()
    {   
        return Zend_Controller_Front::getInstance()->getParam('config'); 
    }

}
