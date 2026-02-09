<?php
/**
 * Tests for DockerFile
 */

use PHPUnit\Framework\TestCase;
use Dockerfile\Dockerfile;

class DockerfileTest extends TestCase {
    private Dockerfile $instance;

    protected function setUp(): void {
        $this->instance = new Dockerfile(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dockerfile::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
