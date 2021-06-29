package com.niepolomice.myquiz

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log

import com.niepolomice.myquiz.databinding.ActivityQuizQuestionsBinding

class QuizQuestionsActivity : AppCompatActivity() {

    private var mCurrentPosition: Int = 1
    private var mQuestionsList: ArrayList<Question>? = null

    private var mSelectedOptionPosition: Int = 0
    private var mCorrectAnswer: Int = 0
    private var mUserName: String? = null

    private lateinit var bind:ActivityQuizQuestionsBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        bind = ActivityQuizQuestionsBinding.inflate(layoutInflater)
        setContentView(bind.root)

        mQuestionsList = Constants.getQuestions()
        //Log.i("SIZE","Ilość pytań: ${mQuestionsList?.size}")
        mUserName = intent.getStringExtra(Constants.USER_NAME)

        setQuestion()
    }

    private fun setQuestion() {
        val question = mQuestionsList!!.get(mCurrentPosition-1)

        //defaultOptionView()

        if(mCurrentPosition==mQuestionsList!!.size){
            bind.btnSubmit.text = "KONIEC"
        }else{
            bind.btnSubmit.text = "ZATWIERDŹ"
        }

        bind.progressBar.progress = mCurrentPosition
        bind.tvProgress.text = "$mCurrentPosition/${bind.progressBar.max}"

        bind.tvQuestion.text = question.question
        bind.ivImage.setImageResource(question.image)
        bind.tvOptionOne.text = question.optionOne
        bind.tvOptionTwo.text = question.optionTwo
        bind.tvOptionThree.text = question.optionThree
        bind.tvOptionFour.text = question.optionFour

    }

    private fun defaultOptionView() {
        TODO("Not yet implemented")
    }
}