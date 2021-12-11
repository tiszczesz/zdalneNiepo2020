let a = [];
fetch("https://jsonplaceholder.typicode.com/users")
               .then(response=>response.json())
               .then((json)=>{
                    a = json
                    console.log('czyste fetch: ',a);
                    //a = json;
                    //document.querySelector("#root").innerHTML = data[0].title;
               });
// setTimeout(()=>{console.log(a);},2000);              
(async ()=>{
      a = await fetch("https://jsonplaceholder.typicode.com/users")
     .then(response=>response.json());
     console.log('async await: ' ,a);
})();
//drugi sposób



(async ()=>{
     const response = await fetch("https://jsonplaceholder.typicode.com/posts");
                     
     if(response.ok){
          const result = await response.json();
          console.log(result);
     }
})()
