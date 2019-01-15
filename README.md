## Jak přidat guide
 1. vytvoř v app/presenters nový přesenter jako {nazevBosse}Presenter
 2. Zkopíruj z jinýho bossPresenteru obsah a přejmenuj jak se jmenuje
 3. v app/presenter/templates vytvoř složku s jmenem bosse
 4. Uvnitř složky vytvoř soubor default.latte a vnitř zkopíruj z jinýho default.latte v zložce bosse
 5. otevři app/presenters/template/_includes/header.latte
 6. Pod div s class dropdown menu přidej html tag a a jako n:href dej {nazev presenteru s bossem bez presenter}:default
 
 Pokud si někde zaseklej odkaž se na cokoliv s Champs of Light.