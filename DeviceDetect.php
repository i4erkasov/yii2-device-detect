<?php

namespace i4erkasov\devicedetect;

use yii\base\Component;

require_once(\Yii::getAlias('@vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php'));

/**
 * Uses the Mobile_Detect library.
 * Extends functionality, added isDesktop method
 * Requires "mobiledetect/mobiledetectlib": "^2.8"
 *
 * @method (bool)isMobile()
 * @method (bool)isTablet()
 * @method (bool)isDesktop()
 *
 * Class DeviceDetect
 */
class DeviceDetect extends Component
{
    /**
     * @var \Mobile_Detect
     */
    private $_mobileDetect;

    /**
     * @inheritdoc
     */
    public function init(): void
    {
        parent::init();
        $this->_mobileDetect = new \Mobile_Detect();
    }

    /**
     * @param $method
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        return call_user_func_array([$this->_mobileDetect, $method], $arguments);
    }

    /**
     * @return bool
     */
    public function isDesktop(): bool
    {
        return ($this->isMobile() || $this->isTablet()) ? false : true;
    }
}