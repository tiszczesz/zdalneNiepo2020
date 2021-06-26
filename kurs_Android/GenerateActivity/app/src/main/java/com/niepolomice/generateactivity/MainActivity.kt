package com.niepolomice.generateactivity

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import com.niepolomice.generateactivity.databinding.ActivityMainBinding


class MainActivity : AppCompatActivity() {
    private lateinit var bind: ActivityMainBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivityMainBinding.inflate(layoutInflater)
        setContentView(bind.root)
        bind.buttonMain.setOnClickListener {
            val message = bind.editTextMain.text.toString()
            val intent = Intent(this,SecondActivity::class.java).apply {
                putExtra("My_MESSAGE",message)
            }
            startActivity(intent)
        }
    }


}