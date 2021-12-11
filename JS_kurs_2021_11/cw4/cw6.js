let a = [];
fetch("https://jsonplaceholder.typicode.com/posts")
               .then(response=>response.json())
               .then((json)=>{
                    a = json;
                    console.log(a);
                    a = json;
                    //document.querySelector("#root").innerHTML = data[0].title;
               });
 setTimeout(()=>{console.log(a);},2000);              

