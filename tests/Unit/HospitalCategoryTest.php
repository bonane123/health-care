<?php

namespace Tests\Unit;

use App\Models\Hospital;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use PHPUnit\Framework\TestCase;

class HospitalCategoryTest extends TestCase
{

    use RefreshDatabase;
    use WithoutMiddleware;

    public function test_HospitalCategoryStore(): void
    {

        $hospitalCategory = new Hospital(['category' => 'Provincial hospital']);
        $this->assertEquals('Provincial hospital', $hospitalCategory->category);
    }
}
