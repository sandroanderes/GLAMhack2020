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
<div class="container mt-3">
    <h1>About</h1>
    <!-- Place content here -->
    <section style="padding-top: 40px !important; padding-bottom: unset !important">
        <h2>Titel</h2>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, temporibus fuga. Magni obcaecati, voluptatibus cumque veniam odio nulla esse vero autem minima. Blanditiis molestias eos, impedit porro aut accusantium adipisci?</p>
        </article>
    </section>
    <section style="padding-top: 40px !important; padding-bottom: unset !important">
        <h2>Titel</h2>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, temporibus fuga. Magni obcaecati, voluptatibus cumque veniam odio nulla esse vero autem minima. Blanditiis molestias eos, impedit porro aut accusantium adipisci?</p>
        </article>
    </section>
    <section style="padding-top: 40px !important; padding-bottom: unset !important">
        <h2>Titel</h2>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, temporibus fuga. Magni obcaecati, voluptatibus cumque veniam odio nulla esse vero autem minima. Blanditiis molestias eos, impedit porro aut accusantium adipisci?</p>
        </article>
    </section>
    <section style="padding-top: 40px !important; padding-bottom: unset !important">
        <h2>Titel</h2>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, temporibus fuga. Magni obcaecati, voluptatibus cumque veniam odio nulla esse vero autem minima. Blanditiis molestias eos, impedit porro aut accusantium adipisci?</p>
        </article>
    </section>
</div>


<!-- == FOOTER == -->
<?php require_once('templates/footer.php'); ?>