<?php
namespace Gap\Open\Dto;

class AuthCodeDto extends OAuth2Dto
{
    public $code;
    public $appId;
    public $userId;
    public $redirectUrl;
    public $scope;
    public $status;

    public function getKey(): string
    {
        return 'auth-code-' . $this->code;
    }
}
