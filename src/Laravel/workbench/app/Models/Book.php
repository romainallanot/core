<?php

namespace Workbench\App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource(
    paginationEnabled: true,
    paginationItemsPerPage: 5,
)]
class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
