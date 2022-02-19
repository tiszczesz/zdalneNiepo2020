import React,{ FC } from "react";
import { Link  } from "react-router-dom";

const AnotherScreen: FC = ()=>{
    return (
        <div>
            Hello from AnotherScreen <br />
            <Link to="/">Powrót na główny ekran</Link>
        </div>
    );
}
export default AnotherScreen;