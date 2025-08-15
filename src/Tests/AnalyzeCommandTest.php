<?php

namespace MigrationLegacyCode\Tests;

use MigrationLegacyCode\Console\AnalyzeCommand;
use Symfony\Component\Console\Tester\CommandTester;
use PHPUnit\Framework\TestCase;

class AnalyzeCommandTest extends TestCase {
    public function testExecute() {
        $command = new AnalyzeCommand();
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $this->assertStringContainsString('Analyse en cours...', $commandTester->getDisplay());
    }
}
