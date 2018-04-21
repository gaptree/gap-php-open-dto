<?php
namespace Gap\Open\Dto;

abstract class OAuth2Dto extends DtoBase
{
    public $expired;
    public $created;
    public $diff = 0;

    public function hasExpired()
    {
        if (!$this->expired) {
            throw new \Exception('expired not set');
        }

        //$expiredDateTime = new \DateTime($this->expired);
        //return $expiredDateTime->getTimestamp() < (time() + $this->diff);

        $diff = $this->diff ?? 0;
        return $this->expired->getTimestamp() < (time() + $diff);
    }

    abstract public function getKey(): string;
}
