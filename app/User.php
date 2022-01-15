<?php

namespace App;

use App\Traits\HasMeta;
use App\PushNotificationToken;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Auditable, MustVerifyEmail
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;
    use HasMeta;
    use HasApiTokens;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'name', 'email', 'password','last_login_at','last_login_ip',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pushNotificationTokens()
    {
        return $this->hasMany(PushNotificationToken::class);
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function getTotalTicketsAttribute()
    {
       return $this->hasMany('App\Ticket')->withoutGlobalScope('own_ticket')->whereUserId($this->id)->count();
    }

    public function socialAccounts()
    {
        return $this->hasMany('App\SocialAccount');
    }

    public function avatar()
    {
        return $this->avatar;
    }

    public function getAvatarAttribute($avatar){
        if($avatar) return asset($avatar);
        return 'https://s.gravatar.com/avatar/'.md5($this->email).'?s=64&d=mp';
    }

    public function defaultAvatar()
    {
        return "https://s.gravatar.com/avatar/".md5($this->email)."?s=64&d=mp";
    }

    public function isEmployee()
    {
        return $this->hasAnyRole('super_admin','admin','agent','non-restricted_agent');
    }

    public function isAdmin()
    {
        return $this->hasAnyRole('super_admin','admin');
    }

    public function userRole(){
        return $this->getRoleNames()->toString();
    }

    public function envatoCustomer()
    {
        return $this->hasOne('App\SocialAccount')
            ->where('provider', 'envato')->
            select(['provider_username']);
    }

    public function purchaseCount()
    {
        return CustomerPurchase::where('user_id', $this->id)->count();
    }

    public function format(){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'avatar' => $this->avatar,
            'total_tickets' => $this->total_tickets,
            'locale' => $this->locale,
        ];
    }

    /**
	 * Send the email verification notification.
	 *
	 * @return void
	 */
	public function sendEmailVerificationNotification()
	{
		if((boolean)setting('verify_email', true) === true){
			$this->notify(new VerifyEmail);
		}
	}

    public function getLocale(){
        return $this->locale;
    }
}