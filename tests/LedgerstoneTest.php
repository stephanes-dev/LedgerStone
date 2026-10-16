<?php
/**
 * Tests for LedgerStone
 */

use PHPUnit\Framework\TestCase;
use Ledgerstone\Ledgerstone;

class LedgerstoneTest extends TestCase {
    private Ledgerstone $instance;

    protected function setUp(): void {
        $this->instance = new Ledgerstone(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ledgerstone::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
