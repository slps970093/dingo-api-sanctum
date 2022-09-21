<?php

namespace Slps970093\DingoApiSanctum\Tests;


use Slps970093\DingoApiSanctum\SanctumSPA;
use Dingo\Api\Routing\Route;
use PHPUnit\Framework\TestCase;
use Illuminate\Http\Request;
use Mockery as m;
use Dingo\Api\Http\Response;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class SanctumSPATest extends TestCase
{
    protected $auth;

    /**
     * @var SanctumSPA
     */
    protected $provider;

    public function tearDown(): void
    {
        parent::tearDown();
        // make sure mocker is cleaned up
        m::close();
        // reset response formatters on tear down
        Response::setFormatters([]);
        Response::setFormatsOptions([]);
    }

    public function setUp(): void
    {
        parent::setUp();

        $this->auth = m::mock('Illuminate\Auth\AuthManager');
        $this->provider = new SanctumSPA($this->auth);
    }


    public function testInvalidSanctumCredentialsThrowsException()
    {
        $this->expectException(UnauthorizedHttpException::class);

        $request = Request::create('GET', '/');

        $this->auth->shouldReceive('guard')->andReturn(m::self());

        $this->auth->shouldReceive('user')->once()->andReturn(null);

        $this->provider->authenticate($request, m::mock(Route::class));
    }

    public function testAuthenticatingSucceedsAndReturnsUserObject()
    {
        $request = Request::create('GET', '/');

        $this->auth->shouldReceive('guard')->andReturn(m::self());

        $this->auth->shouldReceive('user')->once()->andReturn((object) ['id' => 1]);

        $this->assertSame(1, $this->provider->authenticate($request, m::mock(Route::class))->id);
    }
}