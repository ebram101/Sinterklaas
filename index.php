<?php
/** created by: Ebram Moawad 2023 ...
 * 
 */
$oudeman = 'sinterklaas';

//hieronder vindt je mijn opdracht 2 de vairable wat ik ga uitleggen met comments
echo "welkom $oudeman <br>";
//dit is mijn naam
$name = 'Ebram';
echo "<h2> <FONT COLOR=#ff000> <br>". ($name) .  " </FONT> is mijn voornaam <br></h2>";
//dit is mijn achternaam
     $lastname = 'Moawad';
        echo ($lastname). " is mijn achternaam <br>";
              // dit is mijn email
        $email = "ebrammoawad@outlook.com";
                     echo   " Dit is mijn email" . "<a href='mailto:($email)'> ($email) </a>";
        // dit is mijn tel
$tel = '0630979770';
     echo "<br>" ."Mijn telefoon nummer is ($tel)";
     // hier leg ik uit hoe mijn broer heet en hoeveel ik er heb
$broer = 'Joe';
    echo "<br>". "Mijn broer heet $broer, dit is ook mijn enige broer" ."<br/>";
    // hier leg ik uit waar ik vandaan kom en waar ik ben opgegeroeid.
$land = 'Egypte';
    echo "<br>". "Ik kom uit $land en ben daar geboren". "<br/>";
    //hier leg ik uit wat voor opleiding ik doe op dit moment
$opleiding = 'AD Software development';
    echo "<br>". "Ik doe nu de opleiding $opleiding voor 2 jaar";
    //hier leg ik uit waar ik woon☻
$stad = 'Almere';
    echo "<br>" . "Ik woon nu in $stad";
// hier leg ik uit wat mijn leeftijd is
$leeftijd = '20 jaar oud';
echo "<br>" . " Ik ben nu $leeftijd";
// hier leg ik uit wat mijn hoogte is
$hoogte = '180';
echo "<br>" . "Mijn lengte is $hoogte" ."<br>";




$gebruiker = array(
    'Naam' => 'Ebram',
    'Achternaam' => 'Moawad',
    'Email' => 'ebrammoawad48@outlook.com'
);

foreach($gebruiker as $sleutel => $waarde) {
    echo $sleutel . ': ' . $waarde . '<br>';
}



    










?>
