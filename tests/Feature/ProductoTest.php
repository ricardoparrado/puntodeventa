<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producto;

class ProductoTest extends TestCase
{
    /**
     * Test para crear un producto.
     *
     * @return void
     */
    public function test_crear_producto(): void
    {
        // Simulamos una solicitud POST para crear un producto
        $response = $this->post('/api/v1/productos', [
            'nombre' => 'producto 1',
            'descripcion' => 'descripcion 1',
            'precio' => 100,
            'existencias' => 10,

        ]);

        // Verificamos que la solicitud sea exitosa (código de respuesta HTTP 201)
        $response->assertStatus(201);

        // Verificamos que el producto se haya almacenado en la base de datos
        $this->assertDatabaseHas('productos', [
            'nombre' => 'producto 1',
            'descripcion' => 'descripcion 1',
            'precio' => 100,
            'existencias' => 10,

        ]);
    }

    // Test para obtener todos los productos
    public function test_obtener_todos_los_productos(): void
    {
        $response = $this->get('/api/v1/productos');
        $response->assertStatus(200);
    }

    // Test para obtener un producto
    public function test_obtener_un_producto(): void
    {
        // $producto = Producto::factory()->create();

        $response = $this->get("/api/v1/productos/9");
        $response->assertStatus(200);
    }

    // Test para actualizar un producto
    public function test_actualizar_producto(): void
    {
        // $producto = Producto::factory()->create();

        $response = $this->put("/api/v1/productos/9", [
            'nombre' => 'producto actualizado',
            'descripcion' => 'descripcion actualizado',
            'precio' => 50.000,
            'existencias' => 20,
            // Agrega más campos necesarios para actualizar el producto
        ]);
        $response->assertStatus(200);
    }

    // Test para eliminar un producto
    public function test_eliminar_producto(): void
    {
        // Suponemos que el producto con ID 9 existe en la base de datos

        $response = $this->delete("/api/v1/productos/9");

        // Verificar que la solicitud sea exitosa (código de respuesta HTTP 200)
        $response->assertStatus(200);

        // Verificar que el producto se haya eliminado de la base de datos
        $this->assertDatabaseMissing('productos', ['id' => 9]);
    }
}
