<?php

namespace Tests\Feature;

use App\Models\Hospital;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HospitalTest extends TestCase
{

    public function test_fetch_hospital_categories(): void
    {



        $response = $this->getJson(route('hospital.category.view'));

        $responseData = $response->decodeResponseJson();

        // dd($responseData);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'data',
            ]);

        $this->assertTrue($responseData['success']);
        $this->assertArrayHasKey('data', $responseData);
    }

    public function test_fetch_single_hospital_category()
    {

        $list = Hospital::factory()->create();
        $response = $this->getJson(route('hospital.category.show', $list->id))
            ->assertOk()
            ->json();

        $this->assertEquals($response['category'], $list->category);
    }

    public function test_store_new_hospital_category()
    {

        $response = $this->postJson(route('hospital.category.new.store'), ['category' => 'new hospital category'])
            ->assertCreated()
            ->json();

        // Assertion

        $this->assertEquals('new hospital category', $response['category']);
        $this->assertDatabaseHas('hospitals', ['category' => 'new hospital category']);
    }
}
