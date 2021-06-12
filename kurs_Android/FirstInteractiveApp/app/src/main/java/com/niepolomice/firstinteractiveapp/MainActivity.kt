package com.niepolomice.firstinteractiveapp

import android.os.Build
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.TextView
import androidx.core.content.ContextCompat
import java.time.LocalDateTime
import java.time.format.DateTimeFormatter
import java.time.format.FormatStyle


class MainActivity : AppCompatActivity() {
    //    private lateinit var textView:TextView
//    private lateinit var button: Button
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        var textView: TextView = findViewById(R.id.textView)
        var button: Button = findViewById(R.id.button)
        var textView2: TextView = findViewById(R.id.textView2)
        var button2: Button = findViewById(R.id.button2)
        button.setOnClickListener {
            textView.setTextColor(
                ContextCompat.getColor(textView.context, R.color.green)
            )
            textView.setText("Hello from Kotlin")
        }
        button2.setOnClickListener {
            if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
                val current = LocalDateTime.now()
                val formatter = DateTimeFormatter.ofLocalizedDateTime(FormatStyle.MEDIUM)
                val formatted = current.format(formatter)
                textView2.setText(formatted)
            }else{
                textView2.setText("Brak wsparcia!!!")
            }
        }
    }
}