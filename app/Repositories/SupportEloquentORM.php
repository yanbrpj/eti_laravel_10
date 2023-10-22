<?php

namespace App\Repositories;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Models\Support;

class SupportEloquentORM implements SupportRepositoryInterface
{

    public function __construct(
        protected Support $model
    ) {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->where(function ($query) use ($filter) {
                        if($filter) {
                            $query->where('subject', $filter);
                            $query->orWhere('body', 'LIKE', "%{$filter}%");
                        }
                    })
                    ->all()
                    ->toArray();
    }

    public function findOne(string $id): \stdClass|null
    {
        $support = $this->model->find($id);

        if(!$support) {
            return null;
        }

        return (object) $support->toArray();
    }

    public function delete(string $id): void
    {
        $this->model->findOrFail($id)->delete();
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
