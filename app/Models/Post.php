<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_id' ,
        'project_id' ,
        'project_category' ,
        'project_description' ,
        'project_faculty' ,
        'project_name_en' ,
        'project_name_th' ,
        'project_keyword' ,
        'project_email_leader' ,
        'project_status_leader' ,
        'project_start_at' ,
        'project_end_at' ,
        'project_duration',
        'resource_funds',
        'funds_category',
        'journal_title',
        'project_status',
        'project_status',
        'project_quartile',
        'project_impact_factor',
        'student_name',
        'student_degree',
        'journal_position',
        'fund_money',
        'db_website',
        'fiscal_year',
        'project_benefit',
        'others_reward',
        'project_benefit_description',
        'others_reward_description'
    ];

    
}
