import { useEffect } from "react";

function Gone10() {
// gimimo component
//funckoja kurios viduje rasome funkcija
//jos viduje esanti funkcija pasileidines tik tam tikrai atvejais
//tam tikri atvejai yra nustatomi ANTRU PARAMETRU siuo atveju masyvas []
//tuscias masyvas reaguos i komponento gimima, kada jis buvo sukurtas
    useEffect(()=> {
        console.log('GIME komp.GONE');
        //return grazina funkcija kada komponentas mirsta
        return () => {
            console.log('MIRE komp.GONE');
  }

    }, [])

    return <h2>I'm still here!</h2>
}

export default Gone10;