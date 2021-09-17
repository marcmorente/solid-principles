<?php

interface Animals
{
    public function run();
}

interface Birds
{
    public function fly();
}

interface Cans
{
    public function bark();
}


class Dog implements Animals, Cans
{


    public function run()
    {
        echo "Dog is running\n";
    }

    public function bark()
    {
        echo "Dog is barking\n";
    }
}


class Bird implements Animals, Birds
{

    public function run()
    {
        echo "Bird is running\n";
    }

    public function fly()
    {
        echo "Bird is flying\n";
    }
}

$bird = new Bird();
$bird->run();
$bird->fly();

$dog = new Dog();
$dog->run();
$dog->bark();
