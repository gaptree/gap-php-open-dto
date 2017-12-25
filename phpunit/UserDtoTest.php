<?php
namespace phpunit\Gap\Open\Dto;

use PHPUnit\Framework\TestCase;
use Gap\Open\Dto\UserDto;

class UserDtoTest extends TestCase
{
    public function testDto(): void
    {
        $nick = 'testNick';
        $user = new UserDto([
            'nick' => $nick
        ]);

        $this->assertEquals($nick, $user->nick);
    }
}
