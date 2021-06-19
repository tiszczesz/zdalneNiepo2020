package com.niepolomice.mailapp

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.Toast

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        val emailTo = findViewById<EditText>(R.id.emailToEditText)
        var buttonSend = findViewById<Button>(R.id.sendButton)
        val topicEditText = findViewById<EditText>(R.id.topicEditText)
        buttonSend.setOnClickListener {
            val toEmailText = emailTo.text.toString().trim()
            if(toEmailText!=""){
                Toast.makeText(this@MainActivity,
                    "Wysłano email do: ${toEmailText}",Toast.LENGTH_LONG).show()
            }else{
                Toast.makeText(this@MainActivity,
                    "Brak adresu",Toast.LENGTH_LONG).show()
            }
        }
    }
}