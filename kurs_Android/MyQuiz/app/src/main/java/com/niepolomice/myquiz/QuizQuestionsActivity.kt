package com.niepolomice.myquiz

import android.content.Intent
import android.graphics.Color
import android.graphics.Typeface
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.TextView
import androidx.core.content.ContextCompat

import com.niepolomice.myquiz.databinding.ActivityQuizQuestionsBinding

class QuizQuestionsActivity : AppCompatActivity(), View.OnClickListener {

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

        bind.tvOptionOne.setOnClickListener(this)
        bind.tvOptionTwo.setOnClickListener(this)
        bind.tvOptionThree.setOnClickListener(this)
        bind.tvOptionFour.setOnClickListener(this)
        bind.btnSubmit.setOnClickListener(this)

    }

    private fun setQuestion() {
        val question = mQuestionsList!!.get(mCurrentPosition-1)

        defaultOptionView()

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
        val options = ArrayList<TextView>()
        options.add(0,bind.tvOptionOne)
        options.add(1,bind.tvOptionTwo)
        options.add(2,bind.tvOptionThree)
        options.add(3,bind.tvOptionFour)

        for(option in options){
            option.setTextColor(Color.parseColor("#7A8089"))
            option.typeface = Typeface.DEFAULT
            option.background = ContextCompat
                .getDrawable(this@QuizQuestionsActivity,R.drawable.default_option_borders_bg)
        }

    }

    override fun onClick(v: View?) {
//        Toast.makeText(this@QuizQuestionsActivity,"Kliknięto przycisk: "
//           +v?.id,Toast.LENGTH_SHORT).show()
        when(v?.id){
            R.id.tv_option_one -> {
                selectOptionView(bind.tvOptionOne,1)
            }
            R.id.tv_option_two -> {
                selectOptionView(bind.tvOptionTwo,2)
            }
            R.id.tv_option_three -> {
                selectOptionView(bind.tvOptionThree,3)
            }
            R.id.tv_option_four -> {
                selectOptionView(bind.tvOptionFour,4)
            }
            R.id.btn_submit -> {
                if(mSelectedOptionPosition==0){
                    mCurrentPosition++
                    when{
                        mCurrentPosition <= mQuestionsList!!.size ->{
                            setQuestion()
                        }
                        else -> {
                           val intent = Intent(
                               this@QuizQuestionsActivity,
                               ResultActivity::class.java
                           )
                            intent.putExtra(Constants.USER_NAME,mUserName)
                            intent.putExtra(Constants.CORECT_ANSWER,mCorrectAnswer)
                            intent.putExtra(Constants.TOTAL_QUESTIONS,mQuestionsList!!.size)
                            startActivity(intent)
                            finish()
                        }
                    }
                } else {
                    val question = mQuestionsList?.get(mCurrentPosition-1)

                    if(question!!.correctAnswer != mSelectedOptionPosition) {
                        answerView(mSelectedOptionPosition, R.drawable.wrong_option_borders_bg)
                    }else {
                        mCorrectAnswer++
                    }

                    answerView(question.correctAnswer,R.drawable.correct_option_borders_bg)
                    if(mCurrentPosition == mQuestionsList!!.size){
                        bind.btnSubmit.text = "KONIEC"
                    }else{
                        bind.btnSubmit.text = "Do następnego"
                    }
                    mSelectedOptionPosition = 0
                    }

                }

        }
    }

    private fun answerView(answer: Int, drawableView: Int) {
        when(answer){
            1 -> {
                bind.tvOptionOne.background = ContextCompat
                    .getDrawable(this@QuizQuestionsActivity,drawableView)
            }
            2 -> {
                bind.tvOptionTwo.background = ContextCompat
                    .getDrawable(this@QuizQuestionsActivity,drawableView)
            }
            3 -> {
                bind.tvOptionThree.background = ContextCompat
                    .getDrawable(this@QuizQuestionsActivity,drawableView)
            }
            4 -> {
                bind.tvOptionFour.background = ContextCompat
                    .getDrawable(this@QuizQuestionsActivity,drawableView)
            }
        }
    }

    private fun selectOptionView(tv: TextView, selectedOptionNumber: Int) {
        defaultOptionView()
        mSelectedOptionPosition = selectedOptionNumber
        tv.setTextColor(Color.parseColor("#363A43"))
        tv.setTypeface(tv.typeface,Typeface.BOLD)
        tv.background=ContextCompat
            .getDrawable(this@QuizQuestionsActivity,R.drawable.selected_option_borders_bg)
    }
}