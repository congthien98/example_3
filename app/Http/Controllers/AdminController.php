<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Illuminate\Routing\Pipeline;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    /**
     * The guard implementation.
     * Triển khai của cơ chế bảo vệ"
     * lấy cơ chế này từ .. sau đây
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */

    //nhận vào một đối tượng StatefulGuard thông qua tham số $guard và gán giá trị của tham số này cho biến $guard trong lớp.
    //use to chuyển đối tượng StatefulGuard từ bên ngoài vào lớp hiện tại, để lớp có thể sử dụng và tương tác với đối tượng StatefulGuard trong các phương thức khác của nó.
     public function __construct(StatefulGuard $guard)
    {

        // Dòng mã $this->guard = $guard;được sử dụng để gán giá trị của biến $guard cho thuộc tính $guard của đối tượng hiện tại.
        $this->guard = $guard;
         
    }

    public function loginForm(){
    	return view('auth.admin_login', ['guard' => 'admin']);
    }

    /**
     * Attempt to authenticate a new session.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return mixed
     */
    public function store(LoginRequest $request)
    {
        return $this->loginPipeline($request)->then(function ($request) {
            return app(LoginResponse::class);
        });
    }

        /**
     * Get the authentication pipeline instance.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Pipeline\Pipeline
     */
    protected function loginPipeline(LoginRequest $request)
    {
        if (Fortify::$authenticateThroughCallback) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                call_user_func(Fortify::$authenticateThroughCallback, $request)
            ));
        }

        if (is_array(config('fortify.pipelines.login'))) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                config('fortify.pipelines.login')
            ));
        }

        return (new Pipeline(app()))->send($request)->through(array_filter([
            config('fortify.limiters.login') ? null : EnsureLoginIsNotThrottled::class,
            Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            AttemptToAuthenticate::class,
            PrepareAuthenticatedSession::class,
        ]));
    }





}
