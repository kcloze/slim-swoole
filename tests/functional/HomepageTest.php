<?php

/*
 * This file is part of slim-swoole.
 *
 * (c) kcloze <pei.greet@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tests\Functional;

class HomepageTest extends BaseTestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting.
     */
    public function testGetHomepageWithoutName()
    {
        $response = $this->runApp('GET', '/');

        $this->assertSame(200, $response->getStatusCode());
        $this->assertContains('SlimFramework', (string) $response->getBody());
        $this->assertNotContains('Hello', (string) $response->getBody());
    }

    /**
     * Test that the index route with optional name argument returns a rendered greeting.
     */
    public function testGetHomepageWithGreeting()
    {
        $response = $this->runApp('GET', '/name');

        $this->assertSame(200, $response->getStatusCode());
        $this->assertContains('Hello name!', (string) $response->getBody());
    }

    /**
     * Test that the index route won't accept a post request.
     */
    public function testPostHomepageNotAllowed()
    {
        $response = $this->runApp('POST', '/', ['test']);

        $this->assertSame(405, $response->getStatusCode());
        $this->assertContains('Method not allowed', (string) $response->getBody());
    }
}
