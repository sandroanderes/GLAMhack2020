<!-- ===== Controller ===== -->
<!-- ===== Controller ===== -->
<?php
// Alle Site-relevanten Werte
require_once('config/config.php');
// Alle DB-Abfragen
require_once('config/data.php');

$currentpage = "about";

require_once('templates/header.php');

?>
<!-- ===== Start View ===== -->
<!-- == HEADER == -->
<?php require_once('templates/header.php'); ?>

<!-- ==== CONTENT ==== -->
<!-- ==== CONTENT ==== -->
<div class="container article about mt-3">
    <h1>Über</h1>
    <!-- Place content here -->
    <section style="padding-top: 48px !important; padding-bottom: unset !important">
        <h2>Über uns</h2>
        <article>
            <p>Diese Webseite entstand im Rahmen des 6. Swiss Open Cultural Data Hackathon vom 5. + 6. Juni 2020. Die Motivation hinter diesem Projekt ist es aufzuzeigen, welche Bedeutung der kostenfreie und bedingungslose Zugang zu Kulturdaten für die Gesellschaft haben kann. Unser Projekt ist als Aufforderung an Museen und Bibliotheken zu verstehen, ihre Kulturdaten der Öffentlichkeit zugänglich zu machen. <br><br>
            Unsere Projektgruppe setzt sich aus folgenden Personen zusammen:<br></p>
            
            <ul>
               <li><a href="https://github.com/sandroanderes" target="_blank">Sandro Anderes</a></li>
               <li><a href="https://www.indumi.ch/" target="_blank">David Indumi</a></li>
               <li><a href="https://github.com/Frankie1996" target="_blank">Frank Zinsli</a></li>
               <li><a href="https://bernhardaebersold.ch/" target="_blank">Bernhard Aebersold</a></li>
            </ul>
        </article>
    </section>
    <section style="padding-top: 40px !important; padding-bottom: unset !important">
        <h2>Die Daten</h2>
        <article>
            <p>Die Daten stammen ursprünglich von der EPFL Lausanne und enthalten die Zeitungsartikel der beiden Schweizer Zeitungen “Gazette de Lausanne” und “Tribune de Genève” aus dem Jahr 1914. Die Daten können auf <a href="https://opendata.swiss/en/dataset/journal-de-geneve-gazette-de-lausanne-1914" target="_blank">Open Data</a> abgerufen werden.</p>
        </article>
    </section>
    <section style="padding-top: 40px !important; padding-bottom: unset !important">
        <h2>Das Projekt</h2>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, temporibus fuga. Magni obcaecati, voluptatibus cumque veniam odio nulla esse vero autem minima. Blanditiis molestias eos, impedit porro aut accusantium adipisci?</p>
        </article>
    </section>
    <section style="padding-top: 40px !important; padding-bottom: unset !important">
        <h2>Swiss Open Cultural Data Hackathon</h2>
        <article>
            <p>Die diesjährige Ausgabe des Swiss Open Cultural Data Hackathon fand vom 5. bis 6. Juni 2020 als reiner Online-Hackathon statt. Der Event wurde virtuell vom Schweizerischen Institut für Informationswissenschaft an der Fachhochschule Graubünden in Zusammenarbeit mit dem Institut für Multimedia-Produktion durchgeführt. Der Schwerpunkt des GLAMhack liegt auf Linked Open Data, Maschinelles Lernen, Mensch-Computer-Interaktion und Crowdsourcing.</p>
        </article>
    </section>
</div>


<!-- == FOOTER == -->
<?php require_once('templates/footer.php'); ?>