<?php
namespace Gap\Open\Dto;

class AppDto extends DtoBase
{
    public $appId;
    public $appSecret;
    public $appName;
    public $privilege;
    public $redirectUrl;
    public $scope;
    public $created;
    public $changed;
}