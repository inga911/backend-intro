import "bootstrap/dist/css/bootstrap.min.css";
import { useState } from "react";
import "./App.scss";
import randColor from "./Functions/randColor";
import { v4 as uuidv4 } from 'uuid';



function App() {
  
  const [wish, setWish] = useState(''); //kar yra state tas rodoma formos inpute
  const [size, setSize] = useState(0);
  const [wishList, setWishList] = useState([]);//is pradziu bus tuscias sarasas
    

  //kiekviena forma yra kontroliuojma state'o
    const doWish = e => {
    setWish(e.target.value);//e --> eventas | kiekvienas pasikeitimas yra eventas, kiekvienas eventas yvyksta tam tikrame elemente - target- o targetas siuo atveju yra inpute esantis value
    // setWish(e.target.value + '+');//norint kontroliuoti kazkaip kazka
    };
    const doWishSize = e => {
    setSize(e.target.value);
    };
    const addWish = () => {
    setWishList(w => [...w, {
            id: uuidv4,
            wish, 
            size, 
            color:randColor()
          }
        ]);
    setWish('');//kad nusinulintu i tuscia stringa paspaudus add mygtuka
    setSize('0');//kad nusinulintu iki 0 paspaudus add mygtuka
    }

    //norint ka nors istrinti
    const del = id => {
      setWishList(w => w.filter(w => id !== w.id));//surandam elementa kuri  norim ismesti pagal id ir pasakyti kad jis yra false, ir kai jis suranda jie buna lygus, todel reikia !== kad pasalintu ta false
    }


  return (
    <div className="App">
      <header className="App-header">
        <div className="card">
          <div className="card-header">
            <h2>Wish book</h2>
          </div>
          <ul className="list-group list-group-flush">
              {wishList.map((a, i) => (
              <li key={i} className="list-group-item" style={{color: a.color}} > 
                {a.wish} <b>{a.size}</b>
                <div className="del-button" onClick={() => del(a.id)}></div>
              </li>))}
          </ul>
            <div class="m-3">
                <label className="form-label">Enter your wish</label>
                <input type="text" className="form-control" onChange={doWish} value={wish} />
            </div>
            <div class="m-3">
                <label className="form-label">How big <b>{size}</b></label>
                <input type="range" className="form-control" min="0" max="10" onChange={doWishSize} value={size} />
            </div>
            <button type="button" className="btn btn-outline-danger m-4" onClick={addWish}>ADD</button>
        </div>
     
      </header>
    </div>
  );
};

export default App;
