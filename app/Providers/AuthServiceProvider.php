<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Administrator;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Recruiter;
use App\Models\Selector;
use App\Policies\AdministratorPolicy;
use App\Policies\CandidatePolicy;
use App\Policies\CompanyPolicy;
use App\Policies\RecruiterPolicy;
use App\Policies\SelectorPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Administrator::class => AdministratorPolicy::class,
        Selector::class => SelectorPolicy::class,
        Candidate::class => CandidatePolicy::class,
        Recruiter::class => RecruiterPolicy::class,
        Company::class => CompanyPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
