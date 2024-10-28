<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>player</title>
</head>
<body>
    <?php
        class Player{
            //atributes
            public $name;
            public $birth_day;
            public $country;
            public $dorsal;
            public $position;
            public $goals;
            public $matches;
            public $minutes;
            public $yellow_card;
            public $red_card;

            //construct
            public function __construct($name, $birth_day, $country, $dorsal, $position, $goals, $matches, $minute, $yellow_card, $red_card)
            {
                $this->set_dni($dni);
                $this->set_name($name);
                $this->set_email($email);
                $this->set_numfile($numfile);
            }

            //methods
            function Age(){
                
            }

            function Score(){

            }

            AddCard(int colour){

            }

            
            
        }
    ?>
</body>
</html>