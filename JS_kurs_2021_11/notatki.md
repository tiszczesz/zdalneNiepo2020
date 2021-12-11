# JS wiadomości wstępne
- słabo-typowalny (łatwo zmienić typ)
- dynamicznie typowalny (typy są ustalane przez interpretator)
- imperatywny, obiektowy
## Definicja zmiennej
1. Najstarsze podejście:
   ```javascript
   var a = 12; //zasięg funkcyjny można przedefiniować
   ```
2. Standard ECMA Script 6
    ```javascript
    let a = 12; //zasięg blokowy nie można przedefiniować
    const b = true; //zasięg blokowy nie można przedefiniować i nie można zmienić wartości
    const t = [];
    t.push(12);
    //t = new Array() // zabronione dla const
    ```
3. Typy podstawowe zmiennych:
   - string
   - number
   - boolean
   - undefined
   - array(object)
   - object
    ```javascript
    const person = {firstname: "Adam",lastname:"Nowak",age:12};
4. Funkcje w JS
```javascript
function Nazwa(arg1,arg2){ //definicja funkcji
   //ciało funkcji
}
Nazwa(2,4); // wywołanie funkcji

(function(arg){
   //ciało ....
}(23)); //autowywołanie funkcji

const f1 = function(arg...){
   //ciało funkcji
}

f1(34);

//array function
const f2 = (arg,tt) => {
   //ciało funkcji
}

f2("ppp",55);
```

# TypeScript
## Instalacja
### Instalacja lokalna
```console
npm init
npm install  typescript ts-node --save-dev
## komplikowanie
npx tsc index.ts
```

https://www.section.io/engineering-education/how-to-use-typescript-with-nodejs/

### instalacja dokumentacji
```console
 npm install @types/node --save-dev
```

### Wymuszenie lokalnego użycia ts-node
### dodajemy do package.json
```console
"scripts": {
    "test": "echo \"Error: no test specified\" && exit 1",
    "ts-node": "ts-node"
  },

  ## uruchamiamy
  npm run ts-node nazwapliku.ts

```

## Typescript typy danych (dokumentacja)

https://www.typescriptlang.org/docs/handbook/basic-types.html