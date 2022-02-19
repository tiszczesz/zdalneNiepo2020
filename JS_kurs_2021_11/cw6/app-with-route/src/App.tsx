import React from 'react';
import {Route, Routes} from "react-router-dom";
import AnotherScreen from './AnotherScreen';


import './App.css';
import Home from './Home';

function App() {
  return (
    <div className="App">
      <header className="App-header">
       <Routes>
        <Route path='/' element={<Home/>}></Route>
        <Route path='anotherScreen' element={<AnotherScreen/>}></Route>
       </Routes>
      </header>
    </div>
  );
}

export default App;
