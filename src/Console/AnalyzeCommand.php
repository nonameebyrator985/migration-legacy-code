<?php

namespace MigrationLegacyCode\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AnalyzeCommand extends Command {
    protected static $defaultName = 'analyze';

    protected function configure() {
        $this->setDescription('Analyse le code hérité et génère un rapport d’amélioration.');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln('Analyse en cours...');
        // Logique d'analyse du code hérité
        return Command::SUCCESS;
    }
}
