<?php

namespace App;

use App\Dog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['deleted_at'];

    public function dog(){
        return $this->hasOne('App\Dog','user_id');
    }



    public function friendsOfMine(){
        return $this->belongsToMany('App\User', 'friends', 'user_id', 'friend_id');
    }
    public function friendOf(){
        return $this->belongsToMany('App\User', 'friends', 'friend_id', 'user_id');
    }
    public function friends(){
        return $this->friendsOfMine()->wherePivot('approved', true)->get()->merge($this->friendOf()->wherePivot('approved', true)->get());
    }
    public function friendRequests(){
        return $this->friendsOfMine()->wherePivot('approved', false)->get();
    }
    public function friendRequestsPending(){
        return $this->friendOf()->wherePivot('approved', false)->get();
    }
    public function hasFriendRequestPending(User $user){
        return (bool) $this->friendRequestsPending()
        ->where('id', $user->id)->count();

    }

    public function hasFriendRequestReceived(User $user){
        return (bool) $this->friendRequests()
        ->where('id', $user->id)->count();
    }

    public function addFriend(User $user){
        $this->friendOf()->attach($user->id);
    }
    public function acceptFriendRequest(User $user){
        $this->friendRequests()
        ->where('id', $user->id)->first()->pivot->update([
                'approved' => true,
            ]);
    }

    public function isFriendsWith(User $user){
        return (bool) $this->friends()->where('id', $user->id)->count();
    }


}
