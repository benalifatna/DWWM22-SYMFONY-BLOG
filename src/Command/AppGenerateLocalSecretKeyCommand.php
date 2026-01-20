<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:generate-local-secret-key',
    description: 'Creates .env.dev.local file and initialises the APP_SECRET key',
)]
class AppGenerateLocalSecretKeyCommand extends Command
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    // protected function configure(): void
    // {
    //     $this
    //         ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
    //         ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
    //     ;
    // }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $envFile = '.env.dev.local';

        if (file_exists($envFile)) {
            $io->error("The {$envFile} already exists.");

            return Command::FAILURE;
        }

        $secretKey = bin2hex(random_bytes(16));

        file_put_contents($envFile, "APP_SECRET={$secretKey}");

        $io->success('The .env.dev.local file created and the APP_SECRET key initilialised.');

        return Command::SUCCESS;

        // $arg1 = $input->getArgument('arg1');

        // if ($arg1) {
        //     $io->note(sprintf('You passed an argument: %s', $arg1));
        // }

        // if ($input->getOption('option1')) {
        //     // ...
        // }

        // $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
