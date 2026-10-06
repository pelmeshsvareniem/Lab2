<?php

$denumireProiect = "BibArhiva";
$descriere = "Spațiul personal pentru încărcarea, organizarea și citirea documentelor.";
$versiune = "2.0";

?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $denumireProiect ?> — Biblioteca online</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php require "header.php"; ?>

<main>
    <section class="hero">
        <div class="hero-content">
            <p class="subtitle">BIBARHIVA</p>
            <h1>Documentele tale. Organizate după propriul tău mod.</h1>
            <p>
                <?= $descriere ?>
                Încarcă documente, găsește rapid informația importantă
                și păstrează secțiunile pe care vrei să le regăsești mai târziu.
            </p>

            <a href="#ghid" class="hero-button">
                Cum funcționează
            </a>
        </div>
    </section>

    <section class="carousel-section" id="ghid">
        <div class="section-heading">
            <p class="subtitle">GHID</p>
            <h2>Cum funcționează BibArhiva?</h2>
            <p>
                Câteva etape simple pentru a lucra cu documentele tale.
            </p>
        </div>

        <div class="carousel">
            <div class="slides">

                <div class="slide active">
                    <img src="images/library1.jpg" alt="Încărcarea unui document">

                    <div class="slide-content">
                        <span>01 / ÎNCARCĂ</span>
                        <h3>Adaugă documentele tale</h3>
                        <p>
                            Încarcă documente PDF, DOC, DOCX, EPUB, MOBI
                            sau AZW3 și completează informațiile disponibile:
                            titlu, autor, limbă și taguri.
                        </p>
                    </div>
                </div>

                <div class="slide">
                    <img src="images/library2.jpg" alt="Organizarea documentelor">

                    <div class="slide-content">
                        <span>02 / ORGANIZEAZĂ</span>
                        <h3>Păstrează ce este important</h3>
                        <p>
                            Creează mape pentru cuvintele și secțiunile salvate.
                            Poți adăuga sau elimina rapid fragmentele de care ai nevoie.
                        </p>
                    </div>
                </div>

                <div class="slide">
                    <img src="images/library3.jpg" alt="Citirea unui document">

                    <div class="slide-content">
                        <span>03 / CITEȘTE</span>
                        <h3>Personalizează experiența de citire</h3>
                        <p>
                            Deschide documentul în e-reader și adaptează
                            dimensiunea fontului, culoarea textului și fundalul
                            după preferințele tale.
                        </p>
                    </div>
                </div>

                <div class="slide">
                    <img src="images/library4.jpg" alt="Citirea unui document">

                    <div class="slide-content">
                        <span>04 / CITEȘTE</span>
                        <h3>Personalizează experiența de citire</h3>
                        <p>
                            Deschide documentul în e-reader și adaptează
                            dimensiunea fontului, culoarea textului și fundalul
                            după preferințele tale.
                        </p>
                    </div>
                </div>


            </div>

            <button class="carousel-button previous" id="prev" aria-label="Imaginea precedentă">
                &#10094;
            </button>

            <button class="carousel-button next" id="next" aria-label="Imaginea următoare">
                &#10095;
            </button>

            <div class="dots">
                <button class="dot active" data-slide="0" aria-label="Pasul 1"></button>
                <button class="dot" data-slide="1" aria-label="Pasul 2"></button>
                <button class="dot" data-slide="2" aria-label="Pasul 3"></button>
            </div>
        </div>
    </section>

    <section class="features-section" id="functii">
        <div class="section-heading">
            <p class="subtitle">FUNCȚII PRINCIPALE</p>
            <h2>Tot ce ai nevoie pentru documentele tale</h2>
        </div>

        <div class="features">

            <article class="feature-card">
                <span class="feature-number">01</span>
                <h3>Biblioteca personală</h3>
                <p>
                    Documentele încărcate sunt păstrate într-un spațiu
                    personal, accesibil din contul utilizatorului.
                </p>
            </article>

            <article class="feature-card">
                <span class="feature-number">02</span>
                <h3>Căutare și filtrare</h3>
                <p>
                    Găsește documente după titlu, autor, limbă sau tag
                    și filtrează rezultatele după tipul fișierului.
                </p>
            </article>

            <article class="feature-card">
                <span class="feature-number">03</span>
                <h3>Mape pentru fragmente</h3>
                <p>
                    Salvează cuvinte și secțiuni importante în mape
                    pentru a le putea găsi rapid ulterior.
                </p>
            </article>

            <article class="feature-card">
                <span class="feature-number">04</span>
                <h3>E-reader personalizabil</h3>
                <p>
                    Modifică dimensiunea fontului, culoarea textului
                    și culoarea fundalului în timpul citirii.
                </p>
            </article>

        </div>
    </section>

    <section class="workflow-section" id="flux">
        <div class="workflow-content">
            <p class="subtitle">FLUX SIMPLU</p>
            <h2>De la document la informația salvată</h2>

            <p>
                BibArhiva este construită în jurul unui flux simplu:
                utilizatorul încarcă documentul, îl poate găsi prin căutare,
                îl deschide în e-reader și salvează informațiile importante
                în propriile mape.
            </p>

            <div class="workflow-steps">
                <div>
                    <strong>01</strong>
                    <span>Încarcă</span>
                </div>

                <div>
                    <strong>02</strong>
                    <span>Caută</span>
                </div>

                <div>
                    <strong>03</strong>
                    <span>Citește</span>
                </div>

                <div>
                    <strong>04</strong>
                    <span>Salvează</span>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require "footer.php"; ?>

<script src="script.js"></script>

</body>
</html>