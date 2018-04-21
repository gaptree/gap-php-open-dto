<?php
namespace Gap\Open\Dto;

class RefreshTokenDto extends OAuth2Dto
{
    public $refresh;
    public $appId;
    public $userId;
    public $scope;

    public function getKey(): string
    {
        return 'refresh-token-' . $this->refresh;
    }
}
