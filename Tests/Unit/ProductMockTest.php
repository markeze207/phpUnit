<?php

use App\Config\Database;
use App\Controllers\ProductControllers;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

// Тест, чтобы понять как использовать mock
class ProductMockTest extends TestCase
{
    private ProductControllers $object;
    private $pdo;
    protected function setUp(): void
    {
        $database = $this->createMock(Database::class); // Создаем фейк-класс бд
        $this->object = new ProductControllers($database); // Создаем класс ProductControllers с фейк классом для конструктора
        $this->pdo = $this->createMock(PDO::class); // Создаем фейк класс PDO
        $database->expects($this->any())->method('getConnection')->willReturn($this->pdo); // Обращаемся к методу из класса
    }

    public function testEmptyLatestProduct()
    {
        $expectedResult = [];
        $count = 0;

        $pdoStatement = $this->createMock(\PDOStatement::class); // Создаем фейк-класс PDOStatement

        $this->pdo->expects($this->once())->method('query')->willReturn($pdoStatement); // Используем метод PDOStatement

        $pdoStatement->expects($this->once())->method('fetch')->willReturn($expectedResult); // Используем метод PDOStatement

        $result = $this->object->getLatestProduct($count);
        $this->assertEmpty($result);
    }
}