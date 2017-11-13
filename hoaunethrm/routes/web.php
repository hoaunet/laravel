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
Route::group(['prefix' => 'backend', 'namespace' => 'Backend'], function () {
	Route::get('/', ['as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index']);
    //user
	Route::get('/login', ['as' => 'auth.login', 'uses' => 'UsersController@login']);
	Route::post('/login', ['as' => 'auth.login', 'uses' => 'UsersController@postLogin']);
	Route::get('/logout', ['as' => 'auth.logout', 'uses' => 'UsersController@logout']);	
   

    //company
    Route::get('company', ['as' => 'backend.company.index', 'uses' => 'CompanyController@index']);
	Route::get('company/regist', ['as' => 'backend.company.regist', 'uses' => 'CompanyController@getRegist']);
    Route::post('company/regist', ['as' => 'backend.company.regist', 'uses' => 'CompanyController@postRegist']);
	Route::get('company/edit/{id}', ['as' => 'backend.company.edit', 'uses' => 'CompanyController@getEdit']);
	Route::post('/company/edit/{id}', ['as' => 'backend.company.edit', 'uses' => 'CompanyController@postEdit']);
	Route::get('/company/delete/{id}', ['as' => 'backend.company.delete', 'uses' => 'CompanyController@getDelete']);
	//company loan
    Route::get('/loan', ['as' => 'backend.loan.index', 'uses' => 'LoanController@index']);
	Route::get('/loan/regist', ['as' => 'backend.loan.regist', 'uses' => 'LoanController@getRegist']);
    Route::post('/loan/regist', ['as' => 'backend.loan.regist', 'uses' => 'LoanController@postRegist']);
	Route::get('/loan/edit/{id}', ['as' => 'backend.loan.edit', 'uses' => 'LoanController@getEdit']);
	Route::post('/loan/edit/{id}', ['as' => 'backend.loan.edit', 'uses' => 'LoanController@postEdit']);
	Route::get('/loan/delete/{id}', ['as' => 'backend.loan.delete', 'uses' => 'LoanController@getDelete']);
	//Employee loan
    Route::get('/employeeloan', ['as' => 'backend.employeeloan.index', 'uses' => 'EmployeeloanController@index']);
	Route::get('/employeeloan/regist', ['as' => 'backend.employeeloan.regist', 'uses' => 'EmployeeloanController@getRegist']);
    Route::post('/employeeloan/regist', ['as' => 'backend.employeeloan.regist', 'uses' => 'EmployeeloanController@postRegist']);
	Route::get('/employeeloan/edit/{id}', ['as' => 'backend.employeeloan.edit', 'uses' => 'EmployeeloanController@getEdit']);
	Route::post('/employeeloan/edit/{id}', ['as' => 'backend.employeeloan.edit', 'uses' => 'EmployeeloanController@postEdit']);
	Route::get('/employeeloan/delete/{id}', ['as' => 'backend.employeeloan.delete', 'uses' => 'EmployeeloanController@getDelete']);
	 //Jobstitle
    Route::get('/jobstitle', ['as' => 'backend.jobstitle.index', 'uses' => 'JobstitleController@index']);
	Route::get('/jobstitle/regist', ['as' => 'backend.jobstitle.regist', 'uses' => 'JobstitleController@getRegist']);
    Route::post('/jobstitle/regist', ['as' => 'backend.jobstitle.regist', 'uses' => 'JobstitleController@postRegist']);
	Route::get('/jobstitle/edit/{id}', ['as' => 'backend.jobstitle.edit', 'uses' => 'JobstitleController@getEdit']);
	Route::post('/jobstitle/edit/{id}', ['as' => 'backend.jobstitle.edit', 'uses' => 'JobstitleController@postEdit']);
	Route::get('/jobstitle/delete/{id}', ['as' => 'backend.jobstitle.delete', 'uses' => 'JobstitleController@getDelete']);
	 //paygrade
    Route::get('/paygrade', ['as' => 'backend.paygrade.index', 'uses' => 'PaygradeController@index']);
	Route::get('/paygrade/regist', ['as' => 'backend.paygrade.regist', 'uses' => 'PaygradeController@getRegist']);
    Route::post('/paygrade/regist', ['as' => 'backend.paygrade.regist', 'uses' => 'PaygradeController@postRegist']);
	Route::get('/paygrade/edit/{id}', ['as' => 'backend.paygrade.edit', 'uses' => 'PaygradeController@getEdit']);
	Route::post('/paygrade/edit/{id}', ['as' => 'backend.paygrade.edit', 'uses' => 'PaygradeController@postEdit']);
	Route::get('/paygrade/delete/{id}', ['as' => 'backend.paygrade.delete', 'uses' => 'PaygradeController@getDelete']);
	//employmentstatus
    Route::get('/employmentstatus', ['as' => 'backend.employmentstatus.index', 'uses' => 'EmploymentstatusController@index']);
	Route::get('/employmentstatus/regist', ['as' => 'backend.employmentstatus.regist', 'uses' => 'EmploymentstatusController@getRegist']);
    Route::post('/employmentstatus/regist', ['as' => 'backend.employmentstatus.regist', 'uses' => 'EmploymentstatusController@postRegist']);
	Route::get('/employmentstatus/edit/{id}', ['as' => 'backend.employmentstatus.edit', 'uses' => 'EmploymentstatusController@getEdit']);
	Route::post('/employmentstatus/edit/{id}', ['as' => 'backend.employmentstatus.edit', 'uses' => 'EmploymentstatusController@postEdit']);
	Route::get('/employmentstatus/delete/{id}', ['as' => 'backend.employmentstatus.delete', 'uses' => 'EmploymentstatusController@getDelete']);
    //skill
    Route::get('/skill', ['as' => 'backend.skill.index', 'uses' => 'SkillController@index']);
	Route::get('/skill/regist', ['as' => 'backend.skill.regist', 'uses' => 'SkillController@getRegist']);
    Route::post('/skill/regist', ['as' => 'backend.skill.regist', 'uses' => 'SkillController@postRegist']);
	Route::get('/skill/edit/{id}', ['as' => 'backend.skill.edit', 'uses' => 'SkillController@getEdit']);
	Route::post('/skill/edit/{id}', ['as' => 'backend.skill.edit', 'uses' => 'SkillController@postEdit']);
	Route::get('/skill/delete/{id}', ['as' => 'backend.skill.delete', 'uses' => 'SkillController@getDelete']);
	//education
    Route::get('/education', ['as' => 'backend.education.index', 'uses' => 'EducationController@index']);
	Route::get('/education/regist', ['as' => 'backend.education.regist', 'uses' => 'EducationController@getRegist']);
    Route::post('/education/regist', ['as' => 'backend.education.regist', 'uses' => 'EducationController@postRegist']);
	Route::get('/education/edit/{id}', ['as' => 'backend.education.edit', 'uses' => 'EducationController@getEdit']);
	Route::post('/education/edit/{id}', ['as' => 'backend.education.edit', 'uses' => 'EducationController@postEdit']);
	Route::get('/education/delete/{id}', ['as' => 'backend.education.delete', 'uses' => 'EducationController@getDelete']);
	//certifications
	Route::get('/certification', ['as' => 'backend.certification.index', 'uses' => 'CertificationController@index']);
	Route::get('/certification/regist', ['as' => 'backend.certification.regist', 'uses' => 'CertificationController@getRegist']);
    Route::post('/certification/regist', ['as' => 'backend.certification.regist', 'uses' => 'CertificationController@postRegist']);
	Route::get('/certification/edit/{id}', ['as' => 'backend.certification.edit', 'uses' => 'CertificationController@getEdit']);
	Route::post('/certification/edit/{id}', ['as' => 'backend.certification.edit', 'uses' => 'CertificationController@postEdit']);
	Route::get('/certification/delete/{id}', ['as' => 'backend.certification.delete', 'uses' => 'CertificationController@getDelete']);

	//laguage
    Route::get('/language', ['as' => 'backend.language.index', 'uses' => 'LanguageController@index']);
	Route::get('/language/regist', ['as' => 'backend.language.regist', 'uses' => 'LanguageController@getRegist']);
    Route::post('/language/regist', ['as' => 'backend.language.regist', 'uses' => 'LanguageController@postRegist']);
	Route::get('/language/edit/{id}', ['as' => 'backend.language.edit', 'uses' => 'LanguageController@getEdit']);
	Route::post('/language/edit/{id}', ['as' => 'backend.language.edit', 'uses' => 'LanguageController@postEdit']);
	Route::get('/language/delete/{id}', ['as' => 'backend.language.delete', 'uses' => 'LanguageController@getDelete']);
	//client
    Route::get('/client', ['as' => 'backend.client.index', 'uses' => 'ClientController@index']);
	Route::get('/client/regist', ['as' => 'backend.client.regist', 'uses' => 'ClientController@getRegist']);
    Route::post('/client/regist', ['as' => 'backend.client.regist', 'uses' => 'ClientController@postRegist']);
	Route::get('/client/edit/{id}', ['as' => 'backend.client.edit', 'uses' => 'ClientController@getEdit']);
	Route::post('/client/edit/{id}', ['as' => 'backend.client.edit', 'uses' => 'ClientController@postEdit']);
	Route::get('/client/delete/{id}', ['as' => 'backend.client.delete', 'uses' => 'ClientController@getDelete']);
	//projects
	Route::get('/project', ['as' => 'backend.project.index', 'uses' => 'ProjectController@index']);
	Route::get('/project/regist', ['as' => 'backend.project.regist', 'uses' => 'ProjectController@getRegist']);
    Route::post('/project/regist', ['as' => 'backend.project.regist', 'uses' => 'ProjectController@postRegist']);
	Route::get('/project/edit/{id}', ['as' => 'backend.project.edit', 'uses' => 'ProjectController@getEdit']);
	Route::post('/project/edit/{id}', ['as' => 'backend.project.edit', 'uses' => 'ProjectController@postEdit']);
	Route::get('/project/delete/{id}', ['as' => 'backend.project.delete', 'uses' => 'ProjectController@getDelete']);
	//employeeprojects
	Route::get('/employeeproject', ['as' => 'backend.employeeproject.index', 'uses' => 'EmployeeprojectController@index']);
	Route::get('/employeeproject/regist', ['as' => 'backend.employeeproject.regist', 'uses' => 'EmployeeprojectController@getRegist']);
    Route::post('/employeeproject/regist', ['as' => 'backend.employeeproject.regist', 'uses' => 'EmployeeprojectController@postRegist']);
	Route::get('/employeeproject/edit/{id}', ['as' => 'backend.employeeproject.edit', 'uses' => 'EmployeeprojectController@getEdit']);
	Route::post('/employeeproject/edit/{id}', ['as' => 'backend.employeeproject.edit', 'uses' => 'EmployeeprojectController@postEdit']);
	Route::get('/employeeproject/delete/{id}', ['as' => 'backend.employeeproject.delete', 'uses' => 'EmployeeprojectController@getDelete']);
	//employees
	Route::get('/employee', ['as' => 'backend.employee.index', 'uses' => 'EmployeeController@index']);
	Route::get('/employee/regist', ['as' => 'backend.employee.regist', 'uses' => 'EmployeeController@getRegist']);
    Route::post('/employee/regist', ['as' => 'backend.employee.regist', 'uses' => 'EmployeeController@postRegist']);
	Route::get('/employee/edit/{id}', ['as' => 'backend.employee.edit', 'uses' => 'EmployeeController@getEdit']);
	Route::post('/employee/edit/{id}', ['as' => 'backend.employee.edit', 'uses' => 'EmployeeController@postEdit']);
	Route::get('/employee/delete/{id}', ['as' => 'backend.employee.delete', 'uses' => 'EmployeeController@getDelete']);
	//employeeskill
    //employeeskill
	Route::get('/employeeskill', ['as' => 'backend.employeeskill.index', 'uses' => 'EmployeeskillController@index']);
	Route::get('/employeeskill/regist', ['as' => 'backend.employeeskill.regist', 'uses' => 'EmployeeskillController@getRegist']);
    Route::post('/employeeskill/regist', ['as' => 'backend.employeeskill.regist', 'uses' => 'EmployeeskillController@postRegist']);
	Route::get('/employeeskill/edit/{id}', ['as' => 'backend.employeeskill.edit', 'uses' => 'EmployeeskillController@getEdit']);
	Route::post('/employeeskill/edit/{id}', ['as' => 'backend.employeeskill.edit', 'uses' => 'EmployeeskillController@postEdit']);
	Route::get('/employeeskill/delete/{id}', ['as' => 'backend.employeeskill.delete', 'uses' => 'EmployeeskillController@getDelete']);
	//employeeeducation
	Route::get('/employeeeducation', ['as' => 'backend.employeeeducation.index', 'uses' => 'EmployeeeducationController@index']);
	Route::get('/employeeeducation/regist', ['as' => 'backend.employeeeducation.regist', 'uses' => 'EmployeeeducationController@getRegist']);
    Route::post('/employeeeducation/regist', ['as' => 'backend.employeeeducation.regist', 'uses' => 'EmployeeeducationController@postRegist']);
	Route::get('/employeeeducation/edit/{id}', ['as' => 'backend.employeeeducation.edit', 'uses' => 'EmployeeeducationController@getEdit']);
	Route::post('/employeeeducation/edit/{id}', ['as' => 'backend.employeeeducation.edit', 'uses' => 'EmployeeeducationController@postEdit']);
	Route::get('/employeeeducation/delete/{id}', ['as' => 'backend.employeeeducation.delete', 'uses' => 'EmployeeeducationController@getDelete']);
	//employeecertification
	Route::get('/employeecertification', ['as' => 'backend.employeecertification.index', 'uses' => 'EmployeecertificationController@index']);
	Route::get('/employeecertification/regist', ['as' => 'backend.employeecertification.regist', 'uses' => 'EmployeecertificationController@getRegist']);
    Route::post('/employeecertification/regist', ['as' => 'backend.employeecertification.regist', 'uses' => 'EmployeecertificationController@postRegist']);
	Route::get('/employeecertification/edit/{id}', ['as' => 'backend.employeecertification.edit', 'uses' => 'EmployeecertificationController@getEdit']);
	Route::post('/employeecertification/edit/{id}', ['as' => 'backend.employeecertification.edit', 'uses' => 'EmployeecertificationController@postEdit']);
	Route::get('/employeecertification/delete/{id}', ['as' => 'backend.employeecertification.delete', 'uses' => 'EmployeecertificationController@getDelete']);
	//employeelanguage
	Route::get('/employeelanguage', ['as' => 'backend.employeelanguage.index', 'uses' => 'EmployeelanguageController@index']);
	Route::get('/employeelanguage/regist', ['as' => 'backend.employeelanguage.regist', 'uses' => 'EmployeelanguageController@getRegist']);
    Route::post('/employeelanguage/regist', ['as' => 'backend.employeelanguage.regist', 'uses' => 'EmployeelanguageController@postRegist']);
	Route::get('/employeelanguage/edit/{id}', ['as' => 'backend.employeelanguage.edit', 'uses' => 'EmployeelanguageController@getEdit']);
	Route::post('/employeelanguage/edit/{id}', ['as' => 'backend.employeelanguage.edit', 'uses' => 'EmployeelanguageController@postEdit']);
	Route::get('/employeelanguage/delete/{id}', ['as' => 'backend.employeelanguage.delete', 'uses' => 'EmployeelanguageController@getDelete']);
	//employeedependent
	Route::get('/employeedependent', ['as' => 'backend.employeedependent.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/employeedependent/regist', ['as' => 'backend.employeedependent.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/employeedependent/regist', ['as' => 'backend.employeedependent.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/employeedependent/edit/{id}', ['as' => 'backend.employeedependent.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/employeedependent/edit/{id}', ['as' => 'backend.employeedependent.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/employeedependent/delete/{id}', ['as' => 'backend.employeedependent.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//emergencycontact
	Route::get('/emergencycontact', ['as' => 'backend.emergencycontact.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/emergencycontact/regist', ['as' => 'backend.emergencycontact.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/emergencycontact/regist', ['as' => 'backend.emergencycontact.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/emergencycontact/edit/{id}', ['as' => 'backend.emergencycontact.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/emergencycontact/edit/{id}', ['as' => 'backend.emergencycontact.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/emergencycontact/delete/{id}', ['as' => 'backend.emergencycontact.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//travel
	Route::get('/travel', ['as' => 'backend.travel.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/travel/regist', ['as' => 'backend.travel.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/travel/regist', ['as' => 'backend.travel.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/travel/edit/{id}', ['as' => 'backend.travel.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/travel/edit/{id}', ['as' => 'backend.travel.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/travel/delete/{id}', ['as' => 'backend.travel.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//attendance
	Route::get('/attendance', ['as' => 'backend.attendance.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/attendance/regist', ['as' => 'backend.attendance.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/attendance/regist', ['as' => 'backend.attendance.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/attendance/edit/{id}', ['as' => 'backend.attendance.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/attendance/edit/{id}', ['as' => 'backend.attendance.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/attendance/delete/{id}', ['as' => 'backend.attendance.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//overtime
	Route::get('/overtime', ['as' => 'backend.overtime.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/overtime/regist', ['as' => 'backend.overtime.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/overtime/regist', ['as' => 'backend.overtime.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/overtime/edit/{id}', ['as' => 'backend.overtime.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/overtime/edit/{id}', ['as' => 'backend.overtime.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/overtime/delete/{id}', ['as' => 'backend.overtime.delete', 'uses' => 'EmployeedependentController@getDelete']);
    //employeeovertime
	Route::get('/employeeovertime', ['as' => 'backend.employeeovertime.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/employeeovertime/regist', ['as' => 'backend.employeeovertime.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/employeeovertime/regist', ['as' => 'backend.employeeovertime.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/employeeovertime/edit/{id}', ['as' => 'backend.employeeovertime.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/employeeovertime/edit/{id}', ['as' => 'backend.employeeovertime.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/employeeovertime/delete/{id}', ['as' => 'backend.employeeovertime.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//report
	Route::get('/report', ['as' => 'backend.report.index', 'uses' => 'EmployeedependentController@index']);	
    Route::post('/report', ['as' => 'backend.report.index', 'uses' => 'EmployeedependentController@postRegist']);
    //salarytype
    Route::get('/salarytype', ['as' => 'backend.salarytype.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/salarytype/regist', ['as' => 'backend.salarytype.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/salarytype/regist', ['as' => 'backend.salarytype.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/salarytype/edit/{id}', ['as' => 'backend.salarytype.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/salarytype/edit/{id}', ['as' => 'backend.salarytype.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/salarytype/delete/{id}', ['as' => 'backend.salarytype.delete', 'uses' => 'EmployeedependentController@getDelete']);
	 //salary
    Route::get('/salary', ['as' => 'backend.salary.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/salary/regist', ['as' => 'backend.salary.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/salary/regist', ['as' => 'backend.salary.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/salary/edit/{id}', ['as' => 'backend.salary.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/salary/edit/{id}', ['as' => 'backend.salary.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/salary/delete/{id}', ['as' => 'backend.salary.delete', 'uses' => 'EmployeedependentController@getDelete']);
	 //employeesalary
    Route::get('/employeesalary', ['as' => 'backend.employeesalary.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/employeesalary/regist', ['as' => 'backend.employeesalary.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/employeesalary/regist', ['as' => 'backend.employeesalary.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/employeesalary/edit/{id}', ['as' => 'backend.employeesalary.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/employeesalary/edit/{id}', ['as' => 'backend.employeesalary.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/employeesalary/delete/{id}', ['as' => 'backend.employeesalary.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//companypayroll
    Route::get('/companypayroll', ['as' => 'backend.companypayroll.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/companypayroll/regist', ['as' => 'backend.companypayroll.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/companypayroll/regist', ['as' => 'backend.companypayroll.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/companypayroll/edit/{id}', ['as' => 'backend.companypayroll.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/companypayroll/edit/{id}', ['as' => 'backend.companypayroll.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/companypayroll/delete/{id}', ['as' => 'backend.companypayroll.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//payrollreport
    Route::get('/payrollreport', ['as' => 'backend.payrollreport.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/payrollreport/regist', ['as' => 'backend.payrollreport.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/payrollreport/regist', ['as' => 'backend.payrollreport.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/payrollreport/edit/{id}', ['as' => 'backend.payrollreport.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/payrollreport/edit/{id}', ['as' => 'backend.payrollreport.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/payrollreport/delete/{id}', ['as' => 'backend.payrollreport.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//payrollcolunm
    Route::get('/payrollcolunm', ['as' => 'backend.payrollcolunm.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/payrollcolunm/regist', ['as' => 'backend.payrollcolunm.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/payrollcolunm/regist', ['as' => 'backend.payrollcolunm.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/payrollcolunm/edit/{id}', ['as' => 'backend.payrollcolunm.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/payrollcolunm/edit/{id}', ['as' => 'backend.payrollcolunm.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/payrollcolunm/delete/{id}', ['as' => 'backend.payrollcolunm.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//calculationgroup
    Route::get('/calculationgroup', ['as' => 'backend.calculationgroup.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/calculationgroup/regist', ['as' => 'backend.calculationgroup.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/calculationgroup/regist', ['as' => 'backend.calculationgroup.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/calculationgroup/edit/{id}', ['as' => 'backend.calculationgroup.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/calculationgroup/edit/{id}', ['as' => 'backend.calculationgroup.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/calculationgroup/delete/{id}', ['as' => 'backend.calculationgroup.delete', 'uses' => 'EmployeedependentController@getDelete']);
	//payslip
    Route::get('/payslip', ['as' => 'backend.payslip.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/payslip/regist', ['as' => 'backend.payslip.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/payslip/regist', ['as' => 'backend.payslip.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/payslip/edit/{id}', ['as' => 'backend.payslip.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/payslip/edit/{id}', ['as' => 'backend.payslip.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/payslip/delete/{id}', ['as' => 'backend.payslip.delete', 'uses' => 'EmployeedependentController@getDelete']);

	//calculationmethod
    Route::get('/calculationmethod', ['as' => 'backend.calculationmethod.index', 'uses' => 'EmployeedependentController@index']);
	Route::get('/calculationmethod/regist', ['as' => 'backend.calculationmethod.regist', 'uses' => 'EmployeedependentController@getRegist']);
    Route::post('/calculationmethod/regist', ['as' => 'backend.calculationmethod.regist', 'uses' => 'EmployeedependentController@postRegist']);
	Route::get('/calculationmethod/edit/{id}', ['as' => 'backend.calculationmethod.edit', 'uses' => 'EmployeedependentController@getEdit']);
	Route::post('/calculationmethod/edit/{id}', ['as' => 'backend.calculationmethod.edit', 'uses' => 'EmployeedependentController@postEdit']);
	Route::get('/calculationmethod/delete/{id}', ['as' => 'backend.calculationmethod.delete', 'uses' => 'EmployeedependentController@getDelete']);

	//personal
    Route::get('/personal', ['as' => 'backend.personal.index', 'uses' => 'EmployeedependentController@index']);
    Route::get('/employee/view/{id}', ['as' => 'backend.employee.detail', 'uses' => 'EmployeeController@getDetail']);
    
    //personalskill    
	Route::get('/personalskill', ['as' => 'backend.personalskill.index', 'uses' => 'EmployeeskillController@index']);
	Route::get('/personalskill/regist', ['as' => 'backend.personalskill.regist', 'uses' => 'EmployeeskillController@getRegist']);
    Route::post('/personalskill/regist', ['as' => 'backend.personalskill.regist', 'uses' => 'EmployeeskillController@postRegist']);
	Route::get('/personalskill/edit/{id}', ['as' => 'backend.personalskill.edit', 'uses' => 'EmployeeskillController@getEdit']);
	Route::post('/personalskill/edit/{id}', ['as' => 'backend.personalskill.edit', 'uses' => 'EmployeeskillController@postEdit']);
	Route::get('/personalskill/delete/{id}', ['as' => 'backend.personalskill.delete', 'uses' => 'EmployeeskillController@getDelete']);
	//personaleducation
	Route::get('/personaleducation', ['as' => 'backend.personaleducation.index', 'uses' => 'EmployeeeducationController@index']);
	Route::get('/personaleducation/regist', ['as' => 'backend.personaleducation.regist', 'uses' => 'EmployeeeducationController@getRegist']);
    Route::post('/personaleducation/regist', ['as' => 'backend.personaleducation.regist', 'uses' => 'EmployeeeducationController@postRegist']);
	Route::get('/personaleducation/edit/{id}', ['as' => 'backend.personaleducation.edit', 'uses' => 'EmployeeeducationController@getEdit']);
	Route::post('/personaleducation/edit/{id}', ['as' => 'backend.personaleducation.edit', 'uses' => 'EmployeeeducationController@postEdit']);
	Route::get('/personaleducation/delete/{id}', ['as' => 'backend.personaleducation.delete', 'uses' => 'EmployeeeducationController@getDelete']);
	//personalcertification
	Route::get('/personalcertification', ['as' => 'backend.personalcertification.index', 'uses' => 'EmployeecertificationController@index']);
	Route::get('/personalcertification/regist', ['as' => 'backend.personalcertification.regist', 'uses' => 'EmployeecertificationController@getRegist']);
    Route::post('/personalcertification/regist', ['as' => 'backend.personalcertification.regist', 'uses' => 'EmployeecertificationController@postRegist']);
	Route::get('/personalcertification/edit/{id}', ['as' => 'backend.personalcertification.edit', 'uses' => 'EmployeecertificationController@getEdit']);
	Route::post('/personalcertification/edit/{id}', ['as' => 'backend.personalcertification.edit', 'uses' => 'EmployeecertificationController@postEdit']);
	Route::get('/personalcertification/delete/{id}', ['as' => 'backend.personalcertification.delete', 'uses' => 'EmployeecertificationController@getDelete']);
	//personallanguage
	Route::get('/personallanguage', ['as' => 'backend.personallanguage.index', 'uses' => 'EmployeelanguageController@index']);
	Route::get('/personallanguage/regist', ['as' => 'backend.personallanguage.regist', 'uses' => 'EmployeelanguageController@getRegist']);
    Route::post('/personallanguage/regist', ['as' => 'backend.personallanguage.regist', 'uses' => 'EmployeelanguageController@postRegist']);
	Route::get('/personallanguage/edit/{id}', ['as' => 'backend.personallanguage.edit', 'uses' => 'EmployeelanguageController@getEdit']);
	Route::post('/personallanguage/edit/{id}', ['as' => 'backend.personallanguage.edit', 'uses' => 'EmployeelanguageController@postEdit']);
	Route::get('/personallanguage/delete/{id}', ['as' => 'backend.personallanguage.delete', 'uses' => 'EmployeelanguageController@getDelete']);
	//personaldependence
	Route::get('/personaldependence', ['as' => 'backend.personaldependence.index', 'uses' => 'EmployeelanguageController@index']);
	Route::get('/personaldependence/regist', ['as' => 'backend.personaldependence.regist', 'uses' => 'EmployeelanguageController@getRegist']);
    Route::post('/personaldependence/regist', ['as' => 'backend.personaldependence.regist', 'uses' => 'EmployeelanguageController@postRegist']);
	Route::get('/personaldependence/edit/{id}', ['as' => 'backend.personaldependence.edit', 'uses' => 'EmployeelanguageController@getEdit']);
	Route::post('/personaldependence/edit/{id}', ['as' => 'backend.personaldependence.edit', 'uses' => 'EmployeelanguageController@postEdit']);
	Route::get('/personaldependence/delete/{id}', ['as' => 'backend.personaldependence.delete', 'uses' => 'EmployeelanguageController@getDelete']);
	//personalemergencycontact
	Route::get('/personalemergencycontact', ['as' => 'backend.personalemergencycontact.index', 'uses' => 'EmployeelanguageController@index']);
	Route::get('/personalemergencycontact/regist', ['as' => 'backend.personalemergencycontact.regist', 'uses' => 'EmployeelanguageController@getRegist']);
    Route::post('/personalemergencycontact/regist', ['as' => 'backend.personalemergencycontact.regist', 'uses' => 'EmployeelanguageController@postRegist']);
	Route::get('/personalemergencycontact/edit/{id}', ['as' => 'backend.personalemergencycontact.edit', 'uses' => 'EmployeelanguageController@getEdit']);
	Route::post('/personalemergencycontact/edit/{id}', ['as' => 'backend.personalemergencycontact.edit', 'uses' => 'EmployeelanguageController@postEdit']);
	Route::get('/personalemergencycontact/delete/{id}', ['as' => 'backend.personalemergencycontact.delete', 'uses' => 'EmployeelanguageController@getDelete']);
	//projecttime
    Route::get('/projecttime', ['as' => 'backend.projecttime.index', 'uses' => 'EmployeelanguageController@index']);
	Route::get('/projecttime/regist', ['as' => 'backend.projecttime.regist', 'uses' => 'EmployeelanguageController@getRegist']);
    Route::post('/projecttime/regist', ['as' => 'backend.projecttime.regist', 'uses' => 'EmployeelanguageController@postRegist']);
	Route::get('/projecttime/edit/{id}', ['as' => 'backend.projecttime.edit', 'uses' => 'EmployeelanguageController@getEdit']);
	Route::post('/projecttime/edit/{id}', ['as' => 'backend.projecttime.edit', 'uses' => 'EmployeelanguageController@postEdit']);
	Route::get('/projecttime/delete/{id}', ['as' => 'backend.projecttime.delete', 'uses' => 'EmployeelanguageController@getDelete']);
	//attendancetime
	Route::get('/attendancetime', ['as' => 'backend.attendancetime.index', 'uses' => 'EmployeelanguageController@index']);
	Route::get('/attendancetime/regist', ['as' => 'backend.attendancetime.regist', 'uses' => 'EmployeelanguageController@getRegist']);
    Route::post('/attendancetime/regist', ['as' => 'backend.attendancetime.regist', 'uses' => 'EmployeelanguageController@postRegist']);
	Route::get('/attendancetime/edit/{id}', ['as' => 'backend.attendancetime.edit', 'uses' => 'EmployeelanguageController@getEdit']);
	Route::post('/attendancetime/edit/{id}', ['as' => 'backend.attendancetime.edit', 'uses' => 'EmployeelanguageController@postEdit']);
	Route::get('/attendancetime/delete/{id}', ['as' => 'backend.attendancetime.delete', 'uses' => 'EmployeelanguageController@getDelete']);
	//timesheet
	Route::get('/timesheet', ['as' => 'backend.timesheet.index', 'uses' => 'EmployeelanguageController@index']);
	Route::get('/timesheet/regist', ['as' => 'backend.timesheet.regist', 'uses' => 'EmployeelanguageController@getRegist']);
    Route::post('/timesheet/regist', ['as' => 'backend.timesheet.regist', 'uses' => 'EmployeelanguageController@postRegist']);
	Route::get('/timesheet/edit/{id}', ['as' => 'backend.timesheet.edit', 'uses' => 'EmployeelanguageController@getEdit']);
	Route::post('/timesheet/edit/{id}', ['as' => 'backend.timesheet.edit', 'uses' => 'EmployeelanguageController@postEdit']);
	Route::get('/timesheet/delete/{id}', ['as' => 'backend.timesheet.delete', 'uses' => 'EmployeelanguageController@getDelete']);
	//overtimerequest
	Route::get('/overtimerequest', ['as' => 'backend.overtimerequest.index', 'uses' => 'EmployeelanguageController@index']);
	Route::get('/overtimerequest/regist', ['as' => 'backend.overtimerequest.regist', 'uses' => 'EmployeelanguageController@getRegist']);
    Route::post('/overtimerequest/regist', ['as' => 'backend.overtimerequest.regist', 'uses' => 'EmployeelanguageController@postRegist']);
	Route::get('/overtimerequest/edit/{id}', ['as' => 'backend.overtimerequest.edit', 'uses' => 'EmployeelanguageController@getEdit']);
	Route::post('/overtimerequest/edit/{id}', ['as' => 'backend.overtimerequest.edit', 'uses' => 'EmployeelanguageController@postEdit']);
	Route::get('/overtimerequest/delete/{id}', ['as' => 'backend.overtimerequest.delete', 'uses' => 'EmployeelanguageController@getDelete']);
    //jobs
    Route::get('/job', ['as' => 'backend.job.index', 'uses' => 'JobController@index']);
	Route::get('/job/regist', ['as' => 'backend.job.regist', 'uses' => 'JobController@getRegist']);
    Route::post('/job/regist', ['as' => 'backend.job.regist', 'uses' => 'JobController@postRegist']);
	Route::get('/job/edit/{id}', ['as' => 'backend.job.edit', 'uses' => 'JobController@getEdit']);
	Route::post('/job/edit/{id}', ['as' => 'backend.job.edit', 'uses' => 'JobController@postEdit']);
	Route::get('/job/delete/{id}', ['as' => 'backend.job.delete', 'uses' => 'JobController@getDelete']);

    Route::get('/static_search', ['as' => 'backend.search.index', 'uses' => 'DashboardController@index']);
	Route::get('/overtime-pdf', ['as' => 'backend.search.index_pdf', 'uses' => 'DashboardController@index']);

	Route::get('/login', ['as' => 'auth.login', 'uses' => 'DashboardController@index']);
	Route::post('/login', ['as' => 'auth.login', 'uses' => 'DashboardController@index']);
	Route::get('/logout', ['as' => 'auth.logout', 'uses' => 'DashboardController@index']);    
	//Users
	Route::get('/users', ['as' => 'backend.users.index', 'uses' => 'DashboardController@index']);
	Route::get('/users/regist', ['as' => 'backend.users.regist', 'uses' => 'DashboardController@index']);
	Route::post('/users/regist', ['as' => 'backend.users.regist', 'uses' => 'DashboardController@index']);
	Route::get('/users/detail/{id}', ['as' => 'backend.users.detail', 'uses' => 'DashboardController@index']);
	Route::get('/users/edit/{id}', ['as' => 'backend.users.edit', 'uses' => 'DashboardController@index']);
	Route::post('/users/edit/{id}', ['as' => 'backend.users.edit', 'uses' => 'DashboardController@index']);
	Route::get('/users/delete/{id}', ['as' => 'backend.users.delete', 'uses' => 'DashboardController@index']);

	//Pc format
	Route::get('/pc/format', ['as' => 'backend.pc.format', 'uses' => 'PcFormatController@format']);
	Route::post('/pc/format', ['as' => 'backend.pc.format', 'uses' => 'PcFormatController@postFormat']);

	//Pc import
	Route::get('/pc/import', ['as' => 'backend.pc.import', 'uses' => 'PcController@import']);
	Route::post('/pc/import', ['as' => 'backend.pc.import', 'uses' => 'PcController@postImport']);
	Route::get('/pc/import/delete/{tp_dataname}', ['as' => 'backend.pc.import.delete', 'uses' => 'PcController@delete']);

	//Working Time
	Route::get('/overwork', ['as' => 'backend.workingtime.index', 'uses' => 'WorkingTimeController@index']);
	Route::post('/overwork', ['as' => 'backend.workingtime.index', 'uses' => 'WorkingTimeController@index']);
	Route::get('/overtime/detail/{id}', ['as' => 'backend.workingtime.detail', 'uses' => 'WorkingTimeController@detail']);
	Route::get('/overwork/pdf', ['as' => 'backend.workingtime.pdf', 'uses' => 'WorkingTimeController@exportPDF']);

	 //division
    Route::get('/division', ['as' => 'backend.division.index', 'uses' => 'DivisionController@index']);
    Route::get('/division/regist', ['as' => 'backend.division.regist', 'uses' => 'DivisionController@getRegist']);
    Route::post('/division/regist', ['as' => 'backend.division.regist', 'uses' => 'DivisionController@postRegist']);
	Route::get('/division/edit/{id}', ['as' => 'backend.division.edit', 'uses' => 'DivisionController@getEdit']);
	Route::post('/division/edit/{id}', ['as' => 'backend.division.edit', 'uses' => 'DivisionController@postEdit']);
	Route::get('/division/delete/{id}', ['as' => 'backend.division.delete', 'uses' => 'DivisionController@getDelete']);
	Route::get('/division/orderby-top', ['as' => 'backend.division.orderby.top', 'uses' => 'DivisionController@orderby_top']);
	Route::get('/division/orderby-last', ['as' => 'backend.division.orderby.last', 'uses' => 'DivisionController@orderby_last']);
	Route::get('/division/orderby-up', ['as' => 'backend.division.orderby.up', 'uses' => 'DivisionController@orderby_up']);
	Route::get('/division/orderby-down', ['as' => 'backend.division.orderby.down', 'uses' => 'DivisionController@orderby_down']);
    //section
	Route::get('section/{parent_id}', ['as' => 'backend.section.index', 'uses' => 'SectionController@index']);
	Route::get('section/{parent_id}/regist', ['as' => 'backend.section.regist', 'uses' => 'SectionController@getRegist']);
	Route::post('section/{parent_id}/regist', ['as' => 'backend.section.regist', 'uses' => 'SectionController@postRegist']);
	Route::get('section/{parent_id}/edit/{id}', ['as' => 'backend.section.edit', 'uses' => 'SectionController@getEdit']);
	Route::post('section/{parent_id}/edit/{id}', ['as' => 'backend.section.edit', 'uses' => 'SectionController@postEdit']);
	Route::get('section/{parent_id}/delete/{id}', ['as' => 'backend.section.delete', 'uses' => 'SectionController@getDelete']);
	Route::get('section/{parent_id}/orderby-top', ['as' => 'backend.division.orderby.top', 'uses' => 'DivisionController@orderby_top']);
	Route::get('section/{parent_id}/orderby-last', ['as' => 'backend.division.orderby.last', 'uses' => 'DivisionController@orderby_last']);
	Route::get('section/{parent_id}/orderby-up', ['as' => 'backend.division.orderby.up', 'uses' => 'DivisionController@orderby_up']);
	Route::get('section/{parent_id}/orderby-down', ['as' => 'backend.division.orderby.down', 'uses' => 'DivisionController@orderby_down']);
    //timecard
    Route::get('/timecard', ['as' => 'backend.timecard.index', 'uses' => 'TimecardController@index']);
    Route::post('timecard/import', ['as' => 'backend.timecard.import', 'uses' => 'TimecardController@import']);
    Route::get('/timecard/regist', ['as' => 'backend.timecard.regist', 'uses' => 'TimecardController@getRegist']); 
    Route::post('/timecard/regist', ['as' => 'backend.timecard.regist', 'uses' => 'TimecardController@postRegist']); 
    Route::get('/timecard/edit/{id}', ['as' => 'backend.timecard.edit', 'uses' => 'TimecardController@getEdit']); 
    Route::post('/timecard/edit/{id}', ['as' => 'backend.timecard.edit', 'uses' => 'TimecardController@postEdit']); 
    Route::get('/timecard/delete/{dataname}', ['as' => 'backend.timecard.delete', 'uses' => 'TimecardController@getDelete']);
    Route::get('/timecard/{staff_id}/list/{year}/{month}', ['as' => 'backend.timecard.list', 'uses' => 'TimecardController@getList']);
    //door
    Route::get('/door', ['as' => 'backend.door.index', 'uses' => 'DoorController@index']);
    Route::post('/door/import', ['as' => 'backend.door.import', 'uses' => 'DoorController@importDoorcard']);
    Route::get('/door/regist', ['as' => 'backend.door.regist', 'uses' => 'DoorController@getRegist']);
    Route::post('/door/regist', ['as' => 'backend.door.regist', 'uses' => 'DoorController@postRegist']);
    Route::get('/door/delete/{dataname}', ['as' => 'backend.door.delete', 'uses' => 'DoorController@getDelete']);
    Route::get('/door/edit/{id}', ['as' => 'backend.door.edit', 'uses' => 'DoorController@getEdit']); 
    Route::post('/door/edit/{id}', ['as' => 'backend.door.edit', 'uses' => 'DoorController@postEdit']); 

    Route::get('/staff', ['as' => 'backend.staff.index', 'uses' => 'StaffController@index']);
    Route::post('/staff', ['as' => 'backend.staff.index', 'uses' => 'StaffController@index']);
    Route::get('/staff/regist', ['as' => 'backend.staff.regist', 'uses' => 'StaffController@getRegist']);
    Route::post('/staff/regist', ['as' => 'backend.staff.regist', 'uses' => 'StaffController@postregist']);
    Route::get('/staff/import', ['as' => 'backend.staff.import', 'uses' => 'StaffController@getImport']);    
    Route::post('/staff/import', ['as' => 'backend.staff.import', 'uses' => 'StaffController@postImport']);
	Route::get('/staff/search', ['as' => 'backend.staff.search', 'uses' => 'StaffController@search']);	
	Route::get('/staff/delete/{id}', ['as' => 'backend.staff.delete', 'uses' => 'StaffController@getDelete']);
	Route::get('/staff/edit/{id}', ['as' => 'backend.staff.edit', 'uses' => 'StaffController@getEdit']);
	Route::post('/staff/edit/{id}', ['as' => 'backend.staff.edit', 'uses' => 'StaffController@postEdit']);
});	



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
// Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::get('/profile', 'ProfileController@index');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::resource('employee-management', 'EmployeeManagementController');
Route::post('employee-management/search', 'EmployeeManagementController@search')->name('employee-management.search');

Route::resource('system-management/department', 'DepartmentController');
Route::post('system-management/department/search', 'DepartmentController@search')->name('department.search');

Route::resource('system-management/division', 'DivisionController');
Route::post('system-management/division/search', 'DivisionController@search')->name('division.search');

Route::resource('system-management/country', 'CountryController');
Route::post('system-management/country/search', 'CountryController@search')->name('country.search');

Route::resource('system-management/state', 'StateController');
Route::post('system-management/state/search', 'StateController@search')->name('state.search');

Route::resource('system-management/city', 'CityController');
Route::post('system-management/city/search', 'CityController@search')->name('city.search');

Route::get('system-management/report', 'ReportController@index');
Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');

Route::get('avatars/{name}', 'EmployeeManagementController@load');
