<?php

declare(strict_types=1);

namespace Deviantintegral\Har\Tests\Unit;

use Deviantintegral\Har\Cookie;
use Deviantintegral\Har\Log;

/**
 * @covers \Deviantintegral\Har\Cookie
 */
class CookieTest extends HarTestBase
{
    public function testSerialize()
    {
        $serializer = $this->getSerializer();

        $cookie = (new Cookie())
          ->setComment('Test comment')
          ->setCookie('Test cookie')
          ->setDomain('www.example.com')
          ->setExpires(new \DateTime())
          ->setHttpOnly(true)
          ->setSecure(true)
          ->setValue('Test value');

        $serialized = $serializer->serialize($cookie, 'json');
        $this->assertEquals(
          [
            'comment' => $cookie->getComment(),
            'cookie' => $cookie->getCookie(),
            'domain' => $cookie->getDomain(),
            'expires' => $cookie->getExpires()->format(Log::ISO_8601_MICROSECONDS),
            'httpOnly' => $cookie->isHttpOnly(),
            'secure' => $cookie->isSecure(),
            'value' => $cookie->getValue(),
          ],
          json_decode($serialized, true)
        );

        $deserialized = $serializer->deserialize(
          $serialized,
          Cookie::class,
          'json'
        );
        $this->assertEquals($cookie, $deserialized);
    }
}