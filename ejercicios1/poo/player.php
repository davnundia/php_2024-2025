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
                $this->Age();
                $this->Score();
                $this->AddCard($);
                $this->set_numfile($numfile);
            }

            //methods
            function Age(){
                
            }

            function Score(){

            }

            function AddCard(int $colour){

            }

            function PlayMinutes(int $min){

            }

            function Render(){

            }
            
        }

        class Team{
            public $name;
            public $players;
            public $matches;
            public $won;
            public $lost;
            public $tie;
            public $score_goals;
            public $conceded_goals;

            //construct
            public function __construct($name, $players, $matches, $won, $lost, $tie, $score_goals, $conceded_goals)
            {
                $this->set_dni($dni);
                $this->set_name($name);
                $this->set_email($email);
                $this->set_numfile($numfile);
            }

            //methods
            function Render(){

            }

            function SignPlayer($player){

            }


        }
    ?>
</body>
</html>