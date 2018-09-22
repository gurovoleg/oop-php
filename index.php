<?php

	class User {
		public $name;
		public $age;
		public $city;

		public function __construct($name, $age, $city) {
			$this->name = $name;
			$this->age = $age;
			$this->city = $city;
		}

		public function greeting() {
			echo "Привет! Меня зовут $this->name. Мне $this->age лет. Я из города $this->city.";
		}
	}

	$user1 = new User("Олег",39,"Москва");
	$user2 = new User("Иван",29,"Ялта");

	$user1->greeting();
	echo "<br><br>";
	$user2->greeting();

?>