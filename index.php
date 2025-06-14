<!DOCTYPE html>
<html lang= "it">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel = "stylesheet" href = "hmw3.css"/>
        <script src = "hmw3.js" defer></script>
    </head>

    <body>
        <header>
            <nav>
                <div class="nav-left">
                    <img src="immagini/menu-lines.e332216.svg" alt="menu" id = "menuButton">
                    <div class ="dropdown">
                        <div class ="dropdown-content-left" id = "dropdownMenu">
                            <a href="#">Modelli</a>
                            <a href="#">Servizi</a>
                            <a href="#">Contatti</a>
                        </div>
                    </div>
                </div>
                
                <div class="logo">
                    <img src="immagini/porsche-crest.8a292fb@2x.png" alt="Porsche">
                </div>

                <div class="nav-right">
                    <img src="immagini/user.c18dabe.svg" alt="areapersonale" id = "areaPersonaleButton">
                    <div class="dropdown">
                        <div class="dropdown-content-right" id = "areaPersonaleMenu">
                            <a href="login.html">Accedi</a>
                            <a href="registazione.html">Registrati</a>
                        </div>
                    </div>
                </div>
            </nav>
            
            <div class = "hero">
                <img src="immagini/3999A0FA30AF4E76A7179B156330EC0D_EC4E02BA344A435BB1F5F992C4004419_KW13---WW---Solar-Park-Taycan---Mobile---new"  alt = "Porsche"/>
                <div class = "overlay">
                    <h1>Born to Perform</h1>
                    <p>Prestazioni ed eleganza senza compromessi</p>
                    <a href="api/modello.php?modello=Porsche%20taycan" class="cta">Scopri di più</a>
                </div>
            </div>
        </header>


        <section class="models">
            <article class="model-card">
                <img src="immagini/1A0123EB8FEF44728C80D8DC0F9743E2_EE3E77917C794EF785A11C6F7474BCFF_Nevada---Mobile" alt="Porsche 911">
                <h2>Porsche 911</h2>
                <p>L'iconica sportiva con motore posteriore.</p>
                <div class="buttons">
                    <a href="api/modello.php?modello=Porsche%20911" class = "cta">Scopri di più</a>
                </div>
                
            </article>

            <article class="model-card">
                <img src="immagini/BA984301AA8F495AB2E08123AC9D55DE_B82E1B7982A740E5B5651E941AD81D96_NEW-Taycan---Desktop" alt="Porsche Taycan">
                <h2>Porsche Taycan</h2>
                <p>La sportiva elettrica ad alte prestazioni.</p>
                <div class="buttons">
                    <a href="api/modello.php/modello=Porsche%20taycan" class = "cta">Scopri di più</a>
                </div>
                
            </article>

            <article class="model-card">
                <img src="immagini/657C1C9232C0426583987BC10E7EAE09_B3896980D34C432290085ED61B6F477F_Cayenne---Desktop" alt="Porsche Cayenne">
                <h2>Porsche Cayenne</h2>
                <p>Il SUV versatile con prestazioni da vettura sportiva.</p>
                <div class="buttons">
                    <a href="api/modello.php?modello=Porsche%20Cayenne" class = "cta">Scopri di più</a>
                </div>
                
            </article>

            <article class="model-card">
                <img src="immagini/77EB2C62CE774603BC3F3E7608D825B4_8A9336ACA42B4A6F87B5C8B28FEFF8D6_Berlin---Mobile" alt="Porsche Macan">
                <h2>Porsche Macan</h2>
                <p>Il SUV compatto dal carattere tipicamente Porsche.</p>
                <div class="buttons">
                    <a href="api/modello.php?modello=Porsche%20Macan" class = "cta">Scopri di più</a>
                </div>
                
            </article>

            <article class="model-card">
                <img src="immagini/B768914D594948D5A6F6D413CA4F68BC_EA2DA57CE1ED49729E0419241F923420_NEW-Panamera---Mobile" alt="Porsche Panamera">
                <h2>Porsche Panamera</h2>
                <p>L'elegante sportiva a quattro posti.</p>
                <div class="buttons">
                    <a href="api/modello.php?modello=Porsche%20Panamera" class = "cta">Scopri di più</a>
                </div>
            </article>

            <article class="model-card">
                <img src="immagini/ED7B67BEEAD349D788345A5F86AFB8E7_D715C6400DDD4106B877CCA6AB2B7A5B_BX24I3HOX0040_mobile" alt="Porsche 718">
                <h2>Porsche 718</h2>
                <p>La vettura sportiva a due posti con motore centrale.</p>
                <div class="buttons">
                    <a href="api/modello.php?modello=Porsche%20718" class = "cta">Scopri di più</a>
                </div>
            </article>
        </section>

        <section class = "shop">
            <h2>Online Shop Highlights</h2>
            <div class = "shop-grid">
                <div class="product">
                    <img src ='immagini/4905B36EC8794BE190619C9729C7227C_92E7D176193D49E7872FE9F10E6368E3_PflegesetPepita_4-3' alt = "box-tetto">
                    <h3>Kit per la cura Porsche</h3>
                    <div class = "button">
                        <a href="#" class = "cta">Aggiungi al carrello</a>
                    </div>
                    
                </div>
                <div class="product">
                    <img src ='immagini/0AE46ED52EDB4C719B07A466DE3D4CAA_0AFCE00E733A4F1F88CABB951CF1021A_008-extended-teaser_4-3_PerformanceDachbox_3840x2880' alt = "box-tetto">
                    <h3>Box Performance di Porsche</h3>
                    <div class = "button">
                        <a href="#" class = "cta">Aggiungi al carrello</a>
                    </div>
                </div>
                <div class="product">
                    <img src ='immagini/4CAAD3F8727B494F86B24BC498416C93_FA535FE556574A299931390E4494B072_008-extended-teaser_4-3_WAP064EBT0P00M_3840x2880' alt = "box-tetto">
                    <h3>Porsche eBike Sport</h3>
                    <div class = "button">
                        <a href="#" class = "cta">Aggiungi al carrello</a>
                    </div>
                </div>
                <div class="product">
                    <img src ='immagini/5E56D01974744F388689C130767A553C_748239AADAE84423BB38BDF642B88D62_Extended-Teaser---Luggage' alt = "box-tetto">
                    <h3>Roadster Hardcase 4W Trolley M</h3>
                    <div class = "button">
                        <a href="#" class = "cta">Aggiungi al carrello</a>
                    </div>
                </div>
                <div class="product">
                    <img src ='immagini/01113C661E454250A90DF96D28FFB788_8CD0F3ACAA4B43F396EE54BE23F90FE4_008-extended-teaser_4-3_VM22_0690_3840x2880' alt = "box-tetto">
                    <h3>Telo copriauto Porsche</h3>
                    <div class = "button">
                        <a href="#" class = "cta">Aggiungi al carrello</a>
                    </div>
                </div>
                <div class="product">
                    <img src ='immagini/AD699481E34147B8BBF3F61D574A55F8_6C99DF03ED1248979EE10B951066A6CB_008-extended-teaser_4-3_4044709510350_3840x2880' alt = "box-tetto">
                    <h3>Occhiali da Sole P'8478</h3>
                    <div class = "button">
                        <a href="#" class = "cta">Aggiungi al carrello</a>
                    </div>
                </div>
                <div class="product">
                    <img src ='immagini/C69A7EBB1F7D4549B26E659EB79780F2_5810517FDA65417FB5E87E43CF8660A8_008-extended-teaser_4-3_WAP0502020PTHB_3840x2880' alt = "box-tetto">
                    <h3>Tazza termica Porsche XL</h3>
                    <div class = "button">
                        <a href="#" class = "cta">Aggiungi al carrello</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="api-section">
            <div id = "weather"></div>
            <h2>Ultime notizie su Porsche</h2>
            <div id="news-list" class="news-list">
                <p>Caricamento notizie…</p>
            </div>
        </section>
        
        <footer>
            <p> © 2025 Porsche. All Rights Reserved.</p> 
        </footer>
    </body>
</html>