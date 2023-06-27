<?php

declare(strict_types = 1);

namespace CodeLts\U2F\U2FServer\Tests;

use CodeLts\U2F\U2FServer\SignRequest;
use PHPUnit\Framework\TestCase;

class SignRequestTest extends TestCase
{
    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L200
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $keyHandle = 'CTUayZo8hCBeC-sGQJChC0wW-bBg99bmOlGCgw8XGq4dLsxO3yWh9mRYArZxocP5hBB1pEGB3bbJYiM-5acc5w';

    public function testGetters(): void
    {
        $sr = new SignRequest(
            [
            'challenge' => 'fEnc9oV79EaBgK5BoNERU5gPKM2XGYWrz4fUjgc0000',
            'keyHandle' => $this->keyHandle,
            'appId' => 'http://demo.example.com',
            ]
        );
        $this->assertSame('http://demo.example.com', $sr->appId());
        $this->assertSame('fEnc9oV79EaBgK5BoNERU5gPKM2XGYWrz4fUjgc0000', $sr->challenge());
        $this->assertSame('U2F_V2', $sr->version());
    }

    public function testToJson(): void
    {
        $sr = new SignRequest(
            [
            'challenge' => 'fEnc9oV79EaBgK5BoNERU5gPKM2XGYWrz4fUjgc0000',
            'keyHandle' => $this->keyHandle,
            'appId' => 'http://demo.example.com',
            ]
        );
        $this->assertSame(
            '{"version":"U2F_V2","challenge":"fEnc9oV79EaBgK5BoNERU5gPKM2XGYWrz4fUjgc0000",'
            . '"keyHandle":"CTUayZo8hCBeC-sGQJChC0wW-bBg99bmOlGCgw8XGq4dLsxO3yWh9mRYArZxocP5hBB1pEGB3bbJYiM-5acc5w",'
            . '"appId":"http:\/\/demo.example.com"}',
            json_encode($sr)
        );
    }

}
