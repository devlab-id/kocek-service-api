<?php

namespace App\Ship\Abstracts\Tests\PhpUnit;

use App\Ship\Traits\HashIdTrait;
use App\Ship\Traits\TestCaseTrait;
use App\Ship\Traits\TestTraits\PhpUnit\TestAssertionHelperTrait;
use App\Ship\Traits\TestTraits\PhpUnit\TestAuthHelperTrait;
use App\Ship\Traits\TestTraits\PhpUnit\TestRequestHelperTrait;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Foundation\Testing\TestCase as LaravelTestCase;

abstract class TestCase extends LaravelTestCase
{
    use TestCaseTrait;
    use TestAuthHelperTrait;
    use TestRequestHelperTrait;
    use TestAssertionHelperTrait;
    use HashIdTrait;
    use LazilyRefreshDatabase;

    /**
     * The base URL to use while testing the application.
     */
    protected string $baseUrl;

    /**
     * Seed the DB on migrations.
     */
    protected bool $seed = true;

    /**
     * Refresh the in-memory database.
     */
    protected function refreshInMemoryDatabase(): void
    {
        $this->artisan('migrate', $this->migrateUsing());

        // Install Passport Client for Testing
        $this->setupPassportOAuth2();

        $this->app[Kernel::class]->setArtisan(null);
    }

    /**
     * Refresh a conventional test database.
     */
    protected function refreshTestDatabase(): void
    {
        if (!RefreshDatabaseState::$migrated) {
            $this->artisan('migrate:fresh', $this->migrateFreshUsing());
            $this->setupPassportOAuth2();

            $this->app[Kernel::class]->setArtisan(null);

            RefreshDatabaseState::$migrated = true;
        }

        $this->beginDatabaseTransaction();
    }
}
