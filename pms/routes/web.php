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

/*-----auth-----*/
//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::group(['middleware' => 'auth'], function(){
	
	/*-----errors-----*/
	Route::get('/error', 'SettingsController@profile')->name('profile');

	/*-----notifications-----*/
	Route::get('/notifications', 'NotificationsController@index')->name('notifications');

	/*-----dashboard-----*/
	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

	/*-----users-----*/
	Route::get('/users', 'UsersController@index')->name('users');
	Route::get('/users/add', 'UsersController@add')->name('users.add');
	Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
	Route::post('/users/register', 'UsersController@register')->name('users.register');
	Route::post('/users/update', 'UsersController@update')->name('users.update');
	Route::post('/users/password', 'UsersController@password')->name('users.password');

	/*-----skills-----*/
	Route::get('/skills', 'SkillsController@index')->name('skills');
	Route::get('/skills/add', 'SkillsController@add')->name('skills.add');
	Route::post('/skills/addSkills', 'SkillsController@addSkills')->name('skills.addSkills');
	Route::get('/skills/edit/{id}', 'SkillsController@edit')->name('skills.edit.id');
	Route::post('/skills/update', 'SkillsController@update')->name('skills.update');
	
	/*-----announcements-----*/
	Route::get('/announcements', 'AnnouncementsController@index')->name('announcements');
	Route::get('/announcements/add', 'AnnouncementsController@add')->name('announcements.add');
	Route::post('/announcements/insert', 'AnnouncementsController@insert')->name('announcements.insert');
	Route::get('/announcements/edit/{id}', 'AnnouncementsController@edit')->name('announcements.edit.id');
	Route::post('/announcements/update', 'AnnouncementsController@update')->name('announcements.update');
	
	/*-----milestones-----*/
	Route::get('/milestones', 'MilestonesController@index')->name('milestones');
	Route::get('/milestones/add', 'MilestonesController@add')->name('milestones.add');
	Route::post('/milestones/insert', 'MilestonesController@insert')->name('milestones.insert');
	Route::get('/milestones/edit/{id}', 'MilestonesController@edit')->name('milestones.edit.id');
	Route::post('/milestones/update', 'MilestonesController@update')->name('milestones.update');
	
	/*-----notes-----*/
	Route::get('/notes', 'NotesController@index')->name('notes');
	Route::get('/notes/add', 'NotesController@add')->name('notes.add');
	Route::post('/notes/insert', 'NotesController@insert')->name('notes.insert');
	Route::get('/notes/edit/{id}', 'NotesController@edit')->name('notes.edit.id');
	Route::post('/notes/update', 'NotesController@update')->name('notes.update');

	/*-----projects-----*/
	Route::get('/projects', 'ProjectsController@index')->name('projects');
	Route::get('/projects/add', 'ProjectsController@add')->name('projects.add');
	Route::post('/projects/insert', 'ProjectsController@insert')->name('projects.insert');
	Route::get('/projects/edit/{id}', 'ProjectsController@edit')->name('projects.edit');
	Route::post('/projects/update', 'ProjectsController@update')->name('projects.update');
	Route::get('/projects/summary/{id}', 'ProjectsController@summary')->name('projects.summary');
	
	Route::get('/projects/details/{id}', 'ProjectsController@details')->name('projects.details');
	Route::post('/projects/assigned', 'ProjectsController@assigned')->name('projects.assigned');
	Route::post('/projects/skills', 'ProjectsController@skills')->name('projects.skills');
	Route::post('/projects/credentials', 'ProjectsController@credentials')->name('projects.credentials');

	/*-----tasks-----*/
	Route::get('/tasks', 'TasksController@index')->name('tasks');
	Route::get('/tasks/add/{id}', 'TasksController@add')->name('tasks.add');
	Route::get('/tasks/edit/{id}', 'TasksController@edit')->name('tasks.edit');
	Route::get('/tasks/list/{id}', 'TasksController@lists')->name('tasks.list');
	
	Route::post('/tasks/insert', 'TasksController@insert')->name('tasks.insert');
	Route::post('/tasks/update', 'TasksController@update')->name('tasks.update');
	Route::get('/tasks/view/{id}', 'TasksController@view')->name('tasks.view');
	Route::get('/tasks/reply/{id}', 'TasksController@reply')->name('tasks.reply');
	Route::post('/tasks/reply', 'TasksController@replyInsert')->name('tasks.reply');

	/*-----settings-----*/
	Route::get('/profile/view', 'SettingsController@profileView')->name('profile.view');
	Route::get('/profile/password', 'SettingsController@password')->name('profile.password');
	Route::post('/profile/password', 'Auth\UpdatePasswordController@update')->name('profile.password');

	/*-----upload files-----*/
	Route::post('/upload', 'UploadController@index')->name('upload');
	Route::post('/upload/remove', 'UploadController@removeFile')->name('upload.remove');

});