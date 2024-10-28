<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clases</title>
</head>
<body>
    <?php
        class Person{
            //Propieties
            private $dni;
            private $name;
            private $email;

            //construct
            public function __construct($dni, $name, $email){
                $this->set_dni($dni);
                $this->set_name($name);
                $this->set_email($email);
            }

            // Methods
            function set_dni($dni) {
                $this->dni = $dni;
            }
            function get_dni() {
                return $this->dni;
            }

            function set_name($name) {
                $this->name = $name;
            }
            function get_name() {
                return $this->name;
            }

            function set_email($email) {
                $this->email = $email;
            }
            function get_email() {
                return $this->email;
            }


            function show(){
                echo $this->get_dni();
                echo "<br>";
                echo $this->get_name();
                echo "<br>";
                echo $this->get_email();
                echo "<br>";

            }
        }

        class Student extends Person{
            private $numfile;

            public function __construct($dni, $name, $email, $numfile)
            {
                parent::__construct($dni, $name, $email);
                $this->set_dni($dni);
                $this->set_name($name);
                $this->set_email($email);
                $this->set_numfile($numfile);
            }


            // Methods
            function set_numfile($numfile) {
                $this->numfile = $numfile;
            }

            function get_numfile() {
                return $this->numfile;
            }

            function show(){
                echo "<br>";
                parent::show();
                echo $this->get_numfile();
            }

        }
        $person1 = new Person("01234567L", "David", "mail@gmail.com");
        $student1 = new Student("98745616L", "Juan", "Juan@gmail.com", 1);

        $person1->set_email("david@gmail.com");
        $person1->show();
        $student1->show();
    ?>
    
</body>
</html>