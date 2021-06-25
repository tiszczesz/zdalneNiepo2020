package com.niepolomice.mycalc

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import android.widget.Toast



class MainActivity : AppCompatActivity() {
    lateinit var editText:EditText
    var numberOne:Float = 0.0f
    var isPlus:Boolean = false
    var isMinus:Boolean = false
    var isDivide:Boolean = false
    var isTimes:Boolean = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        editText = findViewById(R.id.number_edit_text)
    }

    fun operationFunction(view: View) {
       // Toast.makeText(this@MainActivity,"Click: ${view.id}",Toast.LENGTH_SHORT).show()

        when(view.id){
            R.id.button_one -> {
                numberClicked(1)
            }
            R.id.button_two -> {
                numberClicked(2)
            }
            R.id.button_three -> {
                numberClicked(3)
            }
            R.id.button_four -> {
                numberClicked(4)
            }
            R.id.button_five -> {
                numberClicked(5)
            }
            R.id.button_six -> {
                numberClicked(6)
            }
            R.id.button_seven -> {
                numberClicked(7)
            }
            R.id.button_eight -> {
                numberClicked(8)
            }
            R.id.button_nine -> {
                numberClicked(9)
            }
            R.id.button_zero -> {
                numberClicked(0)
            }
            R.id.button_clear -> {
                editText.setText("")
            }
            R.id.button_dot -> {
                dotIsClicked()
            }
            R.id.button_plus -> {
                plusClicked()
            }
            R.id.button_equal ->{
                equalClicked()
            }
            R.id.button_minus -> {
                minusClicked()
            }
            R.id.button_divide -> {
                divideClicked()
            }
            R.id.button_times -> {
                timesClicked()
            }
        }
    }

    private fun timesClicked() {
        numberOne = editText.text.toString().toFloat()
        editText.setText("")
        isTimes = true
    }

    private fun divideClicked() {
        numberOne = editText.text.toString().toFloat()
        editText.setText("")
        isDivide = true
    }

    private fun minusClicked() {
        numberOne = editText.text.toString().toFloat()
        editText.setText("")
        isMinus = true
    }

    private fun equalClicked() {
        when{
            isPlus ->{
                plus()
            }
            isMinus ->{
                minus()
            }
            isDivide -> {
                divide()
            }
            isTimes -> {
                times()
            }
        }
    }

    private fun divide() {
        numberOne = editText.text.toString().toFloat()
        editText.setText("")
        isDivide = true
    }

    private fun minus() {
        val numberTwo = editText.text.toString().toFloat()
        val result = numberOne-numberTwo
        editText.setText(result.toString())
        isMinus = false
    }

    private fun plus() {
        val numberTwo = editText.text.toString().toFloat()
        val result = numberOne+numberTwo
        editText.setText(result.toString())
        isPlus = false
    }
    private fun times(){
        val numberTwo = editText.text.toString().toFloat()
        val result = numberOne*numberTwo
        editText.setText(result.toString())
        isTimes = false
    }

    private fun plusClicked() {
        numberOne = editText.text.toString().toFloat()
        editText.setText("")
        isPlus = true
    }

    private fun dotIsClicked() {
        if(editText.text.length==0 || editText.text.contains(".")) return
        val number = editText.text.toString()+"."
        editText.setText(number)
    }

    private fun numberClicked(numberClicked: Int) {
        val number = editText.text.toString()+numberClicked.toString()
        editText.setText(number)
    }

}