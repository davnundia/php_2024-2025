<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curriculum</title>
</head>
<style>
    #menu{
        display: grid;
        grid-template-columns:1fr 1fr 1fr;
    }
    #menu div{
        text-align:center;
    }
    h1{
        text-align:center;
    }
</style>
<body>
<?php
        $varname = 'idioma';
        $$varname = $languagevar;
        $languagevar = isset($_GET["languagevar"]) ? $_GET['languagevar'] : "castellano";

        if ($languagevar === "ingles"){
            $title = "My curriculum";
            $title_studies = "Studies";
            $CFGS = "Web application development";
            $Bach = "Bachelor's degree";
            $title_knowledges = "Knowledges";
        }

        if ($languagevar === "castellano"){
            $title = "Mi curriculum";
            $title_studies = "Estudios";
            $CFGS = "CFGS Desarrollador de Aplicaciones Web";
            $Bach = "Bachillerato";
            $title_knowledges = "Conocimientos";

        }

        if ($languagevar === "valenciano"){
            $title = "Mi curriculum";
            $title_studies = "Estudis";
            $CFGS = "CFGS Desenvolupador d'Aplicacions Web";
            $Bach = "Bachillerat";
            $title_knowledges = "Coneixements";
        }
    ?>

    <div id="menu">
        <div><a href="./curriculum.php?languagevar=castellano">Castellano</a></div>
        <div><a href="./curriculum.php?languagevar=valenciano">Valenciano</a></div>
        <div><a href="./curriculum.php?languagevar=ingles">Inglés</a></div>
    </div>
    <h1> <?php echo $title ?></h1>
    <h2><?php echo $title_studies ?></h2>
    <ul>
        <li><?php echo $CFGS ?></li>
        <li><?php echo $Bach ?></li>
    </ul>
    <h2><?php echo $title_knowledges ?></h2>
    <ol>
        <li>HTML</li>
        <li>CSS</li>
        <li>JS</li>
        <li>Python</li>
        <li>PHP</li>
        <li>SQL</li>
        <li>C</li>
        <li>JAVA</li>



    </ol> 

   
</body>
</html>