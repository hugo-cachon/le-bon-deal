<?php

namespace App\Factory;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Users>
 *
 * @method static Users|Proxy createOne(array $attributes = [])
 * @method static Users[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Users[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Users|Proxy find(object|array|mixed $criteria)
 * @method static Users|Proxy findOrCreate(array $attributes)
 * @method static Users|Proxy first(string $sortedField = 'id')
 * @method static Users|Proxy last(string $sortedField = 'id')
 * @method static Users|Proxy random(array $attributes = [])
 * @method static Users|Proxy randomOrCreate(array $attributes = [])
 * @method static Users[]|Proxy[] all()
 * @method static Users[]|Proxy[] findBy(array $attributes)
 * @method static Users[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Users[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static UsersRepository|RepositoryProxy repository()
 * @method Users|Proxy create(array|callable $attributes = [])
 */
final class UsersFactory extends ModelFactory
{
    private UserPasswordHasherInterface $hasher;

    private array $rolesAvailable = ["ROLE_ADMIN", "ROLE_SUPERADMIN"];

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
        $this->hasher = $hasher;
    }

    protected function getDefaults(): array
    {
//        $roles = [];
//        $roles[] = $this->rolesAvailable[rand(0, count($this->rolesAvailable) - 1)];


        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'firstname' => self::faker()->firstName(),
            'lastname' => self::faker()->lastName(),
            'email' => self::faker()->email(),
            'createAd' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'updatedAt' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'roles' => $this->rolesAvailable,
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this->afterInstantiate(function(Users $users): void {
            $users->setPassword($this->hasher->hashPassword($users, "password"));
        });
    }

    protected static function getClass(): string
    {
        return Users::class;
    }
}
