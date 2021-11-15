<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;


class CreateUserCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:hello-world';
    public function __construct()
    {
        // best practices recommend to call the parent constructor first and
        // then set your own properties. That wouldn't work in this case
        // because configure() needs the properties set in this constructor
      

        parent::__construct();
    }
    protected function configure(): void
    {
        $this
        // the short description shown while running "php bin/console list"
        ->setDescription('Hello world app.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command allows you to hello world...')

        //get arguments from user
        ->addArgument('elemanSayisi',InputArgument::OPTIONAL,'Who do you want to greet?') 
        ->addArgument('sonSayi',InputArgument::OPTIONAL, 'Your last name?')
    ;
    }

private function someMethod($elemanSayisi,$sonSayi)
{
$n=$elemanSayisi;
$x=$sonSayi;

//Define array
$arr=array();
//Throw elements into array
$i=0;
for($i=$i+1;$i<=$n;$i++)
{
  $arr[$i-1]=rand(1,$x);
}
//Define first element of array as min  
$min = $arr[0];    
//Loop the array  
for ($i = 0; $i < sizeof($arr); $i++) {   
    //Compare elements of array with min  
   if($arr[$i] < $min)  
       $min = $arr[$i]; 
 
}

//Define first element of array as max  
$max = $arr[0];    
//Loop the array  
for ($i = 0; $i < sizeof($arr); $i++) {   
    //Compare elements of array with max  
   if($arr[$i] > $max)  
       $max = $arr[$i]; 
 
}
//Print array elements
print_r($arr);
echo("\n"."Smallest element in array: " . $min."\n"."Biggest element in array: ".$max);
}
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //write a login message to the application
        $output->writeln(['Hello World App!']);

        // Call someMethod method and print to screen
        $output->writeln($this->someMethod($input->getArgument('elemanSayisi'),$input->getArgument('sonSayi')));

        return 0;

        
    }
}
?>