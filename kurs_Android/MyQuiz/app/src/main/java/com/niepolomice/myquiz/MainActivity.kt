package com.niepolomice.myquiz

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.Toast
import com.niepolomice.myquiz.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {
    private lateinit var bind: ActivityMainBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivityMainBinding.inflate(layoutInflater)
        setContentView(bind.root)
        window.decorView.systemUiVisibility = View.SYSTEM_UI_FLAG_FULLSCREEN


        bind.btnStart.setOnClickListener {
            if(bind.etName.text.toString().isEmpty()){
                Toast.makeText(this@MainActivity,
                    "Proszę wprowadź swoje imię",Toast.LENGTH_SHORT).show()
            }else{
               val intent = Intent(this@MainActivity,
                   QuizQuestionsActivity::class.java)
                intent.putExtra(Constants.USER_NAME,bind.etName.text.toString())
                startActivity(intent)
                finish()
            }
        }
    }
}