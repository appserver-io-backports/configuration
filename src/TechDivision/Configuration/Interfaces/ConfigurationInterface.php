<?php

/**
 * TechDivision\Configuration\Interfaces\ConfigurationInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Library
 * @package    TechDivision_Configuration
 * @subpackage Interfaces
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_Configuration
 * @link       http://www.appserver.io
 */

namespace TechDivision\Configuration\Interfaces;

/**
 * Interface ContainerConfiguration
 *
 * @category   Library
 * @package    TechDivision_Configuration
 * @subpackage Interfaces
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_Configuration
 * @link       http://www.appserver.io
 */
interface ConfigurationInterface
{

    /**
     * Checks if the passed configuration is equal. If yes, the method
     * returns TRUE, if not FALSE.
     *
     * @param \TechDivision\Configuration\Interfaces\ConfigurationInterface $configuration The configuration to compare to
     *
     * @return boolean TRUE if the configurations are equal, else FALSE
     */
    public function equals(ConfigurationInterface $configuration);
}
