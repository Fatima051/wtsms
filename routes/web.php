<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Students\StudentController;
use App\Http\Controllers\Teachers\TeacherController;
use App\Http\Controllers\Parents\ParentController;
use App\Http\Controllers\Account\FeesController;
use App\Http\Controllers\Account\ExpenseController;
use App\Http\Controllers\Attendance\AttendanceController;
use App\Http\Controllers\Exams\ExamController;
use App\Http\Controllers\Transport\TransportController;
use App\Http\Controllers\Hostel\HostelController;
use App\Http\Controllers\Notices\NoticeController;
use App\Http\Controllers\Messages\MessageController;
use App\Http\Controllers\UI\UIElementsController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Account\AccountSettingsController;
use App\Http\Controllers\Admissions\AdmissionsController;


// Test Route
Route::get('/test', function () {
    return 'Routes are working!';
})->name('test');

Route::get('/index.html', function () {
    return redirect()->route('dashboard.index');
});

Route::get('/index3.html', function () {
    return redirect()->route('dashboard.index3');
});

Route::get('/index4.html', function () {
    return redirect()->route('dashboard.index4');
});

Route::get('/index5.html', function () {
    return redirect()->route('dashboard.index5');
});


Route::get('/all-student.html', function () {
    return redirect()->route('students.all');
});


Route::get('/admit-form.html', function () {
    return redirect()->route('students.admit');
});
Route::get('/promotion', [StudentController::class, 'promotion'])->name('students.promotion');
    Route::post('/promote', [StudentController::class, 'promote'])->name('students.promote');

Route::get('/students/add', [StudentController::class, 'add'])->name('students.add');


Route::post('/students/add', [StudentController::class, 'addStore'])->name('students.add.store');

Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students/delete/{id}', [StudentController::class, 'delete'])->name('students.delete');

Route::get('/students/refresh/{id}', [StudentController::class, 'refresh'])->name('students.refresh');

Route::get('/students/allclasses', [StudentController::class, 'allclasses'])->name('students.allclasses');
Route::get('/students/class/edit/{className}', [StudentController::class, 'editClass'])->name('students.class.edit');
Route::post('/students/class/update/{id}', [StudentController::class, 'updateClass'])->name('students.class.update');
Route::get('/students/class/{className}', [StudentController::class, 'classStudents'])->name('students.class.students');
Route::get('/classes/{className}', [StudentController::class, 'classStudents'])->name('classes.students');


Route::get('/all-teacher.html', function () {
    return redirect()->route('teachers.all');
});

Route::get('/teacher-details.html', function () {
    return redirect()->route('teachers.details');
});

Route::get('/add-teacher.html', function () {
    return redirect()->route('teachers.create');
});

Route::get('/teacher-payment.html', function () {
    return redirect()->route('teachers.payment');
});

Route::get('/all-parents.html', function () {
    return redirect()->route('parents.all');
});

Route::get('/parents-details.html', function () {
    return redirect()->route('parents.details');
});

Route::get('/add-parents.html', function () {
    return redirect()->route('parents.create');
});



Route::get('/all-fees.html', function () {
    return redirect()->route('fees.all');
});

Route::get('/all-expense.html', function () {
    return redirect()->route('expenses.all');
});

Route::get('/add-expense.html', function () {
    return redirect()->route('expenses.create');
});

Route::get('/all-subject.html', function () {
    return redirect()->route('subjects.all');
});

Route::get('/class-routine.html', function () {
    return redirect()->route('routine.class');
});

Route::get('/student-attendence.html', function () {
    return redirect()->route('attendance.student');
});

Route::get('/exam-schedule.html', function () {
    return redirect()->route('exams.schedule');
});

Route::get('/exam-grade.html', function () {
    return redirect()->route('exams.grades');
});

Route::get('/transport.html', function () {
    return redirect()->route('transport.index');
});

Route::get('/hostel.html', function () {
    return redirect()->route('hostel.index');
});

Route::get('/notice-board.html', function () {
    return redirect()->route('notices.board');
});

Route::get('/messaging.html', function () {
    return redirect()->route('messages.messaging');
});

Route::get('/notification-alart.html', function () {
    return redirect()->route('ui.notification-alert');
});

Route::get('/button.html', function () {
    return redirect()->route('ui.buttons');
});

Route::get('/grid.html', function () {
    return redirect()->route('ui.grid');
});

Route::get('/modal.html', function () {
    return redirect()->route('ui.modal');
});

Route::get('/progress-bar.html', function () {
    return redirect()->route('ui.progress-bar');
});

Route::get('/ui-tab.html', function () {
    return redirect()->route('ui.ui-tab');
});

Route::get('/ui-widget.html', function () {
    return redirect()->route('ui.ui-widget');
});

Route::get('/map.html', function () {
    return redirect()->route('pages.map');
});

Route::get('/account-settings.html', function () {
    return redirect()->route('pages.account-settings');
});


// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register.post');

// Dashboard (protected)
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');



// Home Route

// Dashboard Routes
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/index2', [DashboardController::class, 'index2'])->name('index2');
    Route::get('/index3', [DashboardController::class, 'index3'])->name('index3');
    Route::get('/index4', [DashboardController::class, 'index4'])->name('index4');
    Route::get('/index5', [DashboardController::class, 'index5'])->name('index5');
});

// Students Routes
Route::prefix('students')->name('students.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/all', [StudentController::class, 'all'])->name('all');
    Route::get('/admit', [StudentController::class, 'admit'])->name('admit');
    Route::post('/admit', [StudentController::class, 'store'])->name('store');
    Route::get('/promotion', [StudentController::class, 'promotion'])->name('promotion');
    Route::post('/allclasses', [StudentController::class, 'allclasses'])->name('allclasses');
    
});

// Teachers Routes
Route::prefix('teachers')->name('teachers.')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/all', [TeacherController::class, 'all'])->name('all');
    Route::get('/details', [TeacherController::class, 'details'])->name('details');
    Route::get('/add', [TeacherController::class, 'create'])->name('create');
    Route::post('/add', [TeacherController::class, 'store'])->name('store');
    Route::get('/payment', [TeacherController::class, 'payment'])->name('payment');
    Route::post('/payment', [TeacherController::class, 'processPayment'])->name('process-payment');
});

// Parents Routes
Route::prefix('parents')->name('parents.')->group(function () {
    Route::get('/', [ParentController::class, 'index'])->name('index');
    Route::get('/all', [ParentController::class, 'all'])->name('all');
    Route::get('/details', [ParentController::class, 'details'])->name('details');
    Route::get('/add', [ParentController::class, 'create'])->name('create');
    Route::post('/add', [ParentController::class, 'store'])->name('store');
});




// Account Routes
Route::prefix('fees')->name('fees.')->group(function () {
    Route::get('/', [FeesController::class, 'index'])->name('index');
    Route::get('/all', [FeesController::class, 'all'])->name('all');
    Route::post('/collect', [FeesController::class, 'collect'])->name('collect');
});

Route::prefix('expenses')->name('expenses.')->group(function () {
    Route::get('/', [ExpenseController::class, 'index'])->name('index');
    Route::get('/all', [ExpenseController::class, 'all'])->name('all');
    Route::get('/add', [ExpenseController::class, 'create'])->name('create');
    Route::post('/add', [ExpenseController::class, 'store'])->name('store');
});


Route::prefix('admissions')->name('admissions.')->group(function () {
    Route::get('/', [AdmissionsController::class, 'all'])->name('all');           // Admissions main page
    Route::get('/add', [AdmissionsController::class, 'add'])->name('add');        // Add student
    Route::post('/store', [AdmissionsController::class, 'store'])->name('store'); // Store student
    Route::delete('/{id}', [AdmissionsController::class, 'destroy'])->name('destroy'); // Delete student
    Route::get('/withdraw', [AdmissionsController::class, 'withdraw'])->name('withdraw'); // Withdraw student
});


// Attendance Routes
Route::prefix('attendance')->name(value: 'attendance.')->group(function () {
    Route::get('/', [AttendanceController::class, 'index'])->name('index');
    Route::get('/student', [AttendanceController::class, 'studentAttendance'])->name('student');
    Route::post('/mark', [AttendanceController::class, 'markAttendance'])->name('mark');
});

// Exams Routes
Route::prefix('exams')->name('exams.')->group(function () {
    Route::get('/schedule', [ExamController::class, 'schedule'])->name('schedule');
    Route::get('/grades', [ExamController::class, 'grades'])->name('grades');
    Route::post('/schedule', [ExamController::class, 'storeSchedule'])->name('store-schedule');
    Route::post('/grades', [ExamController::class, 'storeGrades'])->name('store-grades');
});

// Transport Routes
Route::prefix('transport')->name('transport.')->group(function () {
    Route::get('/', [TransportController::class, 'index'])->name('index');
});

// Hostel Routes
Route::prefix('hostel')->name('hostel.')->group(function () {
    Route::get('/', [HostelController::class, 'index'])->name('index');
});

// Notices Routes
Route::prefix('notices')->name('notices.')->group(function () {
    Route::get('/', [NoticeController::class, 'index'])->name('index');
    Route::get('/board', [NoticeController::class, 'board'])->name('board');
});

// Messages Routes
Route::prefix('messages')->name('messages.')->group(function () {
    Route::get('/', [MessageController::class, 'index'])->name('index');
    Route::get('/messaging', [MessageController::class, 'messaging'])->name('messaging');
});

// UI Elements Routes
Route::prefix('ui')->name('ui.')->group(function () {
    Route::get('/buttons', [UIElementsController::class, 'buttons'])->name('buttons');
    Route::get('/grid', [UIElementsController::class, 'grid'])->name('grid');
    Route::get('/modal', [UIElementsController::class, 'modal'])->name('modal');
    Route::get('/notification-alert', [UIElementsController::class, 'notificationAlert'])->name('notification-alert');
    Route::get('/progress-bar', [UIElementsController::class, 'progressBar'])->name('progress-bar');
    Route::get('/ui-tab', [UIElementsController::class, 'uiTab'])->name('ui-tab');
    Route::get('/ui-widget', [UIElementsController::class, 'uiWidget'])->name('ui-widget');
});

// Pages Routes
Route::prefix('pages')->name('pages.')->group(function () {
    Route::get('/map', [PagesController::class, 'map'])->name('map');
    Route::get('/account-settings', [AccountSettingsController::class, 'index'])->name('account-settings');
});

// Protected Routes (require authentication)
Route::middleware(['auth'])->group(function () {
    // Dashboard routes that require authentication
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('/index2', [DashboardController::class, 'index2'])->name('index2');
        Route::get('/index3', [DashboardController::class, 'index3'])->name('index3');
        Route::get('/index4', [DashboardController::class, 'index4'])->name('index4');
        Route::get('/index5', [DashboardController::class, 'index5'])->name('index5');
    });
    
    // Students routes that require authentication
    Route::prefix('students')->name('students.')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('index');
        Route::get('/all', [StudentController::class, 'all'])->name('all');
        Route::get('/details', [StudentController::class, 'details'])->name('details');
        Route::get('/admit', [StudentController::class, 'admit'])->name('admit');
        Route::post('/admit', [StudentController::class, 'store'])->name('store');
        Route::get('/promotion', [StudentController::class, 'promotion'])->name('promotion');
        Route::post('/promotion', [StudentController::class, 'promote'])->name('promote');
    });
    
    // Teachers routes that require authentication
    Route::prefix('teachers')->name('teachers.')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('index');
        Route::get('/all', [TeacherController::class, 'all'])->name('all');
        Route::get('/details', [TeacherController::class, 'details'])->name('details');
        Route::get('/add', [TeacherController::class, 'create'])->name('create');
        Route::post('/add', [TeacherController::class, 'store'])->name('store');
        Route::get('/payment', [TeacherController::class, 'payment'])->name('payment');
        Route::post('/payment', [TeacherController::class, 'processPayment'])->name('process-payment');
    });
    
    // Parents routes that require authentication
    Route::prefix('parents')->name('parents.')->group(function () {
        Route::get('/', [ParentController::class, 'index'])->name('index');
        Route::get('/all', [ParentController::class, 'all'])->name('all');
        Route::get('/details', [ParentController::class, 'details'])->name('details');
        Route::get('/add', [ParentController::class, 'create'])->name('create');
        Route::post('/add', [ParentController::class, 'store'])->name('store');
    });
    
    
    
    // Account routes that require authentication
    Route::prefix('fees')->name('fees.')->group(function () {
        Route::get('/', [FeesController::class, 'index'])->name('index');
        Route::get('/all', [FeesController::class, 'all'])->name('all');
        Route::post('/collect', [FeesController::class, 'collect'])->name('collect');
    });
    
    Route::prefix('expenses')->name('expenses.')->group(function () {
        Route::get('/', [ExpenseController::class, 'index'])->name('index');
        Route::get('/all', [ExpenseController::class, 'all'])->name('all');
        Route::get('/add', [ExpenseController::class, 'create'])->name('create');
        Route::post('/add', [ExpenseController::class, 'store'])->name('store');
    });
    
    
    
    // Attendance routes that require authentication
    Route::prefix('attendance')->name('attendance.')->group(function () {
        Route::get('/', [AttendanceController::class, 'index'])->name('index');
        Route::get('/student', [AttendanceController::class, 'studentAttendance'])->name('student');
        Route::post('/mark', [AttendanceController::class, 'markAttendance'])->name('mark');
    });
    
    // Exams routes that require authentication
    Route::prefix('exams')->name('exams.')->group(function () {
        Route::get('/schedule', [ExamController::class, 'schedule'])->name('schedule');
        Route::get('/grades', [ExamController::class, 'grades'])->name('grades');
        Route::post('/schedule', [ExamController::class, 'storeSchedule'])->name('store-schedule');
        Route::post('/grades', [ExamController::class, 'storeGrades'])->name('store-grades');
    });
    
    // Transport routes that require authentication
    Route::prefix('transport')->name('transport.')->group(function () {
        Route::get('/', [TransportController::class, 'index'])->name('index');
    });
    
    // Hostel routes that require authentication
    Route::prefix('hostel')->name('hostel.')->group(function () {
        Route::get('/', [HostelController::class, 'index'])->name('index');
    });
    
    // Notices routes that require authentication
    Route::prefix('notices')->name('notices.')->group(function () {
        Route::get('/', [NoticeController::class, 'index'])->name('index');
        Route::get('/board', [NoticeController::class, 'board'])->name('board');
    });
    
    // Messages routes that require authentication
    Route::prefix('messages')->name('messages.')->group(function () {
        Route::get('/', [MessageController::class, 'index'])->name('index');
        Route::get('/messaging', [MessageController::class, 'messaging'])->name('messaging');
    });
    
    // UI Elements routes that require authentication
    Route::prefix('ui')->name('ui.')->group(function () {
        Route::get('/buttons', [UIElementsController::class, 'buttons'])->name('buttons');
        Route::get('/grid', [UIElementsController::class, 'grid'])->name('grid');
        Route::get('/modal', [UIElementsController::class, 'modal'])->name('modal');
        Route::get('/notification-alert', [UIElementsController::class, 'notificationAlert'])->name('notification-alert');
        Route::get('/progress-bar', [UIElementsController::class, 'progressBar'])->name('progress-bar');
        Route::get('/ui-tab', [UIElementsController::class, 'uiTab'])->name('ui-tab');
        Route::get('/ui-widget', [UIElementsController::class, 'uiWidget'])->name('ui-widget');
    });
    
    // Pages routes that require authentication
    Route::prefix('pages')->name('pages.')->group(function () {
        Route::get('/map', [PagesController::class, 'map'])->name('map');
        Route::get('/account-settings', [AccountSettingsController::class, 'index'])->name('account-settings');
    });
});


