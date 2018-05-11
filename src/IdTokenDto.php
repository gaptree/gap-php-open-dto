<?php
namespace Gap\Open\Dto;

class IdTokenDto extends DtoBase
{
    public $iss; // issuer:     company-api.tecposter.com
    public $aud; // audience:   company-web.tecposter.com
    public $jti; // id
    public $iat; // issued at
    public $nbf; // not before or expiration

    public $userId;
}
/*
https://github.com/lcobucci/jwt/blob/3.2/README.md

$token = (new Builder())->setIssuer('http://example.com') // Configures the issuer (iss claim)
->setAudience('http://example.org') // Configures the audience (aud claim)
->setId('4f1g23a12aa', true) // Configures the id (jti claim), replicating as a header item
->setIssuedAt(time()) // Configures the time that the token was issue (iat claim)
->setNotBefore(time() + 60) // Configures the time that the token can be used (nbf claim)
->setExpiration(time() + 3600) // Configures the expiration time of the token (nbf claim)
->set('uid', 1) // Configures a new claim, called "uid"
->sign($signer,  $keychain->getPrivateKey('file://{path to your private key}'))
    // creates a signature using your private key
->getToken(); // Retrieves the generated token

*/
