<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\DashboardBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MauticDashboardBundle
 *
 * @package Mautic\DashboardBundle
 */
class MauticDashboardBundle extends Bundle
{

    /**
     * Associate this bundle with the parent bundle Base
     * @return string
     */
    public function getParent()
    {
        return "MauticBaseBundle";
    }
}
