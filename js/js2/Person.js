class Person{
  constructor(name,lastName,age){
    this.name = name;
    this.lastName = lastName;
    this.age = age;
  }
  info(){
    return `Informacja o osobie: ${this.name} ${this.lastName} wiek: ${this.age}`;
  }
}
export default Person;