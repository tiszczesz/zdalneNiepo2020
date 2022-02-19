import React from "react";
import  ReactDOM  from "react-dom";


const App = ()=>{
  return (
    <h1>Hello from React</h1>
  )
}
const App2 = ()=>{
  // return React.createElement('h1',{},React.createElement('input',{},null));
  return (
   <h1><input type="button" value="ggg"/></h1>
  )
}
ReactDOM.render(  <App2 />,  document.querySelector("#root"))