function isOld(age) {
    if (age > 59) {
        throw Error("Za stary!!!!");
    }
    if (age < 18) {
        return false;
    }
    return true;
}
console.log(isOld(66));