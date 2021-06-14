package com.niepolomice.firstinteractiveapp

import android.os.Build
import java.time.LocalDate
import java.time.Period
import java.time.format.DateTimeFormatter

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
    diffDays()
}
fun diffDays() {
  //  if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
        // parse the date with a suitable formatter
        val from = LocalDate.parse("01062021", DateTimeFormatter.ofPattern("ddMMyyyy"))
        // get today's date
        val today = LocalDate.now()
        // calculate the period between those two
        var period = Period.between(from, today)
        // and print it in a human-readable way
        println(
            "The difference between " + from.format(DateTimeFormatter.ISO_LOCAL_DATE)
                    + " and " + today.format(DateTimeFormatter.ISO_LOCAL_DATE) + " is "
                    + period.years + " years, " + period.months + " months and "
                    + period.getDays() + " days"
        )
//    }else{
//        print("Nie")
//    }
}