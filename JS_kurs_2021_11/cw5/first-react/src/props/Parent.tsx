
import { Card } from "./Card";
import { Child, ChildAsFC } from "./Child";
import { Child2 } from "./Child2";

const Parent = () => {
    const visitor = {firstname:"Marian",lastname:"Barian"}
    return (
        <div className="first">
            <Child
                cmpName="Jancio" nowe="2022 ROK"
                onClick={() => { console.log("kliknięto Child") }}
            />
            <Child2 dateNow={new Date()} />
            <ChildAsFC
                cmpName="Święta prawie" nowe="gggg"
                onClick={()  => {
                        console.log("kliknięto ChildAsFC: ");
                }}>To jest inneText</ChildAsFC>

            <Card firstname={visitor.firstname} lastname={visitor.lastname} />
        </div>

    );
}

export default Parent;