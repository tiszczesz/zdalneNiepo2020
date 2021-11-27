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