import "bootstrap/dist/css/bootstrap.min.css";
import { useState, useEffect } from "react";
import "./App.scss";
import Gone10 from "./Components/005/Gone10";




function App() {

const [count, setCount] = useState(15);
const [stars, setStars] = useState('');

// console.log('App updade');
//sitas useEffect sako kad componentas gimes jis jau yra ir jis pasiruoses darbui
//sitam komponentui reikia siektiek laiko kad pradetu veikti, ant prastesnio kompo gali uztrukti ilgiau
useEffect(()=> {
  console.log('GIME komp.APP');//sitoje vietoje galime daryti dalykus kurie ivyksta tik viena karta komponento pradzioje
}, [])

const add = _ => {
  setCount(c => c + 1);
}
const del = _ => {
  setCount(c => c - 1);
}

//IRASANT KA NORS I MASYVA
useEffect(()=> {
  console.log('Count changed', count);
  setStars(''.padStart(count, '*'));
}, [count]);//jei tuscias raguoja i componento gimima, jei ne tai reaguoja i kiekviena parasyto pasikeitima, galima prirasyti bet kiek




  return (
    <div className="App">
      <header className="App-header">
        {/* { jeigu count mazesnis uz 11 tada spausdinam componenta gone10 jei ne tada nieko=null */
          count < 11 ? <Gone10 /> : null
        }
        <h1>{count}</h1>
        <h4>{stars}</h4>
        <button type="button" className="btn btn-outline-danger m-4" onClick={add}>ADD</button>
        <button type="button" className="btn btn-outline-danger m-4" onClick={del}>DEL</button>
      </header>
    </div>
  );
};

export default App;
