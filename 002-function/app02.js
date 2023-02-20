console.log('Hello 002');

// deklaracija | anonimine funkcija su const
const hello = function(param, a) {
    // console.log('Hello Fun');
    return param + ' *** ' + a; //funkcijos rezultatas
}


console.log('code');


// vykdymas - pakvieciam aprssyta funkcija
// hello();
//anonimine funkcija su dotuoju kintamaju
const hello2 = hello('racoon');
// hello();
console.log(hello2); //hello2() -> rezultatas esantis return

const param = 'fox'

console.log(hello('beaver', param))

// hello2();

console.log('---------------');

function fancy0() {
    return 'Fancy0';
}
//anonimines funkcijos
const fancy = function() {
    return 'Fancy';
}

const fancy1 = () => {
    return 'Fancy1';
}

const fancy2 = () => 'Fancy2';

//jeigu turi TIK  viena parametra tai galima nedeti skliaustu
const fancy3 = a => 'Fancy' + a;


console.log(fancy0());
console.log(fancy());
console.log(fancy1());
console.log(fancy2());
console.log(fancy3(3));

console.log('---------------');

//kunkcija kuri turi parametro vietoje kita funkcija
const fun = (fn) => {
    const result = fn();//fn funkcijos paleidimas
    return result;
}


const miau = () => {
    return 'Miau miau';
}
console.log(fun(miau)); //paleidziam fun funkcija kurioje yra funkcija miau

const colors = [
    'pink',
    'crimson',
    'skyblue',
    'coral'
];

const animals = [
    'racoon',
    'fox',
    'beaver',
    'wolf'
]

const print = what => { //what = parametras
    console.log('*** ' + what + ' ***');
}


// for (let i = 0; i < colors.length; i++) {
//     print(colors[i]); atspausdins kiekviena spalva atskirose eilutese
// }

// for (let i = 0; i < animals.length; i++) {
//     print(animals[i]); atspausdins kiekviena spalva atskirose eilutese
// }

//KONSTRUOJAMES SAVO FOREACH FUNKCIJA
// const myForeach = (arr, fn) => { GAUNA MASYVA PER KURIA REIKI APEREITI IR FUNKCIJA KURIA REIKIA VYKDYTI
//     for (let i = 0; i < arr.length; i++) {
//         fn(arr[i]);
//     }
// }

// myForeach(colors, print);
// myForeach(animals, print);

//bet kokio array viduje atsirado funkcija myForEach
//imamas masyvas.jis tobulinamas.ir turi mano foreach
Array.prototype.myForeach = function(fn) {
    for (let i = 0; i < this.length; i++) {
        fn(this[i]);
    }
}
// colors.myForeach(print);
// colors.forEach(print); jis jau yra array viduje ir veikia taip pat kaip myForEach

//einam per masyva, ima is print funkcijos what ir paleidineja console.log
// colors.forEach(what => console.log('*** ' + what + ' ***'));
//arba kitaip
//animals.forEach(v => console.log(v));

const animals2 = [
    { id: 5, title: 'racoon' },
    { id: 7, title: 'fox' },
    { id: 102, title: 'wolf' },
    { id: 88, title: 'beaver' },
    { id: 20, title: 'wolf' },
    { id: 77, title: 'wolf' }
]

console.log('---------------');

const WAT1 = animals.forEach(v => console.log(v));//tik 'prameto'
const WAT2 = animals.map((v, i) => v + '---' + i); //grazina masyva atgal - nauja kopija, siuo atveju grazina reiksme  + ---- + indeksas to masyvo
const WAT3 = animals.filter(v => v != 'fox');// != pasalina is masyvo; jei == tai ispausdina tik ta viena ' elementa ' 
const WAT4 = animals.find(v => v == 'racoon');// suranda viena elementa masyve jau stringu

const WATO2 = animals2.map((v, i) => v.title + '---' + i);// sujungs visus su --- ir parodys inkeso vieta
const WATO3 = animals2.filter(v => v.title != 'fox');// paliks tik tuos objektus kuriuose nera fox.
const WATO4 = animals2.find(v => v.id == 88);//suras ta objekta kuriame yra toks id.

//SORTAS DIRBA SU ORGINALU, PRIESINGAI NEI MAP, FILTER , FIND
//SU SORT NEGALIMA PASALINTI AR PAKEISTI ELEMENTU, JIS TIK PAKOREGUOJA VIETAS
animals2.sort((a, b) => b.id - a.id); // JEI REIKETU PRIESINGAI TAI SUKEISTI A SU B
animals2.sort((a, b) => b.title.localeCompare(a.title));//RUSIUOJA PAGAL TITLE ABECELE


//ILGASIS VARIANTAS JEI REIKIA RUSIUOTI TA PATI TITLE PAGAL ID
animals2.sort((a, b) => {
    if (a.title < b.title) return -1; //SURUSIUOJA PAGAL ABECELE
    if (a.title > b.title) return 1;
    return a.id - b.id;//JEI YRA SU TOKIU PACIU TITLE  TADA RUSIUOJAM PAGAL JU ID
});


//ILGASIS VARIANTAS 
// animals2.sort((a, b) => {
//     if (a.id < b.id) return -1;
//     if (a.id > b.id) return 1;
//     return 0;
// })


// console.log(WAT1);
console.log(animals2);


// console.log(fun(miau));

console.log('---------------');

let A = 5;
let B = A;
A = A + 1; // PRIMITYVAI PRISIKIRIAMI PAGAL REIKSME
console.log(A, B, '--->', '6, 5');


//SPREAD: [...C] (PADAVIMAS I FUNKCIJA) {BUS OBJEKTAS} [BUS MASYVAS] gaunama kopija is orginalo
const C = [5, 7];
const D = [...C, 6];
console.log(C, D, '--->', '[5, 7], [5, 7, 6]'); 

// C.push(6); PUSH() -> KEICIA TIESIOGIAI
// D.push(8);
//OBJEKTAI PRISKIRIAMI PAGAL REFERENCA ARBA NUORODA
const V = { id: 77, title: 'wolf', show: false } //reackte nerodom 
// const V2 = { ...V, show: true } //viskas tas pats tik perrasyta viena savybe
// const V = { id: 77, title: 'wolf', id: 100 } sekantis ID perrasys pirmini id

const V2 = {...V, show: true }

console.log(V2, '-->', `{ id: 77, title: 'wolf'}`);

// console.log([...C], {...C });



//spread funkcijos viduje
const sum = (a, b) => {
    console.log(a + b);
}
sum(...C);//C paimtas masyvas is aukciau const=C (5,7), tai sioje funkcijoje paimti 5 ir 7 bus = 12

console.log('------DESTRUKTURIZACIJA---------');

const obj = { animalId: 77, Title: 'wolf', Show: false };


const { Title } = obj;
const animalId = obj.animalId;
console.log(Title, animalId, '-->', 'wolf 77');

//is kintamojo padaro objekta
const obj1 = { Title, animalId};
console.log(obj1 , '-->', `{Title: 'wolf', id: 77}`);


const arr45 = [45, 25, 444, 888];

const [F, Y, L] = arr45;

console.log(F, Y, L, '-->', '45, 25, 444');