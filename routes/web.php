<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Students\StudentController;
use App\Http\Controllers\Teachers\TeacherController;
use App\Http\Controllers\Parents\ParentController;
use App\Http\Controllers\Library\BookController;
use App\Http\Controllers\Account\FeesController;
use App\Http\Controllers\Account\ExpenseController;
use App\Http\Controllers\Classes\ClassController;
use App\Http\Controllers\Classes\SubjectController;
use App\Http\Controllers\Classes\RoutineController;
use App\Http\Controllers\Attendance\AttendanceController;
use App\Http\Controllers\Exams\ExamController;
use App\Http\Controllers\Transport\TransportController;
use App\Http\Controllers\Hostel\HostelController;
use App\Http\Controllers\Notices\NoticeController;
use App\Http\Controllers\Messages\MessageController;
use App\Http\Controllers\UI\UIElementsController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Account\AccountSettingsController;

// Test Route
Route::get('/test', function () {
    return 'Routes are working!';
})->name('test');

// Redirect old HTML files to new Laravel routes
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

Route::get('/student-details.html', function () {
    return redirect()->route('students.details');
});

Route::get('/admit-form.html', function () {
    return redirect()->route('students.admit');
});

Route::get('/student-promotion.html', function () {
    return redirect()->route('students.promotion');
});

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

Route::get('/all-book.html', function () {
    return redirect()->route('books.all');
});

Route::get('/add-book.html', function () {
    return redirect()->route('books.create');
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

Route::get('/all-class.html', function () {
    return redirect()->route('classes.all');
});

Route::get('/add-class.html', function () {
    return redirect()->route('classes.create');
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

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register.post');

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

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
    Route::get('/details', [StudentController::class, 'details'])->name('details');
    Route::get('/admit', [StudentController::class, 'admit'])->name('admit');
    Route::post('/admit', [StudentController::class, 'store'])->name('store');
    Route::get('/promotion', [StudentController::class, 'promotion'])->name('promotion');
    Route::post('/promotion', [StudentController::class, 'promote'])->name('promote');
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

// Library Routes
Route::prefix('books')->name('books.')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('index');
    Route::get('/all', [BookController::class, 'all'])->name('all');
    Route::get('/add', [BookController::class, 'create'])->name('create');
    Route::post('/add', [BookController::class, 'store'])->name('store');
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

// Classes Routes
Route::prefix('classes')->name('classes.')->group(function () {
    Route::get('/', [ClassController::class, 'index'])->name('index');
    Route::get('/all', [ClassController::class, 'all'])->name('all');
    Route::get('/add', [ClassController::class, 'create'])->name('create');
    Route::post('/add', [ClassController::class, 'store'])->name('store');
});

Route::prefix('subjects')->name('subjects.')->group(function () {
    Route::get('/', [SubjectController::class, 'index'])->name('index');
    Route::get('/all', [SubjectController::class, 'all'])->name('all');
});

Route::prefix('routine')->name('routine.')->group(function () {
    Route::get('/', [RoutineController::class, 'index'])->name('index');
    Route::get('/class', [RoutineController::class, 'classRoutine'])->name('class');
});

// Attendance Routes
Route::prefix('attendance')->name('attendance.')->group(function () {
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
    
    // Library routes that require authentication
    Route::prefix('books')->name('books.')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('index');
        Route::get('/all', [BookController::class, 'all'])->name('all');
        Route::get('/add', [BookController::class, 'create'])->name('create');
        Route::post('/add', [BookController::class, 'store'])->name('store');
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
    
    // Classes routes that require authentication
    Route::prefix('classes')->name('classes.')->group(function () {
        Route::get('/', [ClassController::class, 'index'])->name('index');
        Route::get('/all', [ClassController::class, 'all'])->name('all');
        Route::get('/add', [ClassController::class, 'create'])->name('create');
        Route::post('/add', [ClassController::class, 'store'])->name('store');
    });
    
    Route::prefix('subjects')->name('subjects.')->group(function () {
        Route::get('/', [SubjectController::class, 'index'])->name('index');
        Route::get('/all', [SubjectController::class, 'all'])->name('all');
    });
    
    Route::prefix('routine')->name('routine.')->group(function () {
        Route::get('/', [RoutineController::class, 'index'])->name('index');
        Route::get('/class', [RoutineController::class, 'classRoutine'])->name('class');
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


