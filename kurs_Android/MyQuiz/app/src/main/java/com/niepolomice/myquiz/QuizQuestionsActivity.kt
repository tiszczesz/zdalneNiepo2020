package com.niepolomice.myquiz

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log

import com.niepolomice.myquiz.databinding.ActivityQuizQuestionsBinding

class QuizQuestionsActivity : AppCompatActivity() {

    private lateinit var bind:ActivityQuizQuestionsBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivityQuizQuestionsBinding.inflate(layoutInflater)
        setContentView(bind.root)

        val questionsList = Constants.getQuestions()
        Log.i("SIZE","Ilość pytań: ${questionsList.size}")
    }
}