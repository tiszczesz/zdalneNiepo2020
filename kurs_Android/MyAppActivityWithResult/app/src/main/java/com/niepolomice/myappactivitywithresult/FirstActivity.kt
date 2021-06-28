package com.niepolomice.myappactivitywithresult

import android.app.Activity
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import com.niepolomice.myappactivitywithresult.databinding.ActivityFirstBinding

class FirstActivity : AppCompatActivity() {

    private lateinit var bind:ActivityFirstBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivityFirstBinding.inflate(layoutInflater)
        setContentView(bind.root)
        bind.btnFinsh.setOnClickListener {
            setResult(Activity.RESULT_OK)
            finish()
        }


    }
}