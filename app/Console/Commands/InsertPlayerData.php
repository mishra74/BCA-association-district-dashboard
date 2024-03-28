<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Player;

class InsertPlayerData extends Command
{
    protected $signature = 'player:insert {name} {father_name} {gender} {category} {dob} {email} {mobile} {aadhar} {proficiency}';

    protected $description = 'Insert player data into the players table';

    public function handle()
    {
        $data = [
            'name' => $this->argument('name'),
            'father_name' => $this->argument('father_name'),
            'gender' => $this->argument('gender'),
            'category' => $this->argument('category'),
            'dob' => $this->argument('dob'),
            'email' => $this->argument('email'),
            'mobile' => $this->argument('mobile'),
            'aadhar' => $this->argument('aadhar'),
            'proficiency' => $this->argument('proficiency'),
        ];

        Player::create($data);

        $this->info('Player data inserted successfully.');
    }
}
