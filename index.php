<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Voorwoord</title>

    <!-- Add bootstrap first, then own stylesheet-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="kleurtjens.css" rel="stylesheet" />
</head>

<body style="background-color: rgb(163, 202, 243); margin-top:20px;">
        <div class="row"> 

            <!-- Voetnoten-->
            <div class="col-md-3">
                <br><br><br>
                <p class="voetnoot">
                    <sup>[1]</sup> HTML, de primaire programmeertaal die gebruikt wordt voor het maken van websites, staat voor HyperText Markup Language. De taal is gemaakt voor het organiseren van grote hoeveelheden data, en het mogelijk maken te navigeren in deze data via links 
                    <br>
                </p>
                <p class= "voetnoot">
                    <sup>[2]</sup> Het ontstaan van hypertext wordt toegeschreven aan de schrijver Jorge Luis Borges, die in zijn korte verhaal ‘The Garden of Forking Paths’ het verhaal van de hoofdpersoon schrijft als een labyrinth wat steeds weer op zichzelf terugkomt, en daardoor tot in het oneindige doorgaat (<a class="extern" href=http://www.ninch.org/bb/report/JM2.pdf>Murray</a>, p. 3, 2003).
                    <br>
                </p>
            </div>

            <!-- Main text-->
            <div class="col-md-6", style="background-color: white;">

            <div class="voorblad">
                <h2><b>Schrijven als <i>agency</i> ten tijde van de klimaatcrisis:</b></h2><br>
                <h4>Een onderzoek naar hypertext en inheems schrijven als vormen van verzet, door het kader van Hélène Cixous en Donna Haraway</h4>
                <p>
                    <i>Door Roos Huisman<br>
                    Website gemaakt door Meike Klunder</i>
                </p>
                <hr style="border:solid 0.8px grey;">
                <p style="text-align: left">
                    Universiteit van Amsterdam<br>
                    <i>Opleiding</i>: Bèta-Gamma<br>
                    <i>Datum</i>: 28-06-2023<br>
                    <i>Begeleider</i>: Aukje van Rooden<br>
                    <i>Studentnummer</i>: 12814105<br>
                    <i>Woordenaantal</i>: 8752<br>
                </p>


            </div>

            <div class="main_text">
                <br><h3>Voorwoord</h3>
                <p>
                    Beste lezer,<br><br>
                    Deze scriptie is geschreven in de vorm van <a href="hypertext.php">hypertext</a>. <a href="hypertext.php">Hypertext</a> is een online schrijfvorm, waarvan de basisstructuur bestaat uit webpagina’s die met elkaar zijn verbonden via hyperlinks. Wikipedia is het meest succesvolle voorbeeld van een gratis toegankelijk, collaboratief hypertext platform (<a class="extern" href=https://books.google.com/books?hl=nl&lr=&id=pVoGEAAAQBAJ&oi=fnd&pg=PR11&dq=Murray,+J.+H.+(2011).+Inventing+the+medium:+principles+of+interaction+design+as+a+cultural+practice.+Mit+Press.&ots=-SfaK96SK_&sig=yibSOzBhtz-1W3Ji5NGCxpNGFv8>Murray</a>, 2001, p. 255). Tegenwoordig zou men zelfs het gehele internet als een groot hypertext netwerk kunnen zien<sup>1</sup>.                
                </p>

                <p>
                Ik heb in de scriptie enkele snelkoppelingen toegevoegd die het navigeren makkelijker maken. Naast de standaard links, die zich in de tekst bevinden en naar andere delen van de tekst verwijzen, is er onderaan iedere pagina links een knop waarmee je terug kunt naar de vorige pagina, en onderaan rechts een link naar de inhoudsopgave. Vanaf de inhoudsopgave kun je naar ieder deel van de tekst navigeren, en zien welke delen je al hebt gelezen (de gelezen links zijn paars). Ik raad echter aan de tekst niet via de inhoudsopgave te lezen, maar je als een wandelaar in een park<sup>2</sup>  door de tekst heen te bewegen via de links.                
                </p>

                <p>
                Het is mogelijk om zelf een toevoeging te doen aan de tekst, in de vorm van een comment. In een comment kun je ook een link toevoegen naar een artikel, andere tekst, video, etc. De comments maken het mogelijk te engageren met de tekst door zelf het netwerk uit te breiden. Beperk je alsjeblieft tot inhoudelijke toevoegingen en vragen, en niet enkel tot het uiten van waardering of tegenstand. Je comment zal niet meteen verschijnen, hij wordt zichtbaar wanneer je de pagina herlaadt. De comments blijven zichtbaar voor de volgende lezers van de tekst. 
                </p>

                <p>
                In de tekst zijn interne links blauw, ze worden paars wanneer je de pagina al bezocht hebt. Externe links, zoals artikelen, zijn groen. Om in de hoofdtekst te beginnen, kun je via deze link navigeren naar de <a href="inleiding.php">inleiding</a>.                </p>
            </div>
            </div>
            
            <!-- Comments-->
            <div class="col-md-3">
                <p>
                <div class="comment">
                    <?php 
                        $filename = 'index';
                        include 'show_comments.php';
                    ?>
                </div>
                </p>

                <p>
                <?php 
                    $filename = 'index';
                    include 'commentbox.php'; 
                ?>
                </p>
           </div>
        </div>       
    <br>

    <ul>
        <li class="button_right">
            <a href="conclusie.php">Conclusie</a>
        </li>
        <li class="button_left">
            <a href="inhoud.php">Inhoud</a>
        </li>
    </ul>

</body>
</html> 