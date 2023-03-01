import "bootstrap/dist/css/bootstrap.min.css";
import { useState } from "react";
import "./App.scss";

const names = [
  { name: "Jonas", age: "25", old: false },
  { name: "Antanas", age: "45", old: false },
  { name: "Onute", age: "30", old: false },
  { name: "Petras", age: "80", old: true },
];

function App() {
  //keitimas butinas per funkcija, negalima keisti sio state tiesiogiai
  //priskiriam pradine reiksme siuo atveju spalva orginali yra orange | hookas
  const [h2Color, setH2Color] = useState("orange");
  const [count, setCount] = useState(1);

  const clickIt = () => {
    console.log("Labas");
    // setH2Color('darkblue');// kai paspausim mygtuka spalva pasikeis i cia nurodyta spalva
    setH2Color((c) => (c === "orange" ? "darkblue" : "orange")); //callback | spaudinejant click me keiciasi spalvos
  };
  const add1 = () => {
    // setCount(++count) --> keicia pacia reiksme
    // setCount(count + 1); --> veiktu nesinchroniskai
    setCount((c) => c + 1); //callback | prie senojo count pridedam 1 ir tada pasilieka naujoji reiksme
  };

  return (
    <div className="App">
      <header className="App-header">
        <div className="card">
          <div className="card-header">
            <h2 style={{ color: h2Color }}>Names book (page {count})</h2>
          </div>
          <ul className="list-group list-group-flush">
            {names.map((a, i) => (
              <li key={i} className={"list-group-item" + (a.old ? " old" : "")}>
                {a.name},{a.age}
              </li>
            ))}
          </ul>
        </div>
     
        <button type="button" className="btn btn-outline-warning" onClick={clickIt}>CLICK ME</button>
        <button type="button" className="btn btn-outline-danger" onClick={add1}>ADD</button>
      </header>
    </div>
  );
}

export default App;
