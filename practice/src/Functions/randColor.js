function randColor() {
    return '#' + Math.floor(Math.random() * 16777215).toString(16).padEnd(6, '0');
}

export default randColor;
// # nes prie skaiciu yra #
//.padEnd prailgina stringa prideda, jei truksta simboliu prie pabaigos prideti 0, turi buti sesiazenklis skaicius