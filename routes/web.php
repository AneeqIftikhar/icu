<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('subject/{id}/chapter', 'ChapterController@getAllChapterOfSubject');
Route::get('subject/{id}/topic', 'TopicController@getAllTopicOfSubject');
Route::get('subject/{id}/question', 'QuestionController@getAllQuestionOfSubject');


Route::get('topic/{id}/question', 'QuestionController@getAllQuestionOfTopic');

Route::get('chapter/{id}/question', 'QuestionController@getAllQuestionOfChapter');

Route::resource('grade','GradeController');
Route::resource('chapter','ChapterController');
Route::resource('question','QuestionController');
Route::resource('question_meta','Question_MetaController');
Route::resource('student','StudentController');
Route::resource('student_response','Student_ResponseController');
Route::resource('subject','SubjectController');
Route::resource('subject_grade','Subject_GradeController');
Route::resource('topic','TopicController');

Route::resource('student_subject','Student_SubjectController');