<?php

/**
 * This file is part of the Skunka MakerBundle Extension package.
 * 
 * It require Symfony MakerBundle to work.
 * 
 * For their contribution to Symfony MakerBundle, thanks to :
 *  - Javier Eguiluz <javier.eguiluz@gmail.com>
 *  - Ryan Weaver <weaverryan@gmail.com>
 *  - Kévin Dunglas <dunglas@gmail.com>
 * 
 * For the full copyright and licence information, please view the LICENCE
 * file that was distributed with this source code.
 */

namespace Skunka\MakerBundle\Maker;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Bundle\MakerBundle\InputAwareMakerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;

/**
 * Core:
 * - User should only add new content with include statement to allow difference between regenerate and overwrite options ?
 */
class SkunkaMakeCrud extends AbstractMaker implements InputAwareMakerInterface
{
    public function __construct() {}

    public static function getCommandName(): string 
    {
        return 'sk:maker:build';
    }

    public static function getCommandDescription(): string 
    {
        return 'Create or update CRUD for doctrine entity class';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig): void
    {
        /**
         * Arguments :
         * - Entity class | Namespace
         * - Custom template 
         * 
         * Options :
         * - Worker: generate [default] | regenerate | overwrite -> define which worker should operate the CRUD generation 
         * 
         * Help.txt
         */
        $command
            ->addArgument('name', InputArgument::OPTIONAL, 'Class name or namespace to build CRUD. [WIP]')
            ->addOption('template', InputOption::VALUE_NONE, 'Select template to use for generation. Default use: accessibility, bootstrap, stimulus and vuejs. See sk:maker:help for more informations [WIP]')
            ->addOption('worker', InputOption::VALUE_NONE, 'Worker to use for CRUD operations: generate [default] | regenerate | overwrite. [WIP]')
        ;
    }   

    public function interact(InputInterface $input, ConsoleStyle $io, Command $command): void
    {
        /**
         * 1 - Ask for entity class | namespace if not specified
         * 
         * 2 - Options warning
         * 
         */

         // 1 - Ask for entity class | namespace if not specified
         if ($input->getArgument('name')) {
            return;
         }

    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator): void
    {
        /**
         * Execute tasks [ErrorHandling -> keep tasks list and status then ask for rollback ]
         */
    }

    public function configureDependencies(DependencyBuilder $dependencies, InputInterface $input = null): void
    {

    }
}
