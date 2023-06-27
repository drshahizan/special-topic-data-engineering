<?php

declare(strict_types = 1);

namespace CodeLts\U2F\U2FServer\Tests;

use CodeLts\U2F\U2FServer\RegistrationRequest;
use PHPUnit\Framework\TestCase;

class RegistrationRequestTest extends TestCase
{

    public function testGetters(): void
    {
        $rr = new RegistrationRequest('yKA0x075tjJ-GE7fKTfnzTOSaNUOWQxRd9TWz5aFOg8', 'http://demo.example.com');
        $this->assertSame('http://demo.example.com', $rr->appId());
        $this->assertSame('yKA0x075tjJ-GE7fKTfnzTOSaNUOWQxRd9TWz5aFOg8', $rr->challenge());
        $this->assertSame('U2F_V2', $rr->version());
    }

    public function testToJson(): void
    {
        $rr = new RegistrationRequest('yKA0x075tjJ-GE7fKTfnzTOSaNUOWQxRd9TWz5aFOg8', 'http://demo.example.com');
        $this->assertSame(
            '{"version":"U2F_V2","challenge":"yKA0x075tjJ-GE7fKTfnzTOSaNUOWQxRd9TWz5aFOg8","appId":"http:\/\/demo.example.com"}',
            json_encode($rr)
        );
    }

}
