<?php

namespace App\Http\Requests;

class UpdateMemberRequest extends StoreMemberRequest
{
    public function rules()
    {
        $rules = parent::rules();
        $rules['email'] = 'requiered|unique:users,email,' . $this->route('member');
        return $rules;
    }
}
