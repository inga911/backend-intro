import { useState } from "react";

function LocalStorage(){

    const [show, setShow] = useState();
    const [showColor, setShowColor] = useState('white');

    const write = () => {
        localStorage.setItem('animal', 'RACOON');
        //localStorage turi savyje .setItem ir jis gali tureti bet ka (raktas:reiksme)
        localStorage.setItem('color', JSON.stringify({id: 555, spalva: 'crimson'}));//JSON.stringify objekta pavercia i stringa
    }

    const read = () => {
        const what = localStorage.getItem('animal');//su getItem nurodom ka norime gauti
        setShow(what);
        const styleColor = JSON.parse(localStorage.getItem('color'));
        setShowColor(styleColor.spalva);
    }

    const del = () => {
        localStorage.removeItem('animal');
    }

    return (
        <>
            <h1 style={{color: showColor}}>{show}</h1>
            <button className="btn btn-outline-success m-4" onClick={write}>write</button>
            <button className="btn btn-outline-primary m-4" onClick={read}>read</button>
            <button className="btn btn-outline-danger m-4" onClick={del}>delete</button>
        
        </>
    );

}

export default LocalStorage;