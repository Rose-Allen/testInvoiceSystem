<?php


use App\Http\Livewire\personal\check;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personal\IndexController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;




Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});


Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth']], function () {

    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [App\Http\Controllers\Personal\IndexController::class, 'index'])->name('personal.main.index');

    });

    Route::group(['prefix'=>'clients'], function (){
        Route::get('/', [App\Http\Controllers\Personal\Client\ClientController::class, 'index'])->name('personal.client.index');

        Route::get('/create', [App\Http\Controllers\Personal\Client\ClientController::class, 'create'])->name('personal.client.create');

        Route::post('/store', [App\Http\Controllers\Personal\Client\ClientController::class, 'store'])->name('personal.client.store');
        Route::get('/{client}', [App\Http\Controllers\Personal\Client\ClientController::class, 'show'])->name('personal.client.show');
        Route::get('/{client}/edit', [App\Http\Controllers\Personal\Client\ClientController::class, 'edit'])->name('personal.client.edit');
        Route::patch('/{client}', [App\Http\Controllers\Personal\Client\ClientController::class, 'update'])->name('personal.client.update');
        Route::delete('/{client}', [App\Http\Controllers\Personal\Client\ClientController::class, 'delete'])->name('personal.client.delete');
    });

    Route::group(['prefix' => 'addresses'], function (){
        Route::get('/{client}/addresses', [App\Http\Controllers\Personal\Address\AddressController::class, 'index'])->name('personal.address.index');
        Route::get('/{client}/create', [App\Http\Controllers\Personal\Address\AddressController::class, 'create'])->name('personal.address.create');
        Route::post('/store', [App\Http\Controllers\Personal\Address\AddressController::class, 'store'])->name('personal.address.store');
        Route::get('/{address}', [App\Http\Controllers\Personal\Address\AddressController::class, 'show'])->name('personal.address.show');
        Route::get('/{address}/edit', [App\Http\Controllers\Personal\Address\AddressController::class, 'edit'])->name('personal.address.edit');
        Route::patch('/{address}', [App\Http\Controllers\Personal\Address\AddressController::class, 'update'])->name('personal.address.update');
        Route::delete('/{address}', [App\Http\Controllers\Personal\Address\AddressController::class, 'delete'])->name('personal.address.delete');
    });

    Route::group(['prefix'=>'products'],  function (){
       Route::get('/', [App\Http\Controllers\Personal\Product\ProductController::class, 'index'])->name('personal.product.index');
       Route::get('/create', [App\Http\Controllers\Personal\Product\ProductController::class, 'create'])->name('personal.product.create');
       Route::post('/store', [App\Http\Controllers\Personal\Product\ProductController::class, 'store'])->name('personal.product.store');
       Route::get('/{product}/edit', [App\Http\Controllers\Personal\Product\ProductController::class, 'edit'])->name('personal.product.edit');
       Route::patch('/{product}', [App\Http\Controllers\Personal\Product\ProductController::class, 'update'])->name('personal.product.update');
       Route::delete('/{product}', [App\Http\Controllers\Personal\Product\ProductController::class, 'delete'])->name('personal.product.delete');
    });


    Route::group(['prefix'=>'userRequisites'], function (){
        Route::get('/', [App\Http\Controllers\Personal\UserRequisite\UserRequisiteController::class, 'index'])->name('personal.user.requisite.index');
        Route::get('/create', [App\Http\Controllers\Personal\UserRequisite\UserRequisiteController::class, 'create'])->name('personal.user.requisite.create');
        Route::post('/store', [App\Http\Controllers\Personal\UserRequisite\UserRequisiteController::class, 'store'])->name('personal.user.requisite.store');
        Route::get('/{userrequisite}/edit', [App\Http\Controllers\Personal\UserRequisite\UserRequisiteController::class, 'edit'])->name('personal.user.requisite.edit');
        Route::patch('/{userrequisite}', [App\Http\Controllers\Personal\UserRequisite\UserRequisiteController::class, 'update'])->name('personal.user.requisite.update');
        Route::delete('/{userrequisite}', [App\Http\Controllers\Personal\UserRequisite\UserRequisiteController::class, 'delete'])->name('personal.user.requisite.delete');
    });


    Route::group(['prefix'=>'clientContracts'], function (){
        Route::get('/{client}', [App\Http\Controllers\Personal\ClientContract\ClientContractController::class, 'index'])->name('personal.client.contract.index');
        Route::get('/{client}/create', [App\Http\Controllers\Personal\ClientContract\ClientContractController::class, 'create'])->name('personal.client.contract.create');
        Route::post('/store', [App\Http\Controllers\Personal\ClientContract\ClientContractController::class, 'store'])->name('personal.client.contract.store');
        Route::get('/{clentcontract}/edit', [App\Http\Controllers\Personal\ClientContract\ClientContractController::class, 'edit'])->name('personal.client.contract.edit');
        Route::patch('/{clentcontract}', [App\Http\Controllers\Personal\ClientContract\ClientContractController::class, 'update'])->name('personal.client.contract.update');
        Route::delete('/{clentcontract}', [App\Http\Controllers\Personal\ClientContract\ClientContractController::class, 'delete'])->name('personal.client.contract.delete');

    });


    Route::group(['prefix'=>'clientRequisites'], function (){
        Route::get('/{client}/', [App\Http\Controllers\Personal\ClientRequisite\ClientRequisiteController::class, 'index'])->name('personal.client.requisite.index');
        Route::get('/{client}/create', [App\Http\Controllers\Personal\ClientRequisite\ClientRequisiteController::class, 'create'])->name('personal.client.requisite.create');
        Route::post('/store', [App\Http\Controllers\Personal\ClientRequisite\ClientRequisiteController::class, 'store'])->name('personal.client.requisite.store');;
        Route::get('/{clientrequisite}/edit', [App\Http\Controllers\Personal\ClientRequisite\ClientRequisiteController::class, 'edit'])->name('personal.client.requisite.edit');
        Route::patch('/{clientrequisite}', [App\Http\Controllers\Personal\ClientRequisite\ClientRequisiteController::class, 'update'])->name('personal.client.requisite.update');
        Route::delete('/{clientrequisite}', [App\Http\Controllers\Personal\ClientRequisite\ClientRequisiteController::class, 'delete'])->name('personal.client.requisite.delete');

    });




    Route::get('/invoice', [App\Http\Controllers\Personal\Invoice\InvoiceController::class, 'index'])->name("personal.invoice.index");

    Route::get('/invoice/create', function () {
        return view('personal.invoice.create');
    })->name("personal.invoice.create");


    Route::get('/invoice/{check}/pdf/preview', [App\Http\Controllers\Personal\PDFController::class,'check'])->name('pdf.preview');
    Route::get('/invoice/{check}/pdf/generate', [App\Http\Controllers\Personal\PDFController::class,'check_generate'] )->name('pdf.generate');

});
//Route::get('/invoice', App\Http\Livewire\Personal\Check::class)->name('invoice');


//Route::group(['prefix' => 'personal', 'middleware' => ['auth']], function () {

//});


//Route::resource('/clients', \App\Http\Controllers\Personal\ClientController::class );
////Route::resource('/addresses', \App\Http\Controllers\AddressController::class );
////Route::resource('/addresses{addresses}/create', \App\Http\Controllers\AddressController::class,  );
//Route::get('/address' , [\App\Http\Controllers\AddController::class, 'index'])->name('address.index');
//Route::get('/address/{client}/create' , [\App\Http\Controllers\AddController::class, 'create'])->name('address.create');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
