<?php $page_title = "Startsida"; include("includes/header.php"); ?>

<section>
    <div class="content-intro">
        <h2>Min användning av PHP</h2>
        <p>Min erfarenhet och användning av PHP beskrivs genom svaren på frågorna nedan. </p>
    </div>
    <div class="content index-content">
        <p class="question-paragraphs">
            Har du tidigare erfarenhet av utveckling med PHP?
        </p>
        <p>Nej, men jag har via självstudier hört språket nämnas utan att veta mycket om det.</p>
        <p class="question-paragraphs">
            Beskriv kortfattat vad du upplever är fördelarna med att använda PHP för att skapa webbplatser.
        </p>
        <p>Jag gillar delen att man formulerar de olika komponenterna för sig och 
            binder ihop dem så att de fungerar tillsammans, för lättare felsökning och bättre struktur. 
        Det är också bra att det är relativt enkelt att förstå och hantera PHP om man programmerat tidigare samt att det är lättillgängligt för användning. </p>
        <p class="question-paragraphs">
            Hur har du valt att strukturera upp dina filer och kataloger?
        </p>
        <p>I min projektkatalog med filer har jag 7 filer samt två undermappar med filer. De 7 första filerna innehåller huvudinnehållen på startsidan, varje undersida och en
            sida som en av undersidorna leder vidare till. 
            I undermappen "css" har jag en stilmallsfil. Undermappen "includes" innehåller en textfil som
             hämtas in på en av undersidorna, en fil med funktioner (just nu bara en) samt de filer som bygger upp varje sida på webbplatsen med 
             sidhuvud, navigering och sidfot. 
             </p>
        <p class="question-paragraphs">
            Har du följt guiden, eller skapat på egen hand?
        </p>
        <p>Jag har följt guiden i princip och försökt applicera den på min uppgift.</p>
        <p class="question-paragraphs">Har du gjort några förbättringar eller vidareutvecklingar av guiden (om du följt denna)?</p>
        <p>Jag har styrt lite själv på detaljnivå angående vilka uppbyggnadsdelar av en sida som plockas
             in för att skapa densamma i sin helhet, jag har försökt tänka på att semantiken ska bli godtagbar trots att man sätter ihop element från olika håll.</p>
        <p class="question-paragraphs">Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver (XAMPP, LAMP, MAMP eller
            liknande)
            etcetera)?</p>
        <p>Visual Studio Code och XAMPP, senare publicering på publik webbhost med WinSCP.</p>
        <p class="question-paragraphs">Har något varit svårt med denna uppgift?</p>
        <p>Programmeringsdelarna på varje undersida har varit genomförbara men tagit lite tid och felsökning ibland
             för att få allt rätt. Jag har öppnat sidan i en webbläsare och fått hjälp av att felmeddelanden säger på vilken rad i olika filer som något inte stämmer,
             vilket har gjort det lättare att vidta en åtgärd. Indentering av kod var en krånglig del, 
             upptäckte jag efter att ha tittat på källkoden för sidorna.  
        </p>
    </div>
    <a href="#back-to-top">Till toppen av sidan</a>
</section>

<?php include("includes/footer.php"); ?>