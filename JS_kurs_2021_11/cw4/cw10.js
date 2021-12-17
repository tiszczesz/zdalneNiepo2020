class Person {
    constructor(msg) {
        this.msg = msg;
    }
    speak() {
        console.log(this.msg);
    }
    change(value) {
        this.msg = value;
    }
}
const bolo = new Person("co tam bolo??");
bolo.change("fffffff");
bolo.speak();
class Speaker {
    constructor(name) {
        this.name = name;
    }
    get Msg() {
        if (!this.msg.includes(this.name)) {
            throw Error("Brak name w wiadomości");
        }
        return this.msg;
    }
    set Msg(val) {
        let tmpMsg = val;
        if (!val.includes(this.name)) {
            tmpMsg = this.name + " " + val;
        }
        this.msg = tmpMsg;
    }
}
const speaker = new Speaker("tom");
speaker.Msg = "bolo dom pom"; //setter
console.log(speaker.Msg); //getter
