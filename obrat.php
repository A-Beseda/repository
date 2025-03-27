<?php
// Získanie cesty k ploche
$desktopPath = getenv("USERPROFILE") . "\\Desktop\\report.txt";

// Funkcia na získanie predajných položiek
function vypis() {
    return [
        'telefon' => ['cena' => 500, 'mnozstvo' => 1],
        'smart_hodinky' => ['cena' => 120, 'mnozstvo' => 8],
        'airpods' => ['cena' => 120, 'mnozstvo' => 8],
        'notebook1' => ['cena' => 900, 'mnozstvo' => 2],
        'tablet' => ['cena' => 450, 'mnozstvo' => 1],
        'notebook2' => ['cena' => 450, 'mnozstvo' => 1],
    ];
}

// Funkcia na určenie najpredávanejšieho produktu
function najpredavanejsi($polozky) {
    $najviac = '';
    $maxMnozstvo = 0;
    foreach ($polozky as $produkt => $detaily) {
        if ($detaily['mnozstvo'] > $maxMnozstvo) {
            $maxMnozstvo = $detaily['mnozstvo'];
            $najviac = $produkt;
        }
    }
    return $najviac . " (" . $maxMnozstvo . " ks)";
}

// Funkcia na výpočet celkového obratu
function obrat($polozky) {
    $spolu = 0;
    foreach ($polozky as $detaily) {
        $spolu += $detaily['cena'] * $detaily['mnozstvo'];
    }
    return $spolu;
}

// Funkcia na výpočet priemernej ceny produktov
function priemerna_cena($polozky) {
    $suma_cien = array_sum(array_column($polozky, 'cena'));
    return number_format($suma_cien / count($polozky), 2);
}

// Funkcia na formátovanie čísel s medzerami
function formatNumber($number) {
    return number_format($number, 0, '', ' ');
}

// Získanie výsledkov
$polozky = vypis();
$obrat = formatNumber(obrat($polozky));
$najpredavanejsi = najpredavanejsi($polozky);
$priemerna_cena = priemerna_cena($polozky);

// Obsah pre súbor
$data = "Report o predaji\n";
$data .= "----------------------\n";
$data .= "Celkový obrat: $obrat €\n";
$data .= "Najpredávanejší produkt: $najpredavanejsi\n";
$data .= "Priemerná cena produktov: $priemerna_cena €\n";

// Zapísanie do súboru
file_put_contents($desktopPath, $data);

echo "Súbor 'report.txt' bol vytvorený na ploche.";
?>
