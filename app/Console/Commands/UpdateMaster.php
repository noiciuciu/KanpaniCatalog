<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Skill;
use App\MasterItem;

class UpdateMaster extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'master:update-skills';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Master Skills';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $skills = Skill::all();
        $arr = [];
        $count = 0;
        foreach($skills as $skill) {
            array_push($arr, $skill["details"]);
            $count++;
        }
        $masterSkills = new MasterItem;
        $masterSkills->name = "master_skills";
        $masterSkills->details = getJsonArrayText($arr);
        $masterSkills->save();
        $this->info("Total: ".$count." skills.");
    }
}
