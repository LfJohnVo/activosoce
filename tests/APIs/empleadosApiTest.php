<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\empleados;

class empleadosApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_empleados()
    {
        $empleados = empleados::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/empleados', $empleados
        );

        $this->assertApiResponse($empleados);
    }

    /**
     * @test
     */
    public function test_read_empleados()
    {
        $empleados = empleados::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/empleados/'.$empleados->id
        );

        $this->assertApiResponse($empleados->toArray());
    }

    /**
     * @test
     */
    public function test_update_empleados()
    {
        $empleados = empleados::factory()->create();
        $editedempleados = empleados::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/empleados/'.$empleados->id,
            $editedempleados
        );

        $this->assertApiResponse($editedempleados);
    }

    /**
     * @test
     */
    public function test_delete_empleados()
    {
        $empleados = empleados::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/empleados/'.$empleados->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/empleados/'.$empleados->id
        );

        $this->response->assertStatus(404);
    }
}
