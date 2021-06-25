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
        }
    }

    private fun numberClicked(numberClicked: Int) {
        val number = editText.text.toString()+numberClicked.toString()
        editText.setText(number)
    }

}