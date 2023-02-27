

function ThreeProps({first, second, spalva1}) {


    return (
        <div>
            <h1 className="tekstoSpalva" style={{color: spalva1}}>{first='Labas'}</h1>
            <h2 className="tekstoSpalva" style={{color: spalva1}}>{second='Ate'}</h2>
        </div>
    )
}

export default ThreeProps;