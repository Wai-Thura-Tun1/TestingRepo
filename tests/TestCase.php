<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use SebastianBergmann\Type\VoidType;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
