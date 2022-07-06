<?php

namespace Skunka\MakerBundle\Maker;

use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Bundle\MakerBundle\InputAwareMakerInterface;

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
         * 
         * Options :
         * - Regenerate !Overwrite
         * - Overwrite !Regenerate
         * - Custom template 
         * - Tasks options (See interact())
         * - Entity properties form type // --properties="[id => ignore, tasks => entitytype, phonenumber => teltype]
         */
    }

    public function interact(InputInterface $input, ConsoleStyle $io, Command $command): void 
    {
        /**
         * Ask for entity class | namespace if not specified
         * 
         * Tasks :
         * - Controller class exist | namespace -> true: ask for regenerate | overwrite | cancel  (For each exist class ?) -> false: continue
         * - Repository not exist -> true: create -> false continue
         * - Templates exist -> true: ask for regenrate | overwrite | cancel
         * 
         * Build taskArray
         * 
         */
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator): void 
    {
        /**
         * Execute tasks [ErrorHandling -> keep tasks list and status then ask for rollback ]
         */
    }

    public function configureDependencies(DependencyBuilder $dependencies): void 
    {

    }
}