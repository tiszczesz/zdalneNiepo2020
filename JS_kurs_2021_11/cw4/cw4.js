function canDrive(user) {
    console.log("użytkownik: ", user.name);
    if (user.age >= 16) {
        console.log("może jeździć samochodem");
    }
    else {
        console.log("nie może jeździć samochodem");
    }
}
var eryk = { name: "Eryk", ege: 34 };
var tom = { name: "Tom", age: 22 };
canDrive(tom);
