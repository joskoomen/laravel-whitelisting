<?php

namespace Ypa\Laravel\Maintenance;

use Closure;
use Illuminate\Http\Request;

class MaintenanceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request $pRequest
     * @param  Closure $pNext
     * @return mixed
     */
    public function handle(Request $pRequest, Closure $pNext)
    {
        $isActive = config('ypa-maintenance.active') === true;
        $ipAddresses = explode(',', config('ypa-maintenance.whitelist')) ?? [];
        $inArray = in_array($this->getIPAddress(), $ipAddresses, true);

        if($isActive && !$inArray) {
            if(!$pRequest->is('/')) {
                return redirect()->to('/');
            }
            return response()->view('ypa-maintenance::maintenance');
        }
        return $pNext($pRequest);
    }

    private function getIPAddress(){
        if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) {
           return $_SERVER['HTTP_CLIENT_IP'];
        }
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
           return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        return $_SERVER['REMOTE_ADDR'];
    }
}
