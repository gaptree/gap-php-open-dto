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
}
