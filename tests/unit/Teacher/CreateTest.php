<?php
namespace Teacher;

use App\Teacher;
  
class CreateTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
      $name = 'Teacher';
      $teacher = new Teacher;
      $teacher->name = 'Teacher';
      $teacher->user_ufba = '123';
      $teacher->collegiates = '123';
      $teacher->save();
      $this->tester->seeRecord('teachers', ['name' => $name]);
    }
}