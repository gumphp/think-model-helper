<?php
namespace tests;

use think\console\Input;
use think\console\Output;
use gumphp\model\helper\Command;

class CommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCommand()
    {
        $input = new Input(['tests\\model\\User','-O']);

        $output = new Output();

        $command = new Command();

        $command->run($input, $output);

    }
}