<?php
namespace Gap\Open\Dto;

class AuthCodeDto extends DtoBase
{
    public $code;
    public $appId;
    public $userId;
    public $redirectUrl;
    public $scope;
    public $expired;
    public $created;
}
