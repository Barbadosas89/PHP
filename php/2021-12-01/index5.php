
<?php

// Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.
// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
// Sukurkite kintamuosius lang (reikšmės lt arba en) ir parodykite dieną
$days = [
    'lt' => ["Pirmadienis", "Antradienis", "Trečiadienis", "Ketvirtadienis", "Penktadienis", "Šeštadienis","Sekmadienis"],
    'en' => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday","Sunday"],

];
echo $days['lt'][0], '<br>', $days['en'][2], '<br>';



$lang = 'en';

$todayDay = date('l');
$weekDays = date('w');

if ($lang === 'en') {
    $return = "Today is $todayDay";
} else {
    $result = $days[$lang][$weekDays-1];
    $return = "Šiandien yra $result";
}
echo $return;
