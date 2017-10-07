<?php
/**
 * Creado Por icode.mx
 * User: Oscar Arzola
 * Date: 10/6/17
 * Time: 5:55 PM
 */

use PHPUnit\Framework\TestCase;
use Mockery as m;

class TestTest extends TestCase
{
    public function test_ok()
    {
        $mailer = m::mock('PHPMailer');
        $mailer->shouldReceive('from')->with('os@icode.mx')->andReturnSelf();
        $mailer->shouldReceive('to')->withArgs(['os@icode.mx'])->andReturnSelf();
        $mailer->shouldReceive('message')->with('Hello')->andReturnSelf();
        $mailer->shouldReceive('send')->andReturn(true);
        $file = sendMail('os@icode.mx', $mailer);
        $this->assertTrue($file);
    }
}
