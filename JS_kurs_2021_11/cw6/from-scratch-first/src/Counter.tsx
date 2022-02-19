import React, {Component} from "react";
interface IProps{}
interface IState{
    counter:number
}
class Counter extends Component<IProps,IState> {
    constructor(props:IProps){
        super(props);
        this.state = {
            counter:0
        };
        this.increase = this.increase.bind(this);
        this.decrease = this.decrease.bind(this);
        this.clear = this.clear.bind(this);
    };
    increase(){
        this.setState((prevState)=>({counter:prevState.counter+1}));
        console.log(this.state);
        
    }
    decrease(){
        this.setState((prevState)=>({counter:prevState.counter-1}));
    }
    clear(){
        this.setState(()=>({counter:0}));
    }
    render(): React.ReactNode {
        return (
            <div>
                Stan licznika: {this.state.counter}<br />
                <button onClick={this.increase}>Zwiększ o jeden</button> <br />
                <button onClick={this.decrease}>Zmniejsz o jeden</button> <br />                
                <button onClick={this.clear}>Zeruj</button> <br />
            </div>

        );
    }
}
export default Counter