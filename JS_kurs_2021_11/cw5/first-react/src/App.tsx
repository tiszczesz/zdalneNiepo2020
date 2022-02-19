import React from 'react';
import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">
      <div>Jest już 2022 rok</div>
      <input className='ggg' type="button" value="Click"/>
      <label>Fajny napis w Label</label>
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.tsx</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
        <p>Natomiat mój projekt jest</p>
        <a className="App-link" href="https://github.com/tiszczesz/zdalneNiepo2020/tree/main/JS_kurs_2021_11">GitHub projekt</a>
      </header>
    </div>
  );
}

export default App;
