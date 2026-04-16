<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix("dashboard")->middleware(['auth', 'verified'])->group(function(){
 Route::view("employee",'components.employee.⚡index');
 Route::view("contract",'component.contract');
 Route::view("school",'component.school');
 Route::view("department",'component.department');
 Route::view("designation",'component.designation');
 Route::view("payment",'component.payment');
 Route::view("payroll",'component.payroll');
 Route::view("salary",'component.salary');
 Route::view("/",'dashboard');
 Route::view('profile', 'profile');
});

require __DIR__.'/auth.php';
