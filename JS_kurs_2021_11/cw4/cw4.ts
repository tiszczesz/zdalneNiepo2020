import { EncodeIntoResult } from "util";

function canDrive(user:User){
    console.log("użytkownik: ",user.name);
    if(user.age >= 16){
        console.log("może jeździć samochodem");        
    }else{
        console.log("nie może jeździć samochodem");        
    }    
}

const eryk = {name:"Eryk",ege:34};
const tom = {name:"Tom",age:22};
canDrive(tom);

interface User{
    name:string;
    age:number;
}
const books:Array<Book> = [
    {title:"ala ma kota",author:"Antoni Małecki",price:34.66,
          editor:{name:"ASP Editors",address:"Młyńska 34",dateOf:new Date("12-12-2002")}},
          {title:"rrrr",author:"Antoni Małecki",price:34.66,
          editor:{name:"ASP Editors",address:"Młyńska 34",dateOf:new Date("04-11-2002")}},
          {title:"ttttt",author:"Antoni Małecki",price:34.66,
          editor:{name:"ASP Editors",address:"Młyńska 34",dateOf:new Date("09-12-2012")}},     
];


interface Book{
    title:string;
    author:string;
    price:number;
    editor:Editor;
}
interface Editor{
    name:string;
    address:string;
    dateOf:Date;
}