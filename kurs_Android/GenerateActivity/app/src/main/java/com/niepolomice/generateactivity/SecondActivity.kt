package com.niepolomice.generateactivity

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import com.niepolomice.generateactivity.databinding.ActivitySecondBinding

class SecondActivity : AppCompatActivity() {
    private lateinit var bind:ActivitySecondBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivitySecondBinding.inflate(layoutInflater)
        setContentView(bind.root)
        
    }
}