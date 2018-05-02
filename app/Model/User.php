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
                              'name' => $name,
                              'email' => $email,
                              'password' => $pass,
                              'ukey' => $ukey,
                            ]);
    }
    public function getUserId($id)
    {
        return $this->find($id);

    }
    public function getUserUkey($ukey)
    {
      $data = $this->select()
                  ->where('ukey',$ukey)
                  ->first();
      return $data;
    }

    public function setUserUpdate($request,$id)
    {
      $user = $this->select()->where('ukey',$id)->first();
      $pass = bcrypt($request->password);
      return $user->update([
                              'name' => $request->name,
                              'email' => $request->email,
                              'password' => $pass,
                            ]);
    }
}
