<?php

namespace Inani\CodebirdWrapper;

use Codebird\Codebird;
use Inani\CodebirdWrapper\Helpers\GetQuery;

class TwitterWrapper
{
    use GetQuery;

    protected $cb;

    /**
     * @return Codebird
     */
    public function getCodeBird()
    {
        return $this->cb;
    }

    /**
     * @param Codebird $cb
     * @return $this
     */
    public function setCodeBird(Codebird $cb)
    {
        $this->cb = $cb;
        return $this;
    }

    /**
     * Set Token
     *
     * @param $token
     * @param $secret
     */
    public function setToken($token, $secret)
    {
        $this->cb->setToken($token, $secret);
    }

    /**
     * Set return format
     *
     * @param $return_format
     */
    public function setReturnFormat($return_format)
    {
        $this->cb->setReturnFormat($return_format);
    }
}