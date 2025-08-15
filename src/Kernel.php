<?php

namespace MigrationLegacyCode;

use Symfony\Component\Console\Application;

class Kernel {
    public function run() {
        $app = new Application();
        $app->add(new Console\AnalyzeCommand());
        $app->run();
    }
}
