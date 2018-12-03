<?php

namespace Cherednichenkoa\McryptPolyfill\Plugin\Composer;

use Cherednichenkoa\McryptPolyfill\Helper\Data;

/**
 * Class ComposerInformation
 */
class ComposerInformation
{
    /**
     * @param \Magento\Framework\Composer\ComposerInformation $subject
     * @param array $result
     * @return array
     */
    public function afterGetRequiredExtensions(
        \Magento\Framework\Composer\ComposerInformation $subject,
        array $result
    ) {
        $mcryptKey = array_search(Data::PROVIDED_MCRYPT_PACKAGE_NAME, $result);
        if ($mcryptKey) {
            unset($result[$mcryptKey]);
        }
        return $result;
    }
}