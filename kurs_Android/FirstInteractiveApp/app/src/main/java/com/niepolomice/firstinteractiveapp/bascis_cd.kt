package com.niepolomice.firstinteractiveapp

fun main(){
    //cw1()
    //cw2()
    cw3()
}

fun cw1(){
    print("Podaj nazwe koloru: ")
    val question:String = readLine().toString().lowercase()
    when(question){
        "biały" -> println("$question to po angielsku: 'white'")
        "czerwony" -> println("$question to po angielsku: 'red'")
        "zielony" -> println("$question to po angielsku: 'green'")
        "żółty" -> println("$question to po angielsku: 'yellow'")
        else -> println("$question tego koloru nie znam")
    }
}
fun cw2(){
    print("Podaj swój wiek: ")
    val age:Int = readLine()!!.toInt()
    when(age){
        in Int.MIN_VALUE..0 -> println("$age to jeszcze się nie urodziłes!!!")
        in 1..17 -> println("$age to jesteś małolat")
        in 18..130 -> println("$age to jesteś pełnoletni")
        else -> println("$age już nieżyjesz")
    }
    when{
        age%2==0 -> println("$age liczba parzysta")
        age<12 -> println("......")
        else -> println("$age liczba nieparzysta")
    }
}
fun cw3(){
    val znajomi:List<String> = listOf("Adam","Jan","Monika","Roman")
    print("Podaj swoje imię: ")
    val firstName:String = readLine().toString()
    println(if(firstName in znajomi){"Jesteś moim znajomym"}
                else {"nie znam Cię"})
}
