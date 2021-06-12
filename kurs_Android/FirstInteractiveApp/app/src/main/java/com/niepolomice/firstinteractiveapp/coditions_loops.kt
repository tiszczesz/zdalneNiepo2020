package com.niepolomice.firstinteractiveapp

fun main(){
    for (i in 1..20){
        print("$i ")
    }
    println("\n------------------------------")
    for (i in 10 downTo 0 step 3 ){
        print("$i ")
    }
    print("Podaj zakres: ")
    val limit:Int = readLine()?.toInt() ?: 10
    print("podaj podzielnik: ")
    val podzielnik:Int = Integer.valueOf(readLine())
    for (i in 1..limit){
        print(if(i%podzielnik==0) "$i " else "")
    }
}