package com.niepolomice.firstinteractiveapp

fun main(){
    var myName:String? = "Bolek"
    myName = null
    var yourName = "56"
    myName = "34"
    val c:Int?
    val result = myName+yourName
    c = null
    println("Hello $result")
    println("c = $c")

    val shortVar:Short = 21_213
    println("sort: $shortVar")
    print("Podaj tekst: ")
    val inputString = readLine()
    println("wprowadzono: $inputString")
    val doubleVar = 12.0e+3
    val floatVar:Float = 1.0f
    val isBlack:Boolean? = null
    println("doubleVar: $doubleVar")
    val numberString = "3456"
    val intNumber = numberString.toDouble()
    println("intNumber: $intNumber")
    val a1 = 2; val a2=3
    println(a1.toDouble()/a2)

}

