<?php

namespace Nabli\AuthBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NabliAuthBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
