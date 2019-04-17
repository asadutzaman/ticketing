<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

	public function Leads() {
    	return $this->hasMany('App\Ticketlead', 'ticket_id');
    }

    public function Createdby() {
    	return $this->belongsTo('App\User', 'createdbyuser_id');
    }

    public function Updatedby() {
    	return $this->belongsTo('App\User', 'updatedbyuser_id');
    }


}
