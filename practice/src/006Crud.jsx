import 'bootstrap/dist/css/bootstrap.min.css';
import { useEffect, useState } from 'react';
import './App.scss';
import Create from './Components/006/Create';
import List from './Components/006/List';
import { create, destroy, read } from './Functions/localStorage';

const KEY = 'whishList';

function App() {

    const [list, setList] = useState(null);
    const [lastRefresh, setLastRefresh] = useState(Date.now());
    const [createData, setCreateData] = useState(null);
    const [deleteData, setDeleteData] = useState(null);


    useEffect(() => {
        // loadingo imitacija
        setTimeout(() => setList(read(KEY)), 1000);
        // be imitacijos
        // setList(read(KEY);
    }, [lastRefresh]);

    useEffect(() => {//stebima create data pokytis
        if (null === createData) {//atrasti vieta kada nieko nereikia daryti
            return;
        }
        create(KEY, createData);//i key dedam wishlista 
        setLastRefresh(Date.now())
    }, [createData]);

    useEffect(() => {
        if (null === deleteData) {
            return;
        }
        // tipo klientas
        setList(l => l.filter(d => deleteData.id !== d.id));

        // tipo serverio | kaip promisas, refresinus narsykle grizta viskas atgal
        destroy(KEY, deleteData.id);
        setLastRefresh(Date.now());
    }, [deleteData]);


    return (
        <div className="container">
            <div className="row">
                <div className="col-4">
                    <Create setCreateData={setCreateData} />
                </div>
                <div className="col-8">
                    <List list={list} setDeleteData={setDeleteData} />
                </div>
            </div>
        </div>
    );
}

export default App;