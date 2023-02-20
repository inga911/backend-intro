import './App.css';
import Bebras from './Components/003/Bebras';

function App() {

  return (
    <div className="App">
      <header className="App-header">

        <Bebras backgroundColor="skyblue" lt="2px"  name="Minkstasis"/>
        <Bebras backgroundColor="greenyellow"  lt="-2px"  name="Ponas"/>
        <Bebras  lt="10px" name="Rudasis" />
  

      </header>
    </div>
  );
}

export default App;
