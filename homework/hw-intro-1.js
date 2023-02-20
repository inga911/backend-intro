function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}


// Programiškai ridenkite du žaidimo kauliukus- sugeneruokite du atsitiktinius skaičius nuo 1 iki 6.
// Jeigu kauliukų suma didesnė nei 8 jūs laimėjote, priešingu atveju pralošėte. 
// Išveskite atsakymą, kuriame būtų abiejų kauliukų reikšmės ir išvada laimėjote ar pralošėte.

const laimetiMin = 1;
const laimetiMax = 6;
const kauliukai = [...Array(2)].map(_ => Math.floor(Math.random() * (laimetiMax - laimetiMin + 1) + laimetiMin));
console.log(kauliukai);

const suma = kauliukai.reduce((a,b) => a + b);

const sum2 = sum > 8 ? 'Jus laimejote!' : 'Deja, jus pralaimejote';
console.log(sum2);
console.log('-----------');
// Gyveno du katinukai, Pilkis ir Murklys. 
// Jų svoriai kilogramais buvo atsitiktiniai dydžiai nuo 3 iki 6. 
// Parašyti programą, kuri išvestų katinukų svorius ir apskaičiuotų, 
// kuris katinukas yra lengvesnis. Atsakymas turi būti katinukų vardai 
// su jų svoriais ir lengvesnio katinuko vardas. 
// Jeigu katinukai sveria vienodai, vietoj katinuko vardo parašykite, 
// kad “katinukų svoriai vienodi”.

const katinukaiMin = 3;
const katinukaiMax = 6;

const pilkis = [...Array(1)].map(_ => Math.floor(Math.random() * (katinukaiMax - katinukaiMin + 1) + katinukaiMin));
console.log(`Pilkis sveria ${pilkis} kilogramus`);


const murklys = [...Array(1)].map(_ => Math.floor(Math.random() * (katinukaiMax - katinukaiMin + 1) + katinukaiMin));
console.log(`Murklys sveria ${murklys} kilogramus`);


if (pilkis > murklys) {
    console.log('Murklys lengvesnis');
} else  if (pilkis < murklys) {
    console.log('Pilkis lengvesnis');
} else {
     console.log('Katinuku svoriai vienodi');
}
    

console.log('----------');

// Nojus pasiruošė potvyniui ir nusipirko dvi valtis.  
// Vienoje telpa 15 katinukų, kitoje 15 karvių (katinukus galima sodinti tik į katinukų valtis, 
// o karves tik į karvių, maišyti negalima) Prasidėjus liūčiai pas 
// Nojų atėjo atsitiktinis skaičius nuo 0 iki 30 katinukų ir toks 
// pats atsitiktinis skaičius karvių. Išveskite atėjusių katinukų ir 
// karvių skaičių ir ar Nojus galės juos sutalpinti į valtis. 
// Jeigu netelpa tik katinukai arba tik karvės vistiek išveskite “Netelpa”. 
// Kas konkrečiai netelpa išvedinėti nereikia. “Telpa” išveskite tik tuo 
// atveju jeigu ir katinukai ir karvės telpa.

const atejoMin = 0;
const atejoMax = 30;
const maxValtyje = 15;

const randomKaciu = [...Array(1)].map(_ => Math.floor(Math.random() * (atejoMax - atejoMin + 1) + atejoMin));
console.log(randomKaciu);

const randomKarviu = [...Array(1)].map(_ => Math.floor(Math.random() * (atejoMax - atejoMin + 1) + atejoMin));
console.log(randomKarviu);

if (randomKaciu <= maxValtyje &&  randomKarviu <= maxValtyje){
    console.log('telpa');
} else {
    console.log('Netelpa');
}

console.log('------------')

// Antanas nusipirko naują butą ir pinigų jam liko nedaug. 
// Dabar jis niekaip negali apsispręsti ką pirmiausiai pirkti: 
// televizorių, skalbimo mašiną ar šaldytuvą. Todėl nusprendžia ridenti 
// kauliuką (atsitiktinis skaičius nuo 1 iki 6) ir 
// jeigu iškris 1 arba 5 pirkti televizorių, jeigu 3 arba 4 pirkti skalbimo mašiną 
// ir jeigu 2 arba 6 - šaldytuvą. Padėkite Antanui apsispręsti. 
// Ridenkite kauliuką ir parašykite atsakymą kokį daiktą jam pirkti.

const kaPirktiMin = 1;
const kaPirktiMax = 6;
const iskrito = [...Array(1)].map(_ => Math.floor(Math.random() * (kaPirktiMax - kaPirktiMin + 1) + kaPirktiMin));
console.log(iskrito);

if (iskrito == 1 || iskrito == 5) {
    console.log('Pirkti televizoriu');
} else if (iskrito == 3 || iskrito == 4) {
    console.log('Pirkti skalbimo masina');
} else {
    console.log('Pirkti saldytuva');
}


console.log('-----------');

// (BOSO lygis) Sugeneruokite tris atsitiktinius skaičius nuo 1 iki 7.
//  Skaičius atspausdinkite nuo mažiausio iki didžiausio. 
//  Pavyzdžiui: sugeneravus 4, 2, 4 juos reikia atspausdinti 
//  tokia tvarka: 2 4 4;
const minimum = 1;
const maximum = 7;
const random3 = [...Array(3)].map(_ => Math.floor(Math.random() * maximum + 1));
console.log(random3.sort());
