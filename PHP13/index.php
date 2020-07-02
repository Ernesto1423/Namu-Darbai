<?php
class Human {
	public $name;
	public $lastName;
	
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
}

$human1 = new Human();
$human2 = new Human();

$human1->setname('Petras');
$human1->setlastName('Rapolas');
$human2->setname('Jonas');
$human2->setlastName('Kibiras');

echo 'First Name: ' . $human1->getName().' </br> Last Name: ' . $human1->getLastName();
?>