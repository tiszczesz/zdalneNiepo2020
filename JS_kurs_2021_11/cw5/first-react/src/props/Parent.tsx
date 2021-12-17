import { Child } from "./Child";
import { Child2 } from "./Child2";

const Parent = () => {
    return (
        <div className="first"> 
        <Child cmpName="Jancio" />
        <Child2 dateNow={new Date()} />
        </div>
       
    );
}

export default Parent;