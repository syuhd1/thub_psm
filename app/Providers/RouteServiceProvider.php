 <?php
/*
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Cache\RateLimiting\Limit;
//use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    
     //home *  @var string 


    public const HOME = '/home';

    //Register services.
    
    public function register(): void
    {
        //
    }

    // Bootstrap services.
     
    public function boot(): void
    {

        RateLimiter::for('api', function (Request $request){
        return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
            });

        //route to diff page
        $this->routes(function()
        {
            Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

            Route::middleware('web')
            ->group(base_path('routes/web.php'));

            Route::middleware('web')
            ->group(base_path('routes/admin.php'));

            Route::middleware('web')
            ->group(base_path('routes/customer.php'));

            Route::middleware('web')
            ->group(base_path('routes/staff.php'));

        }
        ) ; 
    }
} */
