<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','email','password','ukey'];
    public $timestamps = false;

    public function setUser($name,$email,$pass,$ukey)
    {
      $pass = bcrypt($pass);
      return $this->create([
                              'name' = $name,
                              'email' = $email,
                              'password' = $pass,
                              'ukey' = $ukey,
                            ]);
    }
    public function getUserId($id)
    {
        return $this->find($id);
    }

    public function setUserUpdate($request,$id)
    {
      $user = $this->find($id);
      $pass = bcrypt($request->password);
      return $user->update([
                              'name' = $request->nome,
                              'email' = $request->email,
                              'password' = $pass,
                            ]);
    }
}
