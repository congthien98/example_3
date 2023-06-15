<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\StatefulGuard;
use App\Actions\Fortify\AttemptToAuthenticate;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
use App\Http\Controllers\AdminController;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Auth;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * su dung phuong phap binding: Binding primitives có thể tự động inject các dependency vào trong class.
     * đăng ký một binding để cung cấp một instance của StatefulGuard(dependency) dựa trên điều kiện(when) cho ba class cụ thể. Điều này cho phép chúng ta tùy chỉnh việc giải quyết dependency trong các trường hợp cụ thể của ứng dụng.
     *  tao ra 1 binging(ket noi), gom: khi cac class trong when() duoc goi thi no se duoc tiem vao 1 inject dependency  (StafulGuard), dependency nay se inject mot dependency thuoc inject dependency do voi gia tri la 1 object Auth:('admin)
     */
    // when(...): chi dieu kien:binding này chỉ được áp dụng cho các class được liệt kê là [AdminController::class, AttemptToAuthenticate::class, RedirectIfTwoFactorAuthenticatable::class].
    //needs() để chỉ định dependency mà chúng ta muốn giải quyết, trong trường hợp này là StatefulGuard.
    // give(): goi 1 ham callback( la function ben duoi)  return( cung cấp) một instance của Auth::guard('admin') (là một instance của StatefulGuard) cho các class được liệt kê trong điều kiện when().
    public function register()
    {
        $this->app->when([AdminController::class, AttemptToAuthenticate::class, RedirectIfTwoFactorAuthenticatable::class])
            ->needs(StatefulGuard::class)
            ->give(function () {
                return Auth::guard('admin');
            });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for ('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email . $request->ip());
        });

        RateLimiter::for ('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}