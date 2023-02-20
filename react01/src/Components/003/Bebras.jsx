import rand from "../../Function/rand";
import BebrasName from "../BebrasName";

function Bebras({backgroundColor, lt, name}) {

    const fun = () => {
        let a = '';
        for(let i=1; i<9; i++) {
            a = a + i;
        }
        return a;
    }
    return (
        <>
            <h1>
                <i style={{
                backgroundColor: backgroundColor,
                letterSpacing: lt,

                color: rand(0, 1) ? 'pink' : 'yellow'
                }}>Bebras</i>
            </h1>
            <BebrasName  name = {name}/>
        </>
    )
}

export default Bebras;