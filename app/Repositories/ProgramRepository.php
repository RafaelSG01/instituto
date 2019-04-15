<?php 

namespace App\Repositories;

use App\Repositories\Support\AbstractRepository;

use App\Models\Program;

class ProgramRepository extends AbstractRepository
{
	
	protected $modelClassName = Program::class;
	
}