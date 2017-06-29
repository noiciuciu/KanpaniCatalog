<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\MasterItem;

class MasterDataController extends Controller {

    //
    public function updateSkills(Request $request) {
        $skills = $request->all();
        foreach($skills as $skill) {
            $count = Skill::where('skill_id', $skill['id'])->count();
            if ($count > 0) continue;

            $newSkill = new Skill;
            $newSkill->skill_id = $skill['id'];
            $newSkill->name     = $skill['name'];
            $newSkill->details  = $skill['details'];

            $newSkill->save();
        }
    }

    public function getMasterSkills() {
        $masterSkill = MasterItem::where('name', 'master_skills')->orderBy('updated_at', 'desc')->first();
        return $masterSkill['details'];
    }
}
