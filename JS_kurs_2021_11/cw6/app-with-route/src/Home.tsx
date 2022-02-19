import React,  { FC } from "react";
import { Link } from "react-router-dom";

const Home:FC = ()=>{
    return(
        <div>
            Hello world!!! <br />
            <Link to="anotherscreen">Do Innego ekranu</Link>
        </div>
    )
}
export default Home;