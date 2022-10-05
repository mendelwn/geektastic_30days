<?php
/*
 * Write a Person class with an instance variable, $age, and a constructor that takes
 * an integer, $initialAge, as a parameter. The constructor must assign $initialAge to $age after confirming the
 * argument passed as $initialAge is not negative; if a negative argument is passed as $initialAge, the constructor
 * should set $age to 0 and print "Age is not valid, setting age to 0", setting age to 0.
 * In addition, you must write the following instance methods:

    1 yearPasses() should increase the $age instance variable by 1.
    2 amIOld() should perform the following conditional actions:
        If age < 13, print You are young..
        If age >= 13 and age < 18 , print You are a teenager.
        Otherwise, print You are old.
*/

class Person
{
    public $age;

    public function __construct($initialAge)
    {
        $this->age = $initialAge;
        if ($initialAge < 0) {
            $this->age = 0;
            print("Age is not valid, setting age to 0.\n");
        }
    }

    public function amIOld()
    {
        $msg = "You are old";
        if ($this->age < 13)
            $msg = "You are young";
        if ($this->age >= 13 && $this->age < 18)
            $msg = "You are a teenager";

        print("$msg.\n");
    }

    public function yearPasses()
    {
        $this->age++;
    }
}

$T = intval(fgets(STDIN));
for ($i = 0; $i < $T; $i++) {
    $age = intval(fgets(STDIN));
    $p = new Person($age);
    $p->amIOld();
    for ($j = 0; $j < 3; $j++) {
        $p->yearPasses();
    }
    $p->amIOld();
    echo "\n";

}
