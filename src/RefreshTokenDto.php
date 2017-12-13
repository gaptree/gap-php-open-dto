<?php
namespace Gap\Open\Dto;

class RefreshTokenDto extends DtoBase
{
    public $refreshToken;
    public $appId;
    public $userId;
    public $scope;
    public $expired;
    public $created;
}
