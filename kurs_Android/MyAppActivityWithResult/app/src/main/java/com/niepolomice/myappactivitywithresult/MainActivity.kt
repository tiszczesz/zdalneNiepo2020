package com.niepolomice.myappactivitywithresult

import android.app.Activity
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Toast
import com.niepolomice.myappactivitywithresult.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {

    companion object {
        private const val FIRST_ACTIVITY_REQUEST_CODE = 1
        private const val SECOND_ACTIVITY_REQUEST_CODE = 2
        const val NAME = "name"
        const val EMAIL = "email"
    }

    private lateinit var bind: ActivityMainBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivityMainBinding.inflate(layoutInflater)
        setContentView(bind.root)

        bind.btnLaunchActivityFirst.setOnClickListener {
            val intent = Intent(
                    this@MainActivity,
                    FirstActivity::class.java)
            startActivityForResult(
                intent,
                FIRST_ACTIVITY_REQUEST_CODE
            )
        }
        bind.btnLunchActivitySecond.setOnClickListener {
            val intent = Intent(this@MainActivity,
                 SecondActivity::class.java)
            startActivityForResult(intent, SECOND_ACTIVITY_REQUEST_CODE)
        }

    }

    override fun onActivityResult(requestCode: Int, resultCode: Int, data: Intent?) {
        super.onActivityResult(requestCode, resultCode, data)
        if(resultCode==Activity.RESULT_OK){
            //Toast.makeText(this,"RESULTAT OK",Toast.LENGTH_SHORT).show()
            if(requestCode== FIRST_ACTIVITY_REQUEST_CODE){
                bind.tvFirstActivityResult.text = "Resutat pierwszej aktywności OK!!!"
            }else if(requestCode== SECOND_ACTIVITY_REQUEST_CODE){
                if(data!=null){
                    val name = data.getStringExtra(NAME)
                    val email = data.getStringExtra(EMAIL)
                    bind.tvSecondActivityResult.text = "nazwa: $name adres mailowy: $email"
                }
            }
        }else{
            if(requestCode== FIRST_ACTIVITY_REQUEST_CODE){
                Toast.makeText(this,"RESULTAT NOO!!! OK FIRST",Toast.LENGTH_SHORT).show()
            }else{
                Toast.makeText(this,"RESULTAT NOO!!! OK SECOND",Toast.LENGTH_SHORT).show()
            }

        }
    }

}