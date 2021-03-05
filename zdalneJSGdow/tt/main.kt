
package com.moj.pszczesz

class Car(val type:String, val model:Int,val price:Double,val milesDrive:Int, val owner:String){
    init{
        println("Oject class is created")
    }
    override fun toString():String {
        return "To auto $type model: $model"
    }
}
fun main(){
    val car = Car("BMW", 2015, 10000.000, 100, "pszczesz")
    println(car)

}