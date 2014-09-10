<?php
include('../../autoload.php');

Use \User as User;
//Use \PHPUnit_Framework_TestCase as PHPUnit_Framework_TestCase;
class StackTest extends PHPUnit_Framework_TestCase{

	/**
	* @var User\Table
	*/
	private $_user;

	public function setUp()
	{
		$this->_user = new User\Table();
	}

    public function testInstanceOf()
    {
        $this->assertInstanceOf('User\Table', $this->_user);
    }

	public function testGetName()
	{
        $this->_user->setName('Lucien Jospin');
		$this->assertEquals('Lucien Jospin', $this->_user->getName());
	}

    public function testEnptyPassword()
    {
        $this->assertEmpty($this->_user->getPassword());
    }

    /**
    * @depends testEnptyPassword
    */
    public function testNewPassword()
    {        
        $this->_user->setNewPassword();
        $this->assertEquals(md5('123546'), $this->_user->getPassword());

    }

}