<?php
/**
 * Tests for LayerVault
 */

use PHPUnit\Framework\TestCase;
use Layervault\Layervault;

class LayervaultTest extends TestCase {
    private Layervault $instance;

    protected function setUp(): void {
        $this->instance = new Layervault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Layervault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
