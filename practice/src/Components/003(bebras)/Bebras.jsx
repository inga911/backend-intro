import rand from "../../Functions/rand";

function Bebras({backgroundColor, lt}) { //tarp () irasius {} paeiktume propsus

    const func = () => {
        let a = '';
        for (let i= 1; i < 4; i++) {
            a = a + i;
        }
        return a;
    }

    return (

        <div>
            <h1 className="spalva">Bebras</h1>
            <h2 style={{
                backgroundColor: backgroundColor,
                letterSpacing: lt, 
                color:rand(0, 1) ? 'darkgreen' : 'lightgreen'
                }}>Megsta medzius</h2>
            <p>Pastato {func()} uztvankas</p>

        </div>
    )
}

export default Bebras;