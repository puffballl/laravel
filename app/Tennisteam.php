<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tennisteam extends Model
{
    public function test(){
        $registration = new \App\Tennisteam();

        $registration->teamname = 'TVHHW';

        $registration->save();
        return 'Oke, genoteerd';
    }
}
