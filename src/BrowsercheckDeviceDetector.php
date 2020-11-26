<?php

declare(strict_types=1);

namespace Bolt\Browsercheck;

use DeviceDetector\DeviceDetector;
use Symfony\Component\HttpFoundation\RequestStack;

class BrowsercheckDeviceDetector extends DeviceDetector
{
    public function __construct(RequestStack $requestStack, string $userAgent = '')
    {
        $request = $requestStack->getCurrentRequest();

        if (! $request) {
            return;
        }

        $userAgent = $request->headers->get('User-Agent');
        parent::__construct($userAgent);
        self::parse();
    }
}
