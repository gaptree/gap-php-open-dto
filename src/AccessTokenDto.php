<?php
namespace Gap\Open\Dto;

class AccessTokenDto extends OAuth2Dto
{
    public $token;
    public $refresh;
    public $appId;
    public $userId;
    public $scope;

    public function getKey(): string
    {
        return 'access-token-' . $this->refresh;
    }
}
