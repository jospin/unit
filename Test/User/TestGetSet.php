<?php
include('/autoload.php');

Use \User as User;
Use \PHPUnit_Framework_TestCase as PHPUnit_Framework_TestCase;
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
    * @dataProvider additionProvider
    */
    public function testNewPassword()
    {
        $this->assertEquals(md5('123456'));

    }

    public function additionProvider()
    {
        $userTable = new User\Table();
        return $userTable->setNewPassword()->getPassword();
    }
}