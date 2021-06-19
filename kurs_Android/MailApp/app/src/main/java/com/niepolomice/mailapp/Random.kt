package com.niepolomice.mailapp

import java.util.*


fun main(){
    print(getRandom(5,6))
}


fun getRandom(min:Int,max:Int):Int {
    var myMax = max
    var myMin = min
    if(myMax<myMin){
        var temp = myMax
        myMax=myMin
        myMin = temp
    }
    val rnd:Random = Random()
    return rnd.nextInt(myMax-myMin+1)+myMin
}