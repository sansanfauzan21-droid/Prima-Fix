<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('frontend.home.index');
});

/* Backend */
Route::controller(App\Http\Controllers\Backend\AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('login', 'authentication')->name('authentication');
    });
    Route::middleware('auth')->group(function () {
        Route::post('logout', 'logout')->name('logout');
    });
});

Route::group(['prefix' => 'home-content', 'as' => 'home-content.', 'middleware' => ['auth', 'role:super-admin']], function () {
    // 1. Index Page (Menampilkan daftar section untuk diedit)
    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'contentIndex'])->name('index');

    // 2. ROUTE BARU UNTUK MENAMPILKAN FORM EDIT (FIX ERROR)
    // Nama route ini adalah: home-content.edit.section
    Route::get('/edit/{section_name}', [App\Http\Controllers\Backend\HomeController::class, 'contentEditSection'])->name('edit.section');

    // 3. ROUTE BARU UNTUK UPDATE DATA
    Route::put('/update/{section_name}', [App\Http\Controllers\Backend\HomeController::class, 'contentUpdateSection'])->name('update.section');
});

/* Dashboard */
Route::controller(App\Http\Controllers\Backend\DashboardController::class)->prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/clear-activities', 'clearActivities')->name('clear-activities');
});

/* Admin Routes */
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:super-admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    // My Profile routes
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');

    // User management routes
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);

    // Role management routes
    Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);
});

/* Company Profile */
Route::prefix('company-profile')->group(function () {
    /* Home */
    Route::controller(App\Http\Controllers\Backend\HomeController::class)->prefix('home')->name('home.')->middleware('auth')->group(function () {
        /* Hero */
        Route::prefix('hero')->name('hero.')->group(function () {
            Route::get('/', 'heroIndex')->name('index');
            Route::post('/', 'heroUpdate')->name('update');
        });
        /* About */


       /* Content */
        Route::prefix('content')->name('content.')->middleware(['auth', 'role:super-admin'])->group(function () {
            Route::get('/', 'contentIndex')->name('index');
            Route::put('{content}', 'contentUpdate')->name('update');
            Route::delete('{content}', 'contentDestroy')->name('destroy');
        });
        /* SBU Images */
        Route::prefix('sbu-image')->name('sbu-image.')->middleware(['auth', 'role:super-admin'])->group(function () {
            Route::get('/', 'sbuImageIndex')->name('index');
            Route::get('/create', 'sbuImageCreate')->name('create');
            Route::post('/', 'sbuImageStore')->name('store');
            Route::get('{sbuImage}/edit', 'sbuImageEdit')->name('edit');
            Route::put('{sbuImage}', 'sbuImageUpdate')->name('update');
            Route::delete('{sbuImage}', 'sbuImageDestroy')->name('destroy');
        });

    });
    /* Feature */
    Route::controller(App\Http\Controllers\Backend\FeatureController::class)->prefix('feature')->name('feature.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('{feature}', 'update')->name('update');
        Route::delete('{feature}', 'destroy')->name('destroy');
    });
    /* Pricing */
    Route::controller(App\Http\Controllers\Backend\PricingController::class)->prefix('pricing')->name('pricing.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('{pricing}', 'show')->name('show');
        Route::put('{pricing}', 'update')->name('update');
        Route::delete('{pricing}', 'destroy')->name('destroy');
        Route::post('{pricing}/detail', 'detailStore')->name('detailStore');
        Route::delete('{pricingDetail}/detail', 'detailDestroy')->name('detailDestroy');
    });
    Route::prefix('blog')->name('blog.')->middleware('auth')->group(function () {
        Route::controller(App\Http\Controllers\Backend\BlogController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            // Route::get('{blog}', 'show')->name('show');
            Route::get('{blog}/edit', 'edit')->name('edit');
            Route::put('{blog}', 'update')->name('update');
            Route::delete('{blog}', 'destroy')->name('destroy');
        });
        Route::controller(App\Http\Controllers\Backend\CategoryController::class)->prefix('category')->name('category.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::put('{category}', 'update')->name('update');
            Route::delete('{category}', 'destroy')->name('destroy');
        });
        Route::controller(App\Http\Controllers\Backend\TagController::class)->prefix('tag')->name('tag.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::put('{tag}', 'update')->name('update');
            Route::delete('{tag}', 'destroy')->name('destroy');
        });
    });
});

/* Utility */
Route::prefix('utilities')->group(function () {
    /* Company */
    Route::controller(App\Http\Controllers\Backend\Utilities\CompanyController::class)->prefix('company')->name('company.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('update', 'update')->name('update');
    });

    /* Footer */
    Route::controller(App\Http\Controllers\Backend\Utilities\FooterController::class)->prefix('footer')->name('footer.')->middleware('auth')->group(function () {
        /* Social Media */
        Route::prefix('social-media')->name('social-media.')->group(function () {
            Route::get('/', 'socialMedia')->name('index');
            Route::post('/', 'socialMediaStore')->name('store');
            Route::put('{socialMedia}', 'socialMediaUpdate')->name('update');
            Route::delete('{socialMedia}', 'socialMediaDestroy')->name('destroy');
        });
        /* Navigation */
        Route::prefix('navigation')->name('navigation.')->group(function () {
            Route::get('/', 'navigation')->name('index');
            Route::post('/', 'navigationStore')->name('store');
            Route::put('{navigation}', 'navigationUpdate')->name('update');
            Route::delete('{navigation}', 'navigationDestroy')->name('destroy');
        });
    });

    /* Regulations */
    Route::controller(App\Http\Controllers\Backend\RegulationController::class)->prefix('regulations')->name('regulations.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    /* Review */
    Route::controller(App\Http\Controllers\Backend\Utilities\ReviewController::class)->prefix('review')->name('review.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{review}/edit', 'edit')->name('edit');
        Route::put('/{review}', 'update')->name('update');
        Route::delete('/{review}', 'destroy')->name('destroy');
    });

    /* Contact Form */
    Route::controller(App\Http\Controllers\Backend\Utilities\ContactFormController::class)->prefix('contact-form')->name('contact-form.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show');
        Route::post('/{id}/mark-read', 'markRead')->name('mark-read');
        Route::post('/{id}/reply', 'reply')->name('reply');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });
});

/* Regulations */
Route::controller(App\Http\Controllers\Backend\RegulationController::class)->prefix('regulations')->name('regulations.')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('destroy');
});

/* Frontend */
Route::name('frontend.')->group(function () {
    /* Home */
    Route::controller(App\Http\Controllers\Frontend\HomeController::class)->prefix('home')->name('home.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/logo', 'logo')->name('logo');
        Route::get('/culture', 'culture')->name('culture');
        Route::get('/organization', 'organization')->name('organization');
    });
    /* Visi Misi */
    Route::controller(App\Http\Controllers\Frontend\VisiMisiController::class)->prefix('visimisi')->name('visimisi.')->group(function () {
        Route::get('/', 'index')->name('index');
    });
    /* Services */
    Route::controller(App\Http\Controllers\Frontend\ServicesController::class)->prefix('services')->name('services.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/slo', 'slo')->name('slo');
    });
    /* Legalitas */
    Route::prefix('legalitas')->name('legalitas.')->group(function () {
        Route::controller(App\Http\Controllers\Frontend\LegalitasController::class)->group(function () {
            Route::get('/', 'index')->name('index');
        });
        Route::controller(App\Http\Controllers\Frontend\RegulasiController::class)->group(function () {
            Route::get('/regulasi', 'index')->name('regulasi');
        });
    });
    /* Pricing */
    Route::controller(App\Http\Controllers\Frontend\PricingController::class)->prefix('pricing')->name('pricing')->group(function () {
        Route::get('/', 'index')->name('index');
    });
    /* Blog */
    Route::controller(App\Http\Controllers\Frontend\BlogController::class)->prefix('blog')->name('blog.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('{blog}', 'show')->name('show');
    });
    /* Contact Us */
    Route::controller(App\Http\Controllers\Frontend\ContactUsController::class)->prefix('contact-us')->name('contact-us.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/keluhankendala', 'keluhankendala')->name('keluhankendala');
        Route::post('/send', 'send')->name('send');
    });
});
