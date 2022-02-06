<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_img',
        'role_as',
    ];

    protected $hidden = [
        'password',
    ];

    public function check_in()
    {
        return $this->hasMany('App\Models\Check_in', 'employer_id', 'id')->oldest();
    }

    public function checkedIn()
    {
        return $this->check_in()->whereDate('created_at', Carbon::today('GMT+2'))->exists();
    }

    public function notCheckedIn()
    {
        return $this->check_in()->whereDate('created_at', Carbon::today('GMT+2'))->doesntExist();
    }

    public function checkedOut()
    {
        return $this->check_out()->whereDate('created_at', Carbon::today('GMT+2'))->exists();
    }

    public function notCheckedOut()
    {
        return $this->check_out()->whereDate('created_at', Carbon::today('GMT+2'))->doesntExist();
    }

    public function weekly_check_in()
    {
        return $this->check_in()->whereBetween('created_at', [Carbon::now('GMT+2')->startOfWeek(), Carbon::now('GMT+2')->endOfWeek()]);
    }

    public function january_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '1');
    }

    public function february_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '2');
    }

    public function march_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '3');
    }

    public function april_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '4');
    }

    public function may_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '5');
    }

    public function june_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '6');
    }

    public function july_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '7');
    }

    public function august_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '8');
    }

    public function september_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '9');
    }

    public function october_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '10');
    }

    public function november_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '11');
    }

    public function december_check_in()
    {
        return $this->check_in()->whereMonth('created_at', '12');
    }

    // ############ CHECK-OUT

    public function check_out()
    {
        return $this->hasMany('App\Models\Check_out', 'employer_id', 'id')->oldest();
    }

    public function weekly_check_out()
    {
        return $this->check_out()->whereBetween('created_at', [Carbon::now('GMT+2')->startOfWeek(), Carbon::now('GMT+2')->endOfWeek()]);
    }

    public function january_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '1')->latest();
    }

    public function february_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '2');
    }

    public function march_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '3');
    }

    public function april_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '4');
    }

    public function may_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '5');
    }

    public function june_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '6');
    }
    public function july_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '7');
    }

    public function august_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '8');
    }

    public function september_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '9');
    }

    public function october_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '10');
    }

    public function november_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '11');
    }

    public function december_check_out()
    {
        return $this->check_out()->whereMonth('created_at', '12');
    }
}
