<?php

declare(strict_types = 1);

namespace CodeLts\U2F\U2FServer\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use CodeLts\U2F\U2FServer\RegistrationRequest;
use CodeLts\U2F\U2FServer\SignRequest;
use CodeLts\U2F\U2FServer\U2FException;
use CodeLts\U2F\U2FServer\U2FServer;

class U2FServerTest extends TestCase
{

    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L200
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $certificate = 'MIIC4jCBywIBATANBgkqhkiG9w0BAQsFADAdMRswGQYDVQQDExJZdWJpY28gVTJGIFRlc3QgQ0EwHhcNMTQwNTE1'
        . 'MTI1ODU0WhcNMTQwNjE0MTI1ODU0WjAdMRswGQYDVQQDExJZdWJpY28gVTJGIFRlc3QgRUUwWTATBgcqhkjOPQIBBggqhkjOPQMBBwNCAA'
        . 'TbCtv1IcdczmPcpuHoJQYNlOYnVBlPnSSvJhq+rZlEH5WjcZEKOiDnPpFeE+i+OAV61XqjfnaQj6\/'
        . 'iipS2MOudMA0GCSqGSIb3DQEBCwUAA4ICAQCVQGtQYX2thKO064gP4zAPLaIKANklBO5y+mffWFEPC0cCnD5BKUqTrCmFiS2keoEyKFdxAe'
        . '+oQogWljeR1d\/gj8k8jbDNiXCC7HnTxnhzKTLlq2y9Vp\/VRZHOwd2NZNzpnB9ePNKvUaWCGK\/gN+cynnYFdwJ75iSgMVYb\/'
        . 'RnFcdPwnsBzBU68hbhTnu\/FvJxWo7rZJ2q7qXpA10eLVXJr4\/4oSXEk9I\/0IIHqOP98Ck\/fAoI5gYI7ygndyqoPJ\/Wkg1VsmjmbFToWY9xb'
        . '+axbvPefvg+KojwxE6MySMpYh\/h7oKEKamCWk19dJp5jHQmumkHlvQhH\/uUJmyD9EuLmQH+6SmEzZg0Oc9uw1aKamhcNNDCFakJGnv80j1'
        . '+HbDXnqE0168FBqorS2hmqeaJfNSyg\/SXT950lGC36tLy7BzQ8jYG99Ok32znp0UVbIEEvLSci3JJ0ipLVg\/0J+xOb4zl6a1z65nae4OTj7628\/'
        . 'UJFmtSU0X6Np9gF1dNizxXPlH0fW1ggRCCQcb5m6ZqrdDJwUx1p7Ydm9AlPyiUwwmN5ADyxmzk\/'
        . 'AOCoiO96UVvnvUlk2kF7JMNxIv3R0SCzP5fTl7KqGByeA3d7W375o6DWIIEsOI+dJd7pyPXdakecZQRaVubC6\/ICl'
        . '+G52OEkdp8jYjkDS8j3NAdJ1udNmg==';

    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L200
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $keyHandle = 'CTUayZo8hCBeC-sGQJChC0wW-bBg99bmOlGCgw8XGq4dLsxO3yWh9mRYArZxocP5hBB1pEGB3bbJYiM-5acc5w';

    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L200
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $publicKey = 'BC0SaFZWC9uH7wamOwduP93kUH2I2hEvyY0Srfj4A258pZSlV0iPoFIH+bd4yhncaqdoPLdEDl5Y\/yaFORPUe3c=';

    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L199
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $challenge = 'fEnc9oV79EaBgK5BoNERU5gPKM2XGYWrz4fUjgc0Q7g';


    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L201
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $clientData = 'eyAiY2hhbGxlbmdlIjogImZFbmM5b1Y3OUVhQmdLNUJvTkVSVTVnUEtNMlhHWVdyejRmVWpnYzBRN2ciLCAib'
    . '3JpZ2luIjogImh0dHA6XC9cL2RlbW8uZXhhbXBsZS5jb20iLCAidHlwIjogIm5hdmlnYXRvci5pZC5nZXRBc3NlcnRpb24iIH0';


    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L201
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $signatureData = 'AQAAAAQwRQIhAI6FSrMD3KUUtkpiP0jpIEakql-HNhwWFngyw553pS1CAiAKLjACPOhxzZXuZsVO8im-HStEcYGC50PKhsGp_SUAng==';

    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L51
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $registrationData = 'BQQtEmhWVgvbh-8GpjsHbj_d5FB9iNoRL8mNEq34-ANufKWUpVdIj6BSB_m3eMoZ3Gq'
    . 'naDy3RA5eWP8mhTkT1Ht3QAk1GsmaPIQgXgvrBkCQoQtMFvmwYPfW5jpRgoMPFxquHS7MTt8lofZkWAK2caHD-YQQdaRBgd'
    . '22yWIjPuWnHOcwggLiMIHLAgEBMA0GCSqGSIb3DQEBCwUAMB0xGzAZBgNVBAMTEll1YmljbyBVMkYgVGVzdCBDQTAeFw0xNDA1'
    . 'MTUxMjU4NTRaFw0xNDA2MTQxMjU4NTRaMB0xGzAZBgNVBAMTEll1YmljbyBVMkYgVGVzdCBFRTBZMBMGByqGSM49AgEGCCqGSM49AwEHA0IAB'
    . 'NsK2_Uhx1zOY9ym4eglBg2U5idUGU-dJK8mGr6tmUQflaNxkQo6IOc-kV4T6L44BXrVeqN-dpCPr-KKlLYw650wDQYJKoZIhvcNAQELBQADggIBAJVAa1Bhfa2Eo7T'
    . 'riA_jMA8togoA2SUE7nL6Z99YUQ8LRwKcPkEpSpOsKYWJLaR6gTIoV3EB76hCiBaWN5HV3-CPyTyNsM2JcILsedPGeHMpMuWrbL1Wn9VFkc7B3Y1k3OmcH1480q9RpYI'
    . 'Yr-A35zKedgV3AnvmJKAxVhv9GcVx0_CewHMFTryFuFOe78W8nFajutknarupekDXR4tVcmvj_ihJcST0j_Qggeo4_3wKT98CgjmBgjvKCd3Kqg8n9aSDVWyaOZsVOhZ'
    . 'j3Fv5rFu895--D4qiPDETozJIyliH-HugoQpqYJaTX10mnmMdCa6aQeW9CEf-5QmbIP0S4uZAf7pKYTNmDQ5z27DVopqaFw00MIVqQkae_zSPX4dsNeeoTTXrwUGqitL'
    . 'aGap5ol81LKD9JdP3nSUYLfq0vLsHNDyNgb306TfbOenRRVsgQS8tJyLcknSKktWD_Qn7E5vjOXprXPrmdp7g5OPvrbz9QkWa1JTRfo2n2AXV02LPFc-UfR9bWCBEIJB'
    . 'xvmbpmqt0MnBTHWnth2b0CU_KJTDCY3kAPLGbOT8A4KiI73pRW-e9SWTaQXskw3Ei_dHRILM_l9OXsqoYHJ4Dd3tbfvmjoNYggSw4j50l3unI9d1qR5xlBFpW5sLr8'
    . 'gKX4bnY4SR2nyNiOQNLyPc0B0nW502aMEUCIQDTGOX-i_QrffJDY8XvKbPwMuBVrOSO-ayvTnWs_WSuDQIgZ7fMAvD_Ezyy5jg6fQeuOkoJi8V2naCtzV-HTly8Nww=';

    // Source: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L51
    // Data copyright: https://github.com/Yubico/php-u2flib-server/blob/55d813acf68212ad2cadecde07551600d6971939/tests/u2flib_test.php#L3
    private $clientData2 = 'eyAiY2hhbGxlbmdlIjogInlLQTB4MDc1dGpKLUdFN2ZLVGZuelRPU2FOVU9XUXhSZDlUV3o1YUZPZzgiLCAi'
    . 'b3JpZ2luIjogImh0dHA6XC9cL2RlbW8uZXhhbXBsZS5jb20iLCAidHlwIjogIm5hdmlnYXRvci5pZC5maW5pc2hFbnJvbGxtZW50IiB9';

    private $appId = 'http://demo.example.com';

    protected static function getClassMethod(string $className, string $methodName)
    {
        $class  = new ReflectionClass($className);
        $method = $class->getMethod($methodName);
        $method->setAccessible(true);
        return $method;
    }

    public function testCreateChallenge(): void
    {
        $u2f             = self::getClassMethod(U2FServer::class, 'createChallenge');
        $challengeResult = $u2f->invokeArgs(new U2FServer(), []);
        $this->assertNotEmpty($challengeResult);
        $this->assertGreaterThan(20, strlen($challengeResult));
    }

    public function dataProviderForFixSignatureUnusedBits(): array
    {
        return [
            [
                // This is an example certificate in hex format
                // @see https://fidoalliance.org/specs/u2f-specs-1.0-bt-nfc-id-amendment/fido-u2f-raw-message-formats.html
                '3082013c3081e4a003020102020a47901280001155957352300a06082a8648ce3d0403023017311530130603550403130c476e7562627920'
                . '50696c6f74301e170d3132303831343138323933325a170d3133303831343138323933325a3031312f302d0603550403132650696c6f7447'
                . '6e756262792d302e342e312d34373930313238303030313135353935373335323059301306072a8648ce3d020106082a8648ce3d03010703'
                . '4200048d617e65c9508e64bcc5673ac82a6799da3c1446682c258c463fffdf58dfd2fa3e6c378b53d795c4a4dffb4199edd7862f23abaf020'
                . '3b4b8911ba0569994e101300a06082a8648ce3d0403020347003044022060cdb6061e9c22262d1aac1d96d8c70829b2366531dda268832cb8'
                . '36bcd30dfa0220631b1459f09e6330055722c8d89b7f48883b9089b88d60d1d9795902b30410df',
                '99ab7a0d6a31feb411158184b5acadb8325a2c7e82a55cd709de7771ef6cd3b5',
                '3082013c3081e4a003020102020a47901280001155957352300a06082a8648ce3d0403023017311530130603550403130c476e75626279205'
                . '0696c6f74301e170d3132303831343138323933325a170d3133303831343138323933325a3031312f302d0603550403132650696c6f74476e'
                . '756262792d302e342e312d34373930313238303030313135353935373335323059301306072a8648ce3d020106082a8648ce3d030107034200'
                . '048d617e65c9508e64bcc5673ac82a6799da3c1446682c258c463fffdf58dfd2fa3e6c378b53d795c4a4dffb4199edd7862f23abaf0203b4b'
                . '8911ba0569994e101300a06082a8648ce3d0403020347003044022060cdb6061e9c22262d1aac1d96d8c70829b2366531dda268832cb836bc'
                . 'd30dfa0220631b1459f09e6330055722c8d89b7f48883b9089b88d60d1d9795902b30410df',
            ],
            [
                // This is the "CN=Yubico U2F EE Serial 13831167861" certificate as hex
                // @see https://github.com/privacyidea/privacyidea/blob/v3.4.1/tests/test_lib_tokens_u2f.py#L22
                // After 70d01010b038201010 the 0 is a 2 after transformation
                '3082021c30820106a00302010202043866df75300b06092a864886f70d01010b302e312c302a0603550403132359756269636f205532462'
                . '0526f6f742043412053657269616c203435373230303633313020170d3134303830313030303030305a180f32303530303930343030303030'
                . '305a302b3129302706035504030c2059756269636f205532462045452053657269616c2031333833313136373836313059301306072a8648ce'
                . '3d020106082a8648ce3d03010703420004378dfc740c739b94724ed3d523b9b876810656c13de86fafaecf38d90f55e2c80a1bfe0b30dc53b35'
                . 'de7d045b96dcb8f2bf94fa8e0b903163c7f6edc2e487b71a3123010300e060a2b0601040182c40a01010400300b06092a864886f70d01010b0'
                . '3820101021a4764ca0089cf92adb87fa848538e72cc3efdbb34792943047b8216a939baf4c113562a345b61475979697947bce671aa6a7c06'
                . '796ed4ebb1b8fd602719b71deb3cf642e98db1d9666ff01e6db74f45af7967c046d6e6ff4b4e09a3141834b69af16465ccdecf3a0a809c0aa'
                . '49a7b1943f5bd4e3dae3bdccfde6a713a49269eacfb3f9cede0ba79c6bbfba75e6118e20f0f957ea61eed52688226cab42df791037e97eda5e'
                . '2df6029d2bb7fc327e745e7f9f5862bed29b068cb972a36c86522deb2c7196533335ddfaeb8b6fa0db5026aca845419061aa4d17c070e98fa2'
                . 'fd671d4acd0c290e474a1b4783ec246e0f89a9887c0a4d7a85c662919ba24ea7b9c',
                'dd574527df608e47ae45fbba75a2afdd5c20fd94a02419381813cd55a2a3398f',
                '3082021c30820106a00302010202043866df75300b06092a864886f70d01010b302e312c302a0603550403132359756269636f2055324620526'
                . 'f6f742043412053657269616c203435373230303633313020170d3134303830313030303030305a180f32303530303930343030303030305a30'
                . '2b3129302706035504030c2059756269636f205532462045452053657269616c2031333833313136373836313059301306072a8648ce3d02010'
                . '6082a8648ce3d03010703420004378dfc740c739b94724ed3d523b9b876810656c13de86fafaecf38d90f55e2c80a1bfe0b30dc53b35de7d045'
                . 'b96dcb8f2bf94fa8e0b903163c7f6edc2e487b71a3123010300e060a2b0601040182c40a01010400300b06092a864886f70d01010b038201010'
                . '01a4764ca0089cf92adb87fa848538e72cc3efdbb34792943047b8216a939baf4c113562a345b61475979697947bce671aa6a7c06796ed4ebb1'
                . 'b8fd602719b71deb3cf642e98db1d9666ff01e6db74f45af7967c046d6e6ff4b4e09a3141834b69af16465ccdecf3a0a809c0aa49a7b1943f5b'
                . 'd4e3dae3bdccfde6a713a49269eacfb3f9cede0ba79c6bbfba75e6118e20f0f957ea61eed52688226cab42df791037e97eda5e2df6029d2bb7f'
                . 'c327e745e7f9f5862bed29b068cb972a36c86522deb2c7196533335ddfaeb8b6fa0db5026aca845419061aa4d17c070e98fa2fd671d4acd0c29'
                . '0e474a1b4783ec246e0f89a9887c0a4d7a85c662919ba24ea7b9c',
            ],
        ];
    }

    /**
     * @dataProvider dataProviderForFixSignatureUnusedBits
     */
    public function testFixSignatureUnusedBits(
        string $inputSignatureBlock,
        string $signatureHash,
        string $outputSignatureBlock
    ): void {
        $signature = hex2bin($inputSignatureBlock);
        $this->assertSame($signatureHash, hash('sha256', $signature));
        $u2f    = self::getClassMethod(U2FServer::class, 'fixSignatureUnusedBits');
        $output = bin2hex($u2f->invokeArgs(new U2FServer(), [$signature]));
        $this->assertSame($output, $outputSignatureBlock);
    }

    public function testBase64UEncodeDecode(): void
    {
        $shortBlob = 'Salut';
        $u2f       = self::getClassMethod(U2FServer::class, 'base64uEncode');
        $encoded   = $u2f->invokeArgs(new U2FServer(), [$shortBlob]);
        $this->assertNotEmpty($encoded);
        $this->assertSame('U2FsdXQ', $encoded);
        $u2f     = self::getClassMethod(U2FServer::class, 'base64uDecode');
        $decoded = $u2f->invokeArgs(new U2FServer(), [$encoded]);
        $this->assertNotEmpty($decoded);
        $this->assertSame($shortBlob, $decoded);

        $longBlob  = '&àçècmm!:************************************************************';
        $longBlob .= '^$ùzefzef:ezf:ze;fzefilqsnéà_è(_yà"tjzifzpofkzof,zlgugealuvnskqjvneruieg';
        $u2f       = self::getClassMethod(U2FServer::class, 'base64uEncode');
        $encoded   = $u2f->invokeArgs(new U2FServer(), [$longBlob]);
        $this->assertNotEmpty($encoded);
        $this->assertSame(
            'JsOgw6fDqGNtbSE6KioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKio'
                . 'qKioqKioqKioqKioqXiTDuXplZnplZjplemY6emU7ZnplZmlscXNuw6nDoF_DqChfecOgInRqemlmen'
                . 'BvZmt6b2YsemxndWdlYWx1dm5za3Fqdm5lcnVpZWc',
            $encoded
        );
        $u2f     = self::getClassMethod(U2FServer::class, 'base64uDecode');
        $decoded = $u2f->invokeArgs(new U2FServer(), [$encoded]);
        $this->assertNotEmpty($decoded);
        $this->assertSame($longBlob, $decoded);
    }

    /**
     * @group openssl
     */
    public function testCheckOpenSSLVersion(): void
    {
        $u2f         = self::getClassMethod(U2FServer::class, 'checkOpenSSLVersion');
        $goodVersion = $u2f->invokeArgs(new U2FServer(), []);
        $this->assertTrue($goodVersion);
    }

    /**
     * @group file-system
     */
    public function testGetCerts(): void
    {
        $tempDirName = tempnam(sys_get_temp_dir(), '_testGetCerts');
        unlink($tempDirName); // This is a file for now
        mkdir($tempDirName); // And now a directory
        $tmpFile   = tempnam($tempDirName, 'cert_');
        $u2f       = self::getClassMethod(U2FServer::class, 'getCerts');
        $filesList = $u2f->invokeArgs(new U2FServer(), [$tempDirName]);
        $this->assertSame(
            [
            $tmpFile,
            ],
            $filesList
        );
        unlink($tmpFile);
        rmdir($tempDirName);
    }

    public function testPublicKeyToPem(): void
    {
        $u2f    = self::getClassMethod(U2FServer::class, 'publicKeyToPem');
        $pemKey = $u2f->invokeArgs(
            new U2FServer(),
            [
            '',
            ]
        );
        $this->assertNull($pemKey);
        $pemKeyWrongStart = $u2f->invokeArgs(
            new U2FServer(),
            [
            'd',
            ]
        );
        $this->assertNull($pemKeyWrongStart);
        $pemKeyWrongLength = $u2f->invokeArgs(
            new U2FServer(),
            [
            "\x04",
            ]
        );
        $this->assertNull($pemKeyWrongLength);
        $pemKeyWrongLength = $u2f->invokeArgs(
            new U2FServer(),
            [
            "\x04" . str_repeat('*', 63),
            ]
        );
        $this->assertNull($pemKeyWrongLength);
        $pemKeyOkay = $u2f->invokeArgs(
            new U2FServer(),
            [
                // Public key for "CN=PilotGnubby-0.4.1-47901280001155957352"
                // Value shown by KSE <https://keystore-explorer.org>
                hex2bin(
                    '048D617E65C9508E64BCC5673AC82A6799DA3C1446682C258C463FFFDF58DFD2FA3E6C378B5'
                    . '3D795C4A4DFFB4199EDD7862F23ABAF0203B4B8911BA0569994E101'
                ),
            ]
        );
        $this->assertSame(
            // Value shown by KSE <https://keystore-explorer.org>
            '-----BEGIN PUBLIC KEY-----' . "\r\n"
                . 'MFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEjWF+ZclQjmS8xWc6yCpnmdo8FEZo' . "\r\n"
                . 'LCWMRj//31jf0vo+bDeLU9eVxKTf+0GZ7deGLyOrrwIDtLiRG6BWmZThAQ==' . "\r\n"
                . '-----END PUBLIC KEY-----',
            $pemKeyOkay
        );
    }

    public function testMakeAuthentication(): void
    {
        $regs = [
            (object) [
                'keyHandle' => $this->keyHandle,
                'publicKey' => $this->publicKey,
                'certificate' => $this->certificate,
                'counter' => 3,
            ],
        ];

        $auths = U2FServer::makeAuthentication(
            $regs,
            $this->appId
        );
        $this->assertSame(
            [
                [
                    'version' => 'U2F_V2',
                    'challenge' => $auths[0]->challenge(),
                    'keyHandle' => $this->keyHandle,
                    'appId' => $this->appId,
                ],
            ],
            json_decode(json_encode($auths), true)
        );
    }

    public function testAuthenticate(): void
    {
        $regs = [
            (object) [
                'keyHandle' => $this->keyHandle,
                'publicKey' => $this->publicKey,
                'certificate' => $this->certificate,
                'counter' => 3,
            ],
        ];

        $reqs = [
            new SignRequest(
                [
                'challenge' => $this->challenge,
                'keyHandle' => $this->keyHandle,
                'appId' => $this->appId,
                ]
            ),
        ];
        $this->assertSame('U2F_V2', $reqs[0]->version());

        $response = (object) [
            'signatureData' => $this->signatureData,
            'clientData' => $this->clientData,
            'keyHandle' => $this->keyHandle,
            'errorCode' => 0,
        ];

        $auth = U2FServer::authenticate(
            $reqs,
            $regs,
            $response
        );
        $this->assertSame(
            [
                'keyHandle' => $this->keyHandle,
                'publicKey' => $this->publicKey,
                'certificate' => $this->certificate,
                'counter' => 4,
            ],
            (array) $auth
        );
        $this->assertEquals(4, $auth->counter);
    }

    public function testMakeRegistration(): void
    {
        $regs = [
            (object) [
                'keyHandle' => $this->keyHandle,
                'publicKey' => $this->publicKey,
                'certificate' => $this->certificate,
                'counter' => 3,
            ],
        ];

        $auth = U2FServer::makeRegistration(
            $this->appId,
            $regs
        );
        $this->assertSame(
            [
                'request' => [
                    'version' => 'U2F_V2',
                    'challenge' => $auth['request']->challenge(),
                    'appId' => $this->appId,

                ],
                'signatures' => [
                    (new SignRequest(
                        [
                        'challenge' => $auth['signatures'][0]->challenge(),
                        'keyHandle' => $this->keyHandle,
                        'appId' => $this->appId,
                        ]
                    ))->jsonSerialize(),
                ],
            ],
            json_decode(json_encode($auth), true)
        );
    }

    public function testRegister(): void
    {
        $response = (object) [
            'registrationData' => $this->registrationData,
            'clientData' => $this->clientData2,
            'errorCode' => 0,
        ];

        $registration = U2FServer::register(
            new RegistrationRequest('yKA0x075tjJ-GE7fKTfnzTOSaNUOWQxRd9TWz5aFOg8', $this->appId),
            $response
        );
        $this->assertSame($this->keyHandle, $registration->getKeyHandle());
        $this->assertSame(str_replace('\/', '/', $this->publicKey), $registration->getPublicKey());
        $this->assertSame(str_replace('\/', '/', $this->certificate), $registration->getCertificate());
        $this->assertLessThan(0, $registration->getCounter());
    }

    public function testRegisterAttestationFail(): void
    {
        $this->expectExceptionMessage('Attestation signature does not match');
        $this->expectExceptionCode(U2FException::ATTESTATION_SIGNATURE);
        $this->expectException(U2FException::class);

        $response = (object) [
            // Alter the data
            'registrationData' => str_replace('DY8XvKbPwMuBVrOSO-ayvT', 'DY8XvKbPaMuBVrOSO-ayvT', $this->registrationData),
            'clientData' => $this->clientData2,
            'errorCode' => 0,
        ];

        U2FServer::register(
            new RegistrationRequest('yKA0x075tjJ-GE7fKTfnzTOSaNUOWQxRd9TWz5aFOg8', $this->appId),
            $response
        );
    }

    public function testRegisterChallengeMismatch(): void
    {
        $this->expectExceptionMessage('Registration challenge does not match');
        $this->expectExceptionCode(U2FException::UNMATCHED_CHALLENGE);
        $this->expectException(U2FException::class);

        $response = (object) [
            'registrationData' => $this->registrationData,
            'clientData' => $this->clientData2,
            'errorCode' => 0,
        ];

        $regReq = new RegistrationRequest('yKA0x088tff-GE7fKTfnzTOSaNUOWQxRd9TWz5aFOg8', $this->appId);
        $this->assertSame('U2F_V2', $regReq->version());
        U2FServer::register(
            $regReq,
            $response
        );
    }

    public function testAuthenticateNoChallengeMatch(): void
    {
        $this->expectExceptionMessage('No matching request found');
        $this->expectExceptionCode(U2FException::NO_MATCHING_REQUEST);
        $this->expectException(U2FException::class);


        $regs = [
            (object) [
                'keyHandle' => $this->keyHandle,
                'publicKey' => $this->publicKey,
                'certificate' => $this->certificate,
                'counter' => 3,
            ],
        ];

        $reqs = [
            new SignRequest(
                [
                'challenge' => 'fEnc9oV79EaBgK5BoNERU5gPKM2XGYWrz4fUjgc0000',
                'keyHandle' => $this->keyHandle,
                'appId' => $this->appId,
                ]
            ),
        ];

        $response = (object) [
            'signatureData' => $this->signatureData,
            'clientData' => $this->clientData,
            'keyHandle' => $this->keyHandle,
            'errorCode' => 0,
        ];

        U2FServer::authenticate(
            $reqs,
            $regs,
            $response
        );
    }

    public function testAuthenticateLowCounter(): void
    {
        $this->expectExceptionMessage('Counter too low.');
        $this->expectExceptionCode(U2FException::COUNTER_TOO_LOW);
        $this->expectException(U2FException::class);


        $regs = [
            (object) [
                'keyHandle' => $this->keyHandle,
                'publicKey' => $this->publicKey,
                'certificate' => $this->certificate,
                'counter' => 5,
            ],
        ];

        $reqs = [
            new SignRequest(
                [
                'challenge' => $this->challenge,
                'keyHandle' => $this->keyHandle,
                'appId' => $this->appId,
                ]
            ),
        ];

        $response = (object) [
            'signatureData' => $this->signatureData,
            'clientData' => $this->clientData,
            'keyHandle' => $this->keyHandle,
            'errorCode' => 0,
        ];

        U2FServer::authenticate(
            $reqs,
            $regs,
            $response
        );
    }

    public function testAuthenticateFail(): void
    {
        $this->expectExceptionMessage('Authentication failed');
        $this->expectExceptionCode(U2FException::AUTHENTICATION_FAILURE);
        $this->expectException(U2FException::class);


        $regs = [
            (object) [
                'keyHandle' => $this->keyHandle,
                'publicKey' => $this->publicKey,
                'certificate' => $this->certificate,
                'counter' => 5,
            ],
        ];

        $reqs = [
            new SignRequest(
                [
                'challenge' => $this->challenge,
                'keyHandle' => $this->keyHandle,
                'appId' => $this->appId,
                ]
            ),
        ];

        $response = (object) [
            // Alter the data
            'signatureData' => str_replace('SUAng==', 'SUwww==', $this->signatureData),
            'clientData' => $this->clientData,
            'keyHandle' => $this->keyHandle,
            'errorCode' => 0,
        ];

        U2FServer::authenticate(
            $reqs,
            $regs,
            $response
        );
    }

    public function testRegisterUserAgentError(): void
    {
        $this->expectExceptionMessage('User-agent returned error. Error code: 1');
        $this->expectExceptionCode(U2FException::BAD_UA_RETURNING);
        $this->expectException(U2FException::class);

        $response = (object) [
            'errorCode' => 1,
        ];

        $regReq = new RegistrationRequest('ffffffffffffffffffffffffff', $this->appId);
        $this->assertSame('U2F_V2', $regReq->version());
        U2FServer::register(
            $regReq,
            $response
        );
    }

    public function testAuthenticateNotAnObject(): void
    {
        $this->expectExceptionMessage('$response of authenticate() method only accepts object.');
        $this->expectException(InvalidArgumentException::class);

        U2FServer::authenticate(
            [],
            [],
            []
        );
    }

    public function testRegisterNotAnObject(): void
    {
        $this->expectExceptionMessage('$response of register() method only accepts object.');
        $this->expectException(InvalidArgumentException::class);

        U2FServer::register(
            new RegistrationRequest('ffffffffffffffffffffffffff', $this->appId),
            [
                'errorCode' => 0,
            ]
        );
    }

    public function testRegisterNotABoolean(): void
    {
        $this->expectExceptionMessage('$include_cert of register() method only accepts boolean.');
        $this->expectException(InvalidArgumentException::class);

        U2FServer::register(
            new RegistrationRequest('ffffffffffffffffffffffffff', $this->appId),
            (object) [
                'errorCode' => 0,
            ],
            null,
            null
        );
    }

    public function testAuthenticateUserAgentError(): void
    {
        $this->expectExceptionMessage('User-agent returned error. Error code: 1');
        $this->expectExceptionCode(U2FException::BAD_UA_RETURNING);
        $this->expectException(U2FException::class);


        U2FServer::authenticate(
            [],
            [],
            (object) [
                'errorCode' => 1,
            ]
        );
    }

    public function testMakeBadAuthentication(): void
    {
        $this->expectExceptionMessage('$registrations of makeAuthentication() method only accepts array of object.');
        $this->expectException(\Exception::class);

        U2FServer::makeAuthentication(
            [
                [],
            ],
            $this->appId
        );
    }

}
