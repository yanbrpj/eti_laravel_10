<?php

namespace App\Repositories;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;

class SupportEloquentORM implements SupportRepositoryInterface
{

    public function getAll(string $filter = null): array
    {
        // TODO: Implement getAll() method.
    }

    public function findOne(string $id): \stdClass|null
    {
        // TODO: Implement findOne() method.
    }

    public function delete(string $id): void
    {
        // TODO: Implement delete() method.
    }

    public function new(CreateSupportDTO $dto): \stdClass
    {
        // TODO: Implement new() method.
    }

    public function update(UpdateSupportDTO $dto): \stdClass|null
    {
        // TODO: Implement update() method.
    }
}
