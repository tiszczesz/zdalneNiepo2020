class Person {
    constructor(private msg: string){}

    speak(){
        console.log(this.msg);        
    }
    change(value:string){
        this.msg = value;
    }
}

const bolo = new Person("co tam bolo??");
bolo.change("fffffff");
bolo.speak();
class Speaker{
    private msg:string;
    constructor(private name:string){}
    get Msg(){
        if(!this.msg.includes(this.name)){
            throw Error("Brak name w wiadomości");
        }
        return this.msg;
    }
    set Msg(val: string){
        let tmpMsg = val;
        if(!val.includes(this.name)){
            tmpMsg = this.name+" "+val;
        }
        this.msg = tmpMsg;
    }
}
const speaker = new Speaker("tom");
speaker.Msg = "bolo dom pom";//setter
console.log(speaker.Msg); //getter
