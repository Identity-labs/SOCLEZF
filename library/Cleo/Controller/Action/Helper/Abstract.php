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
 * @category   Cleo
 * @package    Cleo_Controller_Action_Helper
 * @subpackage Abstract
 * @copyright  2010 Jean-Baptiste MONIN - CLEO Consulting
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: Abstract.php 03 2010-06-10 12:00:00Z jb $
 */
 
 /** Zend_Controller_Action_Helper_Abstract.php */
require_once 'Zend/Controller/Action/Helper/Abstract.php';

abstract class Cleo_Controller_Action_Helper_Abstract extends Zend_Controller_Action_Helper_Abstract
{

	protected function _getResource( $resourceName )
	{
		$frontController = Zend_Controller_Front::getInstance();
		$bootstrap		 = $frontController->getParam('bootstrap');
		if ( $bootstrap->hasResource( $resourceName  ) ){
			return $bootstrap->getResource( $resourceName  );
		}
		return null;
	}
}