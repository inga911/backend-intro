import { v4 as uuidv4 } from 'uuid';//generuoja atsitiktinius 

const write = (key, data) => {
    localStorage.setItem(key, JSON.stringify(data));
}

export const read = (key) => { //nuskaito localStorage
    let data = localStorage.getItem(key);
    if (null === data) {//pasitikrinam ar localStorage kazkas yra
        data = [];//jei nieko nera tai tuscias
    } else {
        data = JSON.parse(data);//jeigu yra isParse'inti is objekto i stringa
    }
    return data;
}

export const create = (key, data) => {
    const allData = read(key);
    data.id = uuidv4();//pridedamas uuid prie data
    allData.push(data);
    write(key, allData);//irasom atgal 
}

export const destroy = (key, id) => {
    const allData = read(key);
    const deletedData = allData.filter(d => id !== d.id);
    write(key, deletedData);
}