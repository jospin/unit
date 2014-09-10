<?php
	namespace User;

Class Table
{
	private $_name;
	private $_password;

    public function setName($name)
    {
        if (!empty($name)) {
            $this->_name = $name;
        }
        return $this;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function setNewPassword()
    {
        if (empty($this->_password)) {
            $this->setPassword(md5('123456'));
        }
        return $this;
    }

}