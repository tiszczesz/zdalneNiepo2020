import { log } from "console";
import { Child, ChildAsFC } from "./Child";
import { Child2 } from "./Child2";

const Parent = () => {
    return (
        <div className="first">
            <Child
                cmpName="Jancio"
                onClick={() => { console.log("kliknięto Child") }}
            />
            <Child2 dateNow={new Date()} />
            <ChildAsFC
                cmpName="Święta prawie"
                onClick={()  => {
                        console.log("kliknięto ChildAsFC: ");
                }}>To jest inneText</ChildAsFC>
        </div>

    );
}

export default Parent;