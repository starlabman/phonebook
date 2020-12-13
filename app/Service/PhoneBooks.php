<?php 
namespace App\Service;
use Illuminate\Support\Str;

class PhoneBook
{
    public static function searchByName(string $name): array
    {
        return collect(self::contacts())
                ->filter(fn($contact) => Str::contains($contact['name'], $name))
                ->all();
    }

    public static function searchByCity(string $city): array
    {
        return collect(self::contacts())
                ->filter(fn($contact) => Str::contains($contact['name'], $city))
                ->all();
    }

    public static function searchByEmail(string $email): array
    {
        return collect(self::contacts())
                ->filter(fn($contact) => Str::contains($contact['name'], $email))
                ->all();
    }

    public static function contacts(): array
    {
        return [
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'phone' => '23485',
                'city' => 'Quebec, CAT'

            ],
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'phone' => '23485',
                'city' => 'Quebec, CAT'

            ],
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'phone' => '23485',
                'city' => 'Quebec, CAT'

            ],
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'phone' => '23485',
                'city' => 'Quebec, CAT'

            ],
        ];
    } 
}