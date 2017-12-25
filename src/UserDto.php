<?php
namespace Gap\Open\Dto;

class UserDto extends DtoBase
{
    public $userId;
    public $nick;
    public $zcode;
    public $avt;
    public $logined;
    public $created;
    public $changed;

    public function getServerId(): string
    {
        if ($pos = strpos($this->userId, '-')) {
            $serverId = substr($this->userId, 0, $pos);
            return $serverId;
        }

        return '';
    }
}
