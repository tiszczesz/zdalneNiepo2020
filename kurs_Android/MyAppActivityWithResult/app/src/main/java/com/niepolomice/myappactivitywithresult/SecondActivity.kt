package com.niepolomice.myappactivitywithresult

import android.app.Activity
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import com.niepolomice.myappactivitywithresult.databinding.ActivitySecondBinding

class SecondActivity : AppCompatActivity() {
    private lateinit var bind: ActivitySecondBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivitySecondBinding.inflate(layoutInflater)
        setContentView(bind.root)

        bind.btnSubmit.setOnClickListener {
            val intent = Intent()
            intent.putExtra(MainActivity.NAME,bind.etName.text.toString())
            intent.putExtra(MainActivity.EMAIL,bind.etEmail.text.toString())

            setResult(Activity.RESULT_OK,intent)
            finish()
        }
    }
}