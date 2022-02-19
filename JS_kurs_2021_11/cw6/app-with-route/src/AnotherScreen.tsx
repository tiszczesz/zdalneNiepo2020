import React,{ FC } from "react";
import { Link  } from "react-router-dom";

const AnotherScreen: FC = ()=>{
    return (
        <div>
            Hello from AnotherScreen <br />
            <Link to="home">Powrót na główny ekran</Link>
        </div>
    );
}