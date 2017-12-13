<?php
namespace Gap\Open\Dto;

class AccessTokenDto extends DtoBase
{
    public $token;
    public $refreshToken;
    public $appId;
    public $userId;
    public $scope;
    public $expired;
    public $created;
    public $diff = 0;

    public function hasExpired()
    {
        if (!$this->expired) {
            throw new \Exception('expired not set');
        }

        $expiredDateTime = new \DateTime($this->expired);
        return $expiredDateTime->getTimestamp() < (time() + $this->diff);
    }
}
