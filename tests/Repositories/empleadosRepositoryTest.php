<?php namespace Tests\Repositories;

use App\Models\empleados;
use App\Repositories\empleadosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class empleadosRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var empleadosRepository
     */
    protected $empleadosRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->empleadosRepo = \App::make(empleadosRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_empleados()
    {
        $empleados = empleados::factory()->make()->toArray();

        $createdempleados = $this->empleadosRepo->create($empleados);

        $createdempleados = $createdempleados->toArray();
        $this->assertArrayHasKey('id', $createdempleados);
        $this->assertNotNull($createdempleados['id'], 'Created empleados must have id specified');
        $this->assertNotNull(empleados::find($createdempleados['id']), 'empleados with given id must be in DB');
        $this->assertModelData($empleados, $createdempleados);
    }

    /**
     * @test read
     */
    public function test_read_empleados()
    {
        $empleados = empleados::factory()->create();

        $dbempleados = $this->empleadosRepo->find($empleados->id);

        $dbempleados = $dbempleados->toArray();
        $this->assertModelData($empleados->toArray(), $dbempleados);
    }

    /**
     * @test update
     */
    public function test_update_empleados()
    {
        $empleados = empleados::factory()->create();
        $fakeempleados = empleados::factory()->make()->toArray();

        $updatedempleados = $this->empleadosRepo->update($fakeempleados, $empleados->id);

        $this->assertModelData($fakeempleados, $updatedempleados->toArray());
        $dbempleados = $this->empleadosRepo->find($empleados->id);
        $this->assertModelData($fakeempleados, $dbempleados->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_empleados()
    {
        $empleados = empleados::factory()->create();

        $resp = $this->empleadosRepo->delete($empleados->id);

        $this->assertTrue($resp);
        $this->assertNull(empleados::find($empleados->id), 'empleados should not exist in DB');
    }
}
