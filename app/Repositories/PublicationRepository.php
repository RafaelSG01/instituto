<?php 

namespace App\Repositories;

use App\Repositories\Support\AbstractRepository;

use App\Models\Publication;

class PublicationRepository extends AbstractRepository
{
	
	protected $modelClassName = Publication::class;
	
}