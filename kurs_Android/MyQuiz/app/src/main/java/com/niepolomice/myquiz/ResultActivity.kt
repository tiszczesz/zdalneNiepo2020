package com.niepolomice.myquiz

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import com.niepolomice.myquiz.databinding.ActivityResultBinding

class ResultActivity : AppCompatActivity() {
    private lateinit var bind:ActivityResultBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivityResultBinding.inflate(layoutInflater)
        setContentView(bind.root)

        window.decorView.systemUiVisibility = View.SYSTEM_UI_FLAG_LAYOUT_FULLSCREEN

        val userName = intent.getStringExtra(Constants.USER_NAME)
        bind.tvName.text = userName

        val total = intent.getIntExtra(Constants.TOTAL_QUESTIONS,0)
        val correct = intent.getIntExtra(Constants.CORECT_ANSWER,0)
        bind.tvScore.text = "Twoje punkty $correct/$total"

        bind.btnFinish.setOnClickListener {
            startActivity(Intent(this@ResultActivity,MainActivity::class.java))
        }
    }
}